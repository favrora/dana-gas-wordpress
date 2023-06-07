/************************************
 ****** Event Calendar JS code ******
 ***********************************/

document.addEventListener("DOMContentLoaded", function () {
  // Importing the required components
  require("./components/global/main")

  const saveEvent = document.querySelectorAll(".saveEvent")

  saveEvent.forEach((btn) => {
    btn.addEventListener("click", () => {
      btn.querySelector(".icalendar_list").classList.toggle("is-active")
    })
  })
})
