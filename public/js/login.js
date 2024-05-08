var login = document.querySelector(".login");
var register = document.querySelector(".sign-up");
var reset = document.querySelector(".reset");




var link_div = document.querySelector(".link-div > a")
var forgot_password = document.querySelector(".forgot-password");
var signin_button = document.querySelector(".signin-button");
var signup_button = document.querySelector("signup-button");


reset.addEventListener("click",function () {

    reset.removeAttribute("hidden");
    reset.classList.remove("hide");
    reset.classList.add("show");

    link_div.forEach(element => {
         reset.classList.remove("hidden");
    });


    reset_button.classList.add("selected")


});

