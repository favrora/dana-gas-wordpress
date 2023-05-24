/***********************************
 ****** Sustainability JS code ******
 **********************************/

document.addEventListener("DOMContentLoaded", function () {
  // Importing the required components
  require("./components/global/main")

  const reportsSection = document.querySelectorAll(".reports-section");

  for (let r = 0; r < reportsSection.length; r++) {
    const reportsNav = reportsSection[r].querySelectorAll(".reports-nav__item"),
      reportsLinks = reportsSection[r].querySelectorAll(".reports-links__item");

    for (let i = 0; i < reportsNav.length; i++) {
      reportsNav[i].addEventListener("click", () => {

        // remove all active class
        for (let l = 0; l < reportsLinks.length; l++) {
          reportsLinks[l].classList.remove("is-active");
        }

        for (let l = 0; l < reportsNav.length; l++) {
          reportsNav[l].classList.remove("is-active");
        }

        reportsLinks[i].classList.add("is-active");
        reportsNav[i].classList.add("is-active");
      })
    }
  }

})
