/***********************************
 ********* Contact JS code *********

 1. Import plugins
 2. Location block
 **********************************/

import "intl-tel-input/build/js/utils.js"
import leaflet from "leaflet/dist/leaflet"

document.addEventListener("DOMContentLoaded", function () {
  // Importing the required components
  require("./components/global/main")

  /***************************
   **** 2. Location block ****
   **************************/
  const switchBtns = document.querySelectorAll("[data-switch]"),
    switchBlock = document.querySelectorAll(".switchLocation")

  // Switch location and block
  for (let i = 0; i < switchBtns.length; i++) {
    switchBtns[i].addEventListener("click", () => {
      switchBlock.forEach((el) => el.classList.add("d-none"))
      switchBtns.forEach((el) => el.classList.remove("active"))
      switchBlock[i].classList.remove("d-none")
      switchBtns[i].classList.add("active")

      const key = Object.keys(officeCoordinates)[i]

      // Change location
      changeLocation(officeCoordinates[key])
    })
  }

  // init map
  const projectMapEl = document.getElementById("mapLocation"),
    officeCoordinates = {
      uae: [25.32723064775752, 55.37879333779599],
      egypt: [30.028649639788227, 31.457572084389213],
      kri: [35.56270376154902, 45.43173504765539],
    }

  const projectMap = L.map("mapLocation").setView([25.32723064775752, 55.37879333779599], 15)

  L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
    attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
    maxZoom: 17,
    tileSize: 512,
    zoomOffset: -1,
  }).addTo(projectMap)

  const myIcon = L.icon({
    iconUrl: locationIcon,
    iconSize: [38, 38],
    iconAnchor: [22, 22],
  })

  const marker = L.marker([25.32723064775752, 55.37879333779599], { icon: myIcon }).addTo(projectMap)

  function changeLocation(latLng) {
    marker.setLatLng(latLng)
    projectMap.setView(latLng, projectMap.getZoom())
  }
})
