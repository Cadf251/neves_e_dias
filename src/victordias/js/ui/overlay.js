import { frozeBody, unfrozeBody } from "./body";

export function initOverlay() {
  const overlay = document.querySelector(".js--overlay");

  if (!overlay) return;

  const closeToggle = document.querySelector(".js--overlay-close");

  closeToggle.addEventListener("click", () => {
    close();
  });
  
  formBtns();

  function formBtns(){
    const btns = document.querySelectorAll(".js--form-btn");
    if (!btns) return;

    btns.forEach((btn) => {
      btn.addEventListener("click", () => {
        open();
        showModule("#overlay--form");
      });
    });
  }

  privacyBtn();

  function privacyBtn() {
    const btns = document.querySelectorAll(".js--privacy-btn");
    if (!btns) return;

    btns.forEach((btn) => {
      btn.addEventListener("click", () => {
        open();
        showModule("#overlay--privacy");
      });
    });
  }

  function open() {
    if (!overlay.classList.contains("is-open"))
      overlay.classList.add("is-open");

    frozeBody();
  }

  function close() {
    overlay.classList.remove("is-open");

    unfrozeBody();
  }

  function showModule(id) {
    let t = overlay.querySelector(id);

    if (!t) return;

    hideAllModules();

    t.style.display = "block";
  }

  function hideAllModules() {
    let ts = overlay.querySelectorAll(".js--overlay-module");
    
    ts.forEach((t) => {
      t.style.display = "none";
    });
  }
}