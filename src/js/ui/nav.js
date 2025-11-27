export function initNav(){
  const nav = document.querySelector(".js--nav");
  const navBtns = nav.querySelectorAll(".js--nav-btn");
  const navLists = nav.querySelectorAll(".js--nav-list");

  const listShowedClass = "nav__item__down-content--ativo";

  const navLinks = nav.querySelectorAll(".js--nav-link");
  const navLinkClass= "nav__link--selecionado";

  for(let i = 0; i < navBtns.length; i++){
    navBtns[i].addEventListener("click", (e) => {changeNavList(navLists[i].classList)});
    console.log("Event listener added to pos "+i);
  }

  function resetNavList(){
    navLists.forEach(list => {
      list.classList.remove(listShowedClass);
    });
  }

  function changeNavList(classList){
    resetNavList();
    if(classList.contains(listShowedClass))
      classList.remove(listShowedClass);
    else
      classList.add(listShowedClass);
  }

  navLinks.forEach(link => {
    let linkPath = new URL(link.href).pathname;
    let currentPath = window.location.pathname;
    if(linkPath === currentPath)
      link.classList.add(navLinkClass);
  });
}