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


// pgup script
let mybutton = document.getElementById("pgup");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// sprod script

var MainImg = document.getElementById("MainImg");
var SmallImg = document.getElementsByClassName("small-img");

SmallImg[0].onclick = function() {
  MainImg.src = SmallImg[0].src;
}
SmallImg[1].onclick = function() {
  MainImg.src = SmallImg[1].src;
}
SmallImg[2].onclick = function() {
  MainImg.src = SmallImg[2].src;
}
SmallImg[3].onclick = function() {
  MainImg.src = SmallImg[3].src;
}
