/**********************************
 ********* Global JS code *********

 1. Btn Progress
 2. Show more btn
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

// Close modal
const customModalClose = document.querySelectorAll(".custom-modal__close"),
  customModalCloseBg = document.querySelectorAll(".custom-modal__bg")

for (let i = 0; i < customModalClose.length; ++i) {
  customModalClose[i].addEventListener("click", () => {
    customModalClose[i].parentElement.parentElement.classList.remove("is-active")
  })
}

for (let i = 0; i < customModalCloseBg.length; ++i) {
  customModalCloseBg[i].addEventListener("click", () => {
    customModalCloseBg[i].parentElement.classList.remove("is-active")
  })
}

/******************************
 ***** 2. Show more btn *******
 *****************************/
const showMoreBtn = document.querySelectorAll(".showMoreBtn"),
  showMoreText = document.querySelectorAll(".showMoreText")

for (let i = 0; i < showMoreBtn.length; ++i) {
  showMoreBtn[i].addEventListener("click", function () {
    if (showMoreText[i].classList.contains("d-none")) {
      showMoreText[i].classList.remove("d-none")
      showMoreBtn[i].classList.add("active")
      showMoreBtn[i].querySelector(".showMoreTextSwitch").classList.add("d-none")
      showMoreBtn[i].querySelector(".showLessText").classList.remove("d-none")
    } else {
      showMoreText[i].classList.add("d-none")
      showMoreBtn[i].classList.remove("active")
      showMoreBtn[i].querySelector(".showMoreTextSwitch").classList.remove("d-none")
      showMoreBtn[i].querySelector(".showLessText").classList.add("d-none")
    }
  })
}

const moreFilters = document.querySelectorAll(".moreFilters"),
  subMenuReport = document.querySelectorAll(".subMenuReport")

for (let i = 0; i < moreFilters.length; ++i) {
  moreFilters[i].addEventListener("click", function () {
    moreFilters[i].parentElement.querySelector(".subMenuReport").classList.toggle("is-active")
  })
}

for (let i = 0; i < subMenuReport.length; ++i) {
  subMenuReport[i].addEventListener("click", function () {
    subMenuReport[i].classList.remove("is-active")
  })
}

/*

<div class="moreFilters reports-nav__item"><?php echo $moreText; ?></div>

<ul class="subMenuReport"><?php echo $submenu; ?></ul>
 */
