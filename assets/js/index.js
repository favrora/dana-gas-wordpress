/************************************
 ********* Homepage JS code *********

 1. Import plugins
 2. Scroll and video play
 ***********************************/

document.addEventListener("DOMContentLoaded", function () {
  // Importing the required components
  require("./components/global/main")

  /**********************************
   **** 2. Scroll and video play ****
   *********************************/
  const scrollNextBlock = document.getElementById("scrollNextBlock"),
    operationsSection = document.querySelector(".operations-section")

  if (scrollNextBlock) {
    scrollNextBlock.addEventListener("click", () => {
      operationsSection.scrollIntoView({ behavior: "smooth", block: "start" })
    })
  }

  // start play video on click
  const previewVideo = document.getElementById("previewVideo"),
    previewImg = document.getElementById("previewImg"),
    startVideo = document.getElementById("startVideo")

  startVideo.addEventListener("click", () => {
    previewVideo.classList.remove("d-none")
    previewImg.classList.add("d-none")
    startVideo.parentElement.classList.add("d-none")
    previewVideo.play()
  })

  previewVideo.addEventListener("click", togglePlay)

  function togglePlay() {
    if (previewVideo.paused || previewVideo.ended) {
      previewVideo.play()
    } else {
      previewVideo.pause()
    }
  }
})

// for (let i = 0; i < linkWithValidateForm.length; i++) {
