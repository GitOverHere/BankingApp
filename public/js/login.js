var signin = document.querySelector(".signin");
var register = document.querySelector(".signup");
var reset = document.querySelector(".reset");

var link_div = document.querySelectorAll(".link-div > a");
var forgot_password = document.querySelector(".forgot-password");
var signin_button = document.querySelector(".signin-button");
var signup_button = document.querySelector(".signup-button");

signin_button.addEventListener("click", function () {
    signin.classList.remove("hide");
    signin.classList.add("show");

    link_div.forEach(element => {
        element.classList.remove("selected");
    });

    signin_button.classList.add("selected");
});

signup_button.addEventListener("click", function () {
    register.classList.remove("hide");
    register.classList.add("show");

    link_div.forEach(element => {
        element.classList.remove("selected");
    });

    signup_button.classList.add("selected");
});

forgot_password.addEventListener("click", function () {
    alert("lasgana");
    reset.classList.remove("hide");
    reset.classList.add("show");

    link_div.forEach(element => {
        element.classList.remove("selected");
    });

    forgot_password.classList.add("selected");
});

async function login() {
    // Add login functionality here


    const formData = new FormData(signin);






    $response = await fetch("signin/login", {
        method : "POST",
        mode: "cors",
        credentials: 'include',
       body: formData


    })

     const result = await response.json()

    if (response["code"] == "200") {

        location.href="dashboard"

    }



}

async function register() {
    // Add register functionality here

    const formData = new FormData(signup);

      $response = await fetch("signin/register", {
        method : "POST",
          mode: "cors",
         credentials: 'include',
        body: formData

    })

    const result = await response.json()

    if (response["code"] == "200") {

        location.href="dashboard"

    }
}

async function reset() {
    // Add reset functionality here

    const formData = new FormData(reset);

      $response = await fetch("reset/beginreset", {
        method : "POST",
        mode : "cors",
        body: formData

    })


const result = await response.json()



}
