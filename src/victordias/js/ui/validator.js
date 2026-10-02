export function initFormValidator() {
  const forms = document.querySelectorAll(".js--form");

  console.log(forms);

  if (!forms) return;

  forms.forEach((form) => {
    const button = form.querySelector(".js--button");

    console.log(button);

    animateInputs(form);

    button.addEventListener("click", () => {
      validateForm(button.closest(".js--form"));
    })
  });

  // Lógica de inputs
  function animateInputs(form) {
    const inputs = form.querySelectorAll("input, textarea, select");

    inputs.forEach(input => {
      input.addEventListener("input", () => validateField(input.closest(".form-field")));
    });
  }

  function validateForm(form) {
    const fields = form.querySelectorAll(".form-field");

    var ok = true;

    fields.forEach((field) => {
      if (!validateField(field))
      ok = false;
    })
    
    if (ok) {
      // Logica para o submit
      form.submit();
    }
  }

  function validateField(field) {
    var label = field.querySelector("label");
    var input = field.querySelector("input, textarea, select");

    // Input é válido?
    var isValid = validadeInput(input.dataset.validation, input.value, input.required);

    // Faz ajustes na UI
    updateFieldUi(input, isValid);

    return isValid;
  }

  function updateFieldUi(input, isValid) {
    var cl = input.classList;
    var valid = "is-valid";
    var notValid = "is-not-valid";

    if (isValid) {
      updateInputClass(cl, notValid, valid);
    } else {
      updateInputClass(cl, valid, notValid);
    }

    function updateInputClass(cl, toRemove, toAdd){
      cl.remove(toRemove);
      if (!cl.contains(toAdd)) cl.add(toAdd);
    }
  }

  function validadeInput(type, value, required) {
    /* Se não for obrigatório e estiver vazio, devolver true */
    if ((!required) && value == "") return true;
    
    switch(type) {
      case "text":
        return value != "";
      case "email":
        return value.includes("@") && value.includes(".");
      case "phone":
        return value.length == 14;
      default:
        return false;
    }
  }
}