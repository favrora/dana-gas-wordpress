/**********************************
 ********* Global JS code *********

 1. Btn Progress
 *********************************/

/******************************
 ***** 1. Btn Progress ********
 *****************************/

// On click add button progress loader
let btnProgressAll = document.querySelectorAll(".btnWithProgress")

for (let i = 0; i < btnProgressAll.length; ++i) {
  btnProgressAll[i].addEventListener("click", function () {
    btnProgressAll[i].innerHTML += '<span class="dot-pulse"><span></span></span>'
  })
}

// Toggle mobile menu on click
const toggleMobileMenu = document.getElementById("toggleMobileMenu"),
  navItemUl = document.querySelector(".nav-item__ul")

if (toggleMobileMenu) {
  toggleMobileMenu.addEventListener("click", () => {
    if (toggleMobileMenu.classList.contains("active")) {
      toggleMobileMenu.classList.remove("active")
      navItemUl.classList.remove("active")
    } else {
      toggleMobileMenu.classList.add("active")
      navItemUl.classList.add("active")
    }
  })
}

// Mobile header menu list toggle
const menuList = document.querySelectorAll(".nav-header .nav-item ul li.dropdown")

for (let i = 0; i < menuList.length; ++i) {
  const title = menuList[i].querySelector(".dropdown-title"),
    icon = menuList[i].querySelector(".showDropdownList")

  title.addEventListener("click", function () {
    if (menuList[i].classList.contains("active")) {
      icon.innerHTML = "−"
      menuList[i].classList.remove("active")
    } else {
      icon.innerHTML = "+"
      menuList[i].classList.add("active")
    }
  })
}

// Mobile footer menu list toggle
const footerList = document.querySelectorAll("footer.footer-default .footer-menu__list")

for (let i = 0; i < footerList.length; ++i) {
  const title = footerList[i].querySelector(".footer-menu__title"),
    icon = footerList[i].querySelector(".showDropdownList")

  title.addEventListener("click", function () {
    if (footerList[i].classList.contains("active")) {
      icon.innerHTML = "−"
      footerList[i].classList.remove("active")
    } else {
      icon.innerHTML = "+"
      footerList[i].classList.add("active")
    }
  })
}
