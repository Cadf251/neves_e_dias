export function initParallax() {
  const parallax = document.querySelector('.js--intersetion');

  if (window.innerWidth > 768){
    if (parallax !== null) {
      window.addEventListener('scroll', () => {
        let offset = window.pageYOffset;
        parallax.style.backgroundPositionY = - 100 + offset * 0.05 + "px";
      });
    }
  }
}