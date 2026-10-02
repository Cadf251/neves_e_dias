export function initNav(){
  const nav = document.querySelector(".js--nav");
  const navRecolhidoClass = "nav--recolhido";
  const navBtns = nav.querySelectorAll(".js--nav-btn");
  const navLists = nav.querySelectorAll(".js--nav-list");

  const listShowedClass = "nav__item__down-content--ativo";

  const navLinks = nav.querySelectorAll(".js--nav-link");
  const navLinkClass= "nav__link--selecionado";

  const navBar = nav.querySelector(".js--nav-bar");
  const navContent = nav.querySelector(".js--nav-content");
  const navContentClass = "nav__content--ativo";

  for(let i = 0; i < navBtns.length; i++){
    navBtns[i].addEventListener("click", (e) => {changeNavList(navLists[i].classList)});
  }

  function resetNavList(){
    navLists.forEach(list => {
      list.classList.remove(listShowedClass);
    });
  }

  function changeNavList(classList){
    if(classList.contains(listShowedClass))
      classList.remove(listShowedClass);
    else {
      resetNavList();
      classList.add(listShowedClass);
    }
  }

  navLinks.forEach(link => {
    let linkPath = new URL(link.href).pathname;
    let currentPath = window.location.pathname;
    if(linkPath === currentPath)
      link.classList.add(navLinkClass);
  });

  var lastScrollTop = 0;

  window.addEventListener("scroll", function(){
    var st = window.pageYOffset || document.documentElement.scrollTop;
    if (st > lastScrollTop) {
      // downscroll code
      nav.classList.add(navRecolhidoClass);
    } else if (st < lastScrollTop) {
      // upscroll code
      nav.classList.remove(navRecolhidoClass);
    }
    lastScrollTop = st <= 0 ? 0 : st;
  });

  navBar.addEventListener("click", () => {
    if (navContent.classList.contains(navContentClass))
      navContent.classList.remove(navContentClass);
    else 
      navContent.classList.add(navContentClass);
  })
}