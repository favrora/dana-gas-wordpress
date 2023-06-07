/*********************************
 ********* Media JS code *********

 1. Import plugins
 2. Media nav menu
 3. Modal with img & video
 ********************************/

document.addEventListener("DOMContentLoaded", function () {
  // Importing the required components
  require("./components/global/main")

  /*******************************
   ****** 2. Media nav menu ******
   ******************************/
  const showVideos = document.querySelector(".showVideos"),
    showImages = document.querySelector(".showImages"),
    videoSection = document.querySelector(".videoSection"),
    imagesSection = document.querySelector(".imagesSection")

  showVideos.addEventListener("click", () => {
    videoSection.classList.add("is-active")
    showVideos.classList.add("is-active")

    imagesSection.classList.remove("is-active")
    showImages.classList.remove("is-active")
  })

  showImages.addEventListener("click", () => {
    imagesSection.classList.add("is-active")
    showImages.classList.add("is-active")

    videoSection.classList.remove("is-active")
    showVideos.classList.remove("is-active")
  })

  /*******************************
   ** 3. Modal with img & video **
   ******************************/
  const videoModal = document.getElementById("videoModal"),
    videoLinks = document.querySelectorAll(".popup-youtube")

  // Attach click event listeners to video links
  videoLinks.forEach(function (videoLink) {
    videoLink.addEventListener("click", function () {
      let videoUrl = this.getAttribute("data-video-link"),
        iframeSrc = ""

      if (videoUrl.includes("youtube.com")) {
        const videoId = videoUrl.match(/youtube\.com\/watch\?v=([^&]+)/)[1]
        iframeSrc = "https://www.youtube.com/embed/" + videoId
      } else {
        iframeSrc = videoUrl
      }

      document.getElementById("videoIframe").setAttribute("src", iframeSrc)
      videoModal.classList.add("is-active")
    })
  })

  // Open Image modal
  const openImageModal = document.querySelectorAll(".openImageModal"),
    imagesModal = document.getElementById("imagesModal"),
    sliderImg = document.getElementById("sliderImg"),
    currentIndexSlider = document.querySelector(".currentIndex"),
    sliderAll = document.querySelector(".sliderAll")

  openImageModal.forEach(function (cardImage) {
    cardImage.addEventListener("click", function () {
      const imgModalLinks = document.querySelectorAll(".img-modal-links .img-link"),
        imgArr = []

      for (let i = 0; i < imgModalLinks.length; i++) {
        const link = imgModalLinks[i].dataset.link
        if (link) imgArr.push(link)
      }

      loadImages(imgArr)

      imagesModal.classList.add("is-active")
    })
  })

  // load new images in slider
  function loadImages(imgArr) {
    sliderImg.innerHTML = ""

    for (let i = 0; i < imgArr.length; i++) {
      const slide = document.createElement("div")
      const img = document.createElement("img")
      img.src = imgArr[i]

      if (i === 0) slide.className = "slide is-active"
      else slide.className = "slide"

      slide.appendChild(img)
      sliderImg.appendChild(slide)
    }

    currentIndexSlider.innerHTML = "0"
    sliderAll.innerHTML = imgArr.length
  }

  // Next slide arrow
  let prevButton = document.querySelector(".slider-arrow.prev"),
    nextButton = document.querySelector(".slider-arrow.next"),
    currentIndex = 0

  function showSlide(index) {
    const slides = sliderImg.querySelectorAll(".slide")

    if (index < 0) {
      currentIndex = slides.length - 1
    } else if (index >= slides.length) {
      currentIndex = 0
    }

    slides.forEach(function (slide) {
      slide.classList.remove("is-active")
    })

    slides[currentIndex].classList.add("is-active")
    currentIndexSlider.innerHTML = currentIndex
  }

  prevButton.addEventListener("click", function () {
    currentIndex--
    showSlide(currentIndex)
  })

  nextButton.addEventListener("click", function () {
    currentIndex++
    showSlide(currentIndex)
  })
})
