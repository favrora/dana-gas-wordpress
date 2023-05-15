/***********************************
 ********* Contact JS code *********

 1. Import plugins
 2. Contact form
 3. Location block
 **********************************/

import "intl-tel-input/build/js/utils.js"
import intlTelInput from "intl-tel-input"
import leaflet from "leaflet/dist/leaflet"

document.addEventListener("DOMContentLoaded", function () {
  // Importing the required components
  require("./components/global/main")

  /***************************
   ***** 2. Contact form *****
   **************************/
  function initPhone() {
    const phoneNumber = document.getElementById("phoneNumber"),
      inputCountry = document.getElementById("inputCountry"),
      preferred = ["ae", "eg", "iq", "sa"]

    let phoneBox = intlTelInput(phoneNumber, {
      separateDialCode: true,
      nationalMode: true,
      formatOnDisplay: true,
      preferredCountries: preferred,
      autoPlaceholder: "polite",
      initialCountry: "auto",
      geoIpLookup: function (callback) {
        callback("ae")
      },
    })

    if (inputCountry) {
      phoneNumber.addEventListener("countrychange", () => {
        inputCountry.value = phoneBox.getSelectedCountryData().dialCode
      })

      phoneNumber.addEventListener("input", () => {
        inputCountry.value = phoneBox.getSelectedCountryData().dialCode
      })

      phoneNumber.addEventListener("change", () => {
        inputCountry.value = phoneBox.getSelectedCountryData().dialCode
      })
    }
  }

  initPhone()

  /***************************
   **** 3. Location block ****
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
    iconUrl: "/images/marker-icon.png",
    iconSize: [38, 60],
    iconAnchor: [22, 94],
    popupAnchor: [-3, -76],
  })

  const marker = L.marker([25.32723064775752, 55.37879333779599]).addTo(projectMap)

  function changeLocation(latLng) {
    marker.setLatLng(latLng)
    projectMap.setView(latLng, projectMap.getZoom())
  }
})
