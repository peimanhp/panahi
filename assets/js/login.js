window.onload = replaceEnToFaDigits();
function replaceEnToFaDigits() {
  console.log("js loaded");
  let map = [
    "&#1776;",
    "&#1777;",
    "&#1778;",
    "&#1779;",
    "&#1780;",
    "&#1781;",
    "&#1782;",
    "&#1783;",
    "&#1784;",
    "&#1785;",
  ];
  document.body.innerHTML = document.body.innerHTML.replace(
    /\d(?=[^<>]*(<|$))/g,
    function ($0) {
      return map[$0];
    }
  );
}

const mobile = document.querySelector(".input-code");
const submit = document.querySelector(".btn-sms");
const validationMessage = document.querySelector(".validation-message");



// submit.addEventListener("click", validate);

// function validate(e){
//   if (!mobile.value) { alert("empty")
//     e.preventDefault();
//   }
// }

window.addEventListener("load", function () {
  function phoneNumberHandler() {
    const thisElement = mobile;
    const value = mobile.value;

    let newValue = value.replace(/[^\d]/gi, "").trim();
    const tempValue = newValue;

    newValue = newValue.substr(0, 11);
    if (newValue.length < 11) {
      const repeate = 11 - newValue.length;
      newValue += "*".repeat(repeate);
    }

    let pos = newValue.search(/[^\d]/gi);

    newValue = `${newValue.slice(0, 4)} ${newValue.slice(
      4,
      7
    )} ${newValue.slice(7, 9)} ${newValue.slice(9, 11)}`;

    thisElement.value = newValue;

    if (pos != -1) {
      if (5 <= pos && pos <= 7) {
        pos += 1;
      } else if (8 <= pos && pos <= 9) {
        pos += 2;
      } else if (10 <= pos && pos <= 11) {
        pos += 3;
      }

      setTimeout(() => {
        phoneNumberDOM.setSelectionRange(pos, pos);
      }, 1);
    }

    thisElement.classList.remove("border", "border-danger", "border-3");
    thisElement.classList.remove("border", "border-success", "border-3");
    validationMessage.classList.remove("show");
    submit.removeAttribute("disabled", "");

    if (tempValue.length >= 11 && tempValue.search("09") == 0) {
      thisElement.classList.add("border", "border-success", "border-3");
      validationMessage.classList.remove("show");
    } else if (tempValue.length >= 11 && tempValue.search("09") != 0) {
      thisElement.classList.add("border", "border-danger", "border-3");
      validationMessage.classList.add("show");
      submit.setAttribute("disabled", "");
    }
  }

  const phoneNumberDOM = mobile;

  phoneNumberDOM.addEventListener("input", phoneNumberHandler);
  phoneNumberDOM.addEventListener("focus", function () {
    const thisElement = mobile;
    const event = new Event("input");
    thisElement.dispatchEvent(event);
  });
});



// function validate(e) {
//   let regex = new RegExp(
//     "(0|98|0098|98)?([ ]|-|[()]){0,2}9[0-9]([ ]|-|[()]){0,2}(?:[0-9]([ ]|-|[()]){0,2}){8}"
//   );  
//   let result = regex.test(mobile.value);
//   if (result == true) {
//     alert("phone validated");
//   } else {
//     alert("phone not validated");
//     e.preventDefault();
//   }
// }
