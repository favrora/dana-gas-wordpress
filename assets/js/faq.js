/************************************
 ********* FAQ page JS code *********
 ***********************************/

document.addEventListener("DOMContentLoaded", function () {
  // Importing the required components
  require("./components/global/main")

  const faqQuestionBox = document.querySelectorAll(".faqQuestionBox")

  for (let i = 0; i < faqQuestionBox.length; i++) {
    faqQuestionBox[i].addEventListener("click", () => {
      faqQuestionBox[i].classList.toggle("is-active");
    })
  }
})
