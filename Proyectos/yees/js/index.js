// alert("message?: DOMString");

let btn_modal_bs4 = document.querySelector(".btn_modal_bs4");
let cuerpo_modal_bs4 = document.querySelector(".modal .cuerpo");


let li_elemento = document.querySelectorAll(".li_elemento li");
let li_elemento_span = document.querySelectorAll("li span");

for (var i = 0; i < li_elemento.length; i++) {
  li_elemento[i].addEventListener("click", function(argument) {
    console.log(this.childNodes[0].textContent.trim());
    btn_modal_bs4.click();
    console.log(cuerpo_modal_bs4);
    cuerpo_modal_bs4.textContent = this.childNodes[0].textContent.trim();
    // btn_modal_bs4.style.display = "block";
  });
}