/***********************************
 ****** Press release JS code ******
 **********************************/

document.addEventListener("DOMContentLoaded", function () {
  // Importing the required components
  require("./components/global/main")

  const btnSwitch = document.querySelectorAll("button.press-accordion")

  btnSwitch.forEach((btn) => {
    btn.addEventListener("click", () => {
      if (btn.classList.contains("activez")) {
        // remove old
        document.querySelector(".panel.press-panel.activez").classList.remove("activez")
        document.querySelector("button.press-accordion.activez").classList.remove("activez")
        return false
      } else if (document.querySelector(".panel.press-panel.activez")) {
        // remove old
        document.querySelector(".panel.press-panel.activez").classList.remove("activez")
        document.querySelector("button.press-accordion.activez").classList.remove("activez")
      }

      // add new class
      btn.parentElement.querySelector(".panel.press-panel").classList.add("activez")
      btn.classList.add("activez")
    })
  })

  const faqQuestionBox = document.querySelectorAll(".faqQuestionBox")

  for (let i = 0; i < faqQuestionBox.length; i++) {
    faqQuestionBox[i].addEventListener("click", () => {
      faqQuestionBox[i].classList.toggle("is-active")
    })
  }
})
