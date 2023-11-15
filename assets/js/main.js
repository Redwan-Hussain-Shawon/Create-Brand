// Responsive Nav Menu active
let toggleIcons = document.querySelector(".menu-icon");
let navbar = document.querySelector("ul.main_menu");
let menuIcon = document.querySelector(".menu-icon");

toggleIcons.addEventListener("click", () => {
  navbar.classList.toggle("active");
  menuIcon.classList.toggle("active");
});

// Responsive drop down Menu active
let drop_down = document.querySelector(".drop_menu");
let menuA = document.querySelectorAll("ul.main_menu li .dorp_down_a");
let header = document.querySelector("header");
let nav = document.querySelector("nav");
for (let x = 0; x < menuA.length; x++) {
  menuA[x].addEventListener("click", () => {
    menuA[x].nextElementSibling.classList.toggle("active");
  });
}

// nav Scroll Animaction
window.addEventListener("scroll", () => {
  if (window.pageYOffset > nav.offsetTop + 80) {
    header.classList.add("active_nav");
  } else {
    header.classList.remove("active_nav");
  }
});

// Contact us Page Validation Start
let name = document.querySelector("#name");
let email = document.querySelector("#email");
let phone = document.querySelector("#phone");
let subject = document.querySelector("#subject");
let message = document.querySelector("#message");
let cForm = document.querySelector("#contact form");

let contactBtn = document.querySelector("#contactBtn");
if (contactBtn != null) {
  contactBtn.addEventListener("click", function (event) {
    if (!validate()) {
      event.preventDefault();
    }

    let allInput = document.querySelectorAll("#contact input");
    for (let i = 0; i < allInput.length; i++) {
      allInput[i].addEventListener("keyup", function () {
        validate();
      });
    }
  });
}

function isEmail(emailVal) {
  var atSymbol = emailVal.indexOf("@");
  if (atSymbol < 1) return false;
  var dot = emailVal.lastIndexOf(".");
  if (dot <= atSymbol + 2) return false;
  return true;
}

// define validate function
function validate() {
  let nameVal = name.value.trim();
  let emailVal = email.value.trim();
  let phoneVal = phone.value.trim();
  let subjectVal = subject.value.trim();
  let messageVal = message.value.trim();
  let error = true;
  if (nameVal == "") {
    setErrorMsg(name, "Name Can not be blank");
    error = false;
  } else {
    setSuccessMsg(name);
  }
  if (emailVal == "") {
    setErrorMsg(email, "email can not be blank");
    error = false;
  } else if (!isEmail(emailVal)) {
    setErrorMsg(email, "email not valid");
    error = false;
  } else {
    setSuccessMsg(email);
  }

  if (phoneVal == "") {
    setErrorMsg(phone, "phone number can not blank");
    error = false;
  } else if (isNaN(phoneVal)) {
    setErrorMsg(phone, "phone number not Valid");
    error = false;
  } else {
    setSuccessMsg(phone);
  }
  if (subjectVal == "") {
    setErrorMsg(subject, "subject not be blank");
    error = false;
  } else if (subjectVal.length < 3) {
    setErrorMsg(subject, "min 3 character input");
    error = false;
  } else {
    setSuccessMsg(subject);
  }

  if (error) {
    return true;
  } else {
    return false;
  }
}

function setErrorMsg(input, errorVal) {
  let form_control = input.parentElement;
  form_control.classList.add("error-message");
  let small = form_control.querySelector("small");
  small.innerHTML = errorVal;
}
function setSuccessMsg(input) {
  let form_control = input.parentElement;
  form_control.classList.remove("error-message");
}
// Contact us Page Validation End

// Our Team Filterable Image Galler Start

let filterButton = document.querySelectorAll(".header-menu ul li");
let filterCard = document.querySelectorAll("#our-team .row .card");
function filtercardFun(e) {
  document
    .querySelector("#our-team .header-menu ul .active")
    .classList.remove("active");
  e.target.classList.add("active");
  filterCard.forEach((element) => {
    element.classList.add("hide");
    if (
      e.target.dataset.work == "All" ||
      e.target.dataset.work == element.dataset.work
    ) {
      element.classList.remove("hide");
    }
  });
}

filterButton.forEach((button) =>
  button.addEventListener("click", filtercardFun)
);

// Our Team Filterable Image Galler End

let acCard = document.querySelectorAll("#faqs .row .accordion_card");

for (let x = 0; x < acCard.length; x++) {
  acCard[x].addEventListener("click", function (e) {
    acCard[x].classList.toggle("active");
    console.log(acCard[x].querySelectorAll("button"));
    acCard[x].querySelector("button").classList.toggle("active");
    acCard[x].querySelector(".paragraph").classList.toggle("active");
  });
}
