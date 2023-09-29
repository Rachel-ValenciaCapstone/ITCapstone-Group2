// login and signup script
const formOpenBtn = document.querySelector("#form_open"),
login = document.querySelector(".login"),
formContainer = document.querySelector(".form_container"),
formCloseBtn = document.querySelector(".form_close"),
signupBtn = document.querySelector("#signup"),
loginBtn = document.querySelector("#login"),
pwShowHide = document.querySelectorAll(".pw_hide");

formOpenBtn.addEventListener("click", () => login.classList.add("show"));
formCloseBtn.addEventListener("click", () => login.classList.remove("show"));

pwShowHide.forEach(icon => {
  icon.addEventListener("click", () => {
    let getPwInput = icon.parentElement.querySelector("input");
    console.log(getPwInput);
    if(getPwInput.type === "password") {
      getPwInput.type = "text";
      icon.classList.replace("fa-eye-slash", "fa-eye");
    } else {
      getPwInput.type = "password";
      icon.classList.replace("fa-eye", "fa-eye-slash");
    }
  })
})

signupBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.add("active");
})

loginBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.remove("active");
})



