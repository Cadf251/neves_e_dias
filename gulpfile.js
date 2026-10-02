// -------------------------
// IMPORTS
// -------------------------
const { src, dest, watch, series, parallel } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
// const cleanCSS = require("gulp-clean-css"); // não suporta @layer — minificação feita pelo próprio Sass
// const concat = require("gulp-concat");
// const terser = require("gulp-terser");
// const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");
const sourcemaps = require("gulp-sourcemaps");
const esbuild = require("esbuild");
const browserSync = require('browser-sync').create();
const rename = require("gulp-rename");
const svgSprite = require('gulp-svg-sprite');

// -------------------------
// PATHS & MODULES
// -------------------------
const modules = ["office", "victordias"];

const paths = {
  scssEntries: "src/*/scss/main.scss",
  scssWatch: "src/**/*.scss",
  jsEntries: "src/*/js/main.js",
  jsWatch: "src/**/*.js",
  img: "src/*/img/**/*.{jpg,jpeg,png}",
  imgWebp: "src/*/img/**/*.{webp,avif,ico}",
  fonts: "src/*/fonts/**/*.{woff2}",
  distCss: "public/*/css/",
  distJs: "public/js/",
  distImg: "public/img/",
  php: "**/*.php"
};

// -------------------------
// AUTO RELOADCOM BROWSER SYNC
// -------------------------
function serve(done) {
  browserSync.init({
    proxy: "http://neves-e-dias.local/",
    open: false,
    notify: false
  });
  done();
}

function reload(done) {
  browserSync.reload();
  done();
}

// -------------------------
// COMPILA SCSS em CSS MINIFICADO
// -------------------------
function buildSCSS() {
  return src(paths.scssEntries)
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(rename(function (path) {
      path.dirname = path.dirname.replace('scss', 'css');
      path.basename = "main.min";
    }))
    .pipe(sourcemaps.write("."))
    .pipe(dest("public/"))
    .pipe(browserSync.stream());
}

// -------------------------
// BUNDLE & MINIFY JS
// -------------------------
async function buildJS() {
  const { glob } = require("glob");
  const path = require("path");

  const entryObject = {};

  modules.forEach(module => {
    let file = "src/" + module + "/js/main.js";
    const key = `${module}/js/main.min`;
    entryObject[key] = file;
  });

  await esbuild.build({
    entryPoints: entryObject,
    bundle: true,
    outdir: "public",
    minify: true,
    format: "iife",
    sourcemap: false
  });

  browserSync.reload();
}

// -------------------------
// CONVERTE IMG → WEBP (MODULAR)
// -------------------------
function convertImg() {
  const imgPaths = modules.map(m => `src/${m}/img/**/*.{jpg,jpeg,png}`);

  return src(imgPaths, { base: "src" })
    .pipe(webp({ quality: 85 }))
    .pipe(dest("public/"));
}

// -------------------------
// COPIA FORMATOS JÁ ACEITOS (WEBP, AVIF, ICO)
// -------------------------
function copyWebp() {
  const webpPaths = modules.map(m => `src/${m}/img/**/*.{webp,avif,ico}`);

  return src(webpPaths, { base: "src" })
    .pipe(dest("public/"));
}

// -------------------------
// COPIA FONTS (MODULAR)
// -------------------------
function copyFonts() {
  const fontPaths = modules.map(m => `src/${m}/fonts/**/*.woff2`);

  return src(fontPaths, { base: "src" })
    .pipe(dest("public/"));
}

// -------------------------
// GERA SVG SPRITE (MODULAR)
// -------------------------
function buildIcons() {
  // Mapeamos as pastas de ícones de cada módulo
  const iconPaths = modules.map(m => `src/${m}/img/icons/*.svg`);

  return src(iconPaths, { base: "src" })
    .pipe(svgSprite({
      mode: {
        symbol: { // O modo 'symbol' é o mais moderno para usar com <use> no HTML
          dest: ".",
          sprite: "icons.svg" // Nome do arquivo final
        }
      },
      shape: {
        id: {
          generator: "%s" // Os ícones serão acessados por id="icon-nome-do-arquivo"
        }
      }
    }))
    .pipe(rename(function (path) {
      // O dirname aqui vem como "office/img/icons"
      // Vamos ajustar para sair em "office/img"
      path.dirname = path.dirname.replace('/icons', '');
    }))
    .pipe(dest("public/shared/img/"));
}

// -------------------------
// WATCH
// -------------------------
function watchFiles() {
  watch(paths.scssWatch, buildSCSS);
  watch(paths.jsWatch, buildJS);
  watch(paths.img, convertImg);
  watch(paths.imgWebp, copyWebp);
  watch(paths.php, reload);
  watch(paths.fonts, copyFonts);
}

// -------------------------
// TASKS PÚBLICAS
// -------------------------
exports.dev = parallel(buildSCSS, buildJS, convertImg, buildIcons, serve, watchFiles, copyFonts);
exports.build = parallel(buildSCSS, buildJS, buildIcons, convertImg, copyFonts);
exports.default = exports.dev;