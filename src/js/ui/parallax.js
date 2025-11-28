export function initParallax() {
  const parallax = document.querySelector('.js--intersetion');

  if (parallax !== null) {
    window.addEventListener('scroll', () => {
      let offset = window.pageYOffset;
      parallax.style.backgroundPositionY = - 100 + offset * 0.05 + "px";
    });
  } else {
    console.log("Parallax is null");
  }
}