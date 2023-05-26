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
  const showVideos= document.querySelector(".showVideos"),
    showImages = document.querySelector(".showImages"),
    videoSection = document.querySelector(".videoSection"),
    imagesSection = document.querySelector(".imagesSection");

  showVideos.addEventListener("click", () => {
    videoSection.classList.add("is-active")
    showVideos.classList.add("is-active")

    imagesSection.classList.remove("is-active")
    showImages.classList.remove("is-active")
  });

  showImages.addEventListener("click", () => {
    imagesSection.classList.add("is-active")
    showImages.classList.add("is-active")

    videoSection.classList.remove("is-active")
    showVideos.classList.remove("is-active")
  });

  /*******************************
   ** 3. Modal with img & video **
   ******************************/
  const videoModal = document.getElementById("videoModal"),
    videoLinks = document.querySelectorAll(".popup-youtube");

  // Attach click event listeners to video links
  videoLinks.forEach(function(videoLink) {
    videoLink.addEventListener("click", function() {
      let videoUrl = this.getAttribute("data-video-link"),
        iframeSrc = "";

      if (videoUrl.includes("youtube.com")) {
        const videoId = videoUrl.match(/youtube\.com\/watch\?v=([^&]+)/)[1];
        iframeSrc = "https://www.youtube.com/embed/" + videoId;
      } else {
        iframeSrc = videoUrl;
      }

      document.getElementById("videoIframe").setAttribute("src", iframeSrc);
      videoModal.classList.add("is-active");
    });
  });

  // Open Image modal
  const openImageModal = document.querySelectorAll(".openImageModal"),
    imagesModal = document.getElementById("imagesModal"),
    imagePreview = document.querySelector(".imagePreview");

  openImageModal.forEach(function(cardImage) {
    cardImage.addEventListener("click", function() {

    });
  });

})
