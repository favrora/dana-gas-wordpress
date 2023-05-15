/***********************************
 ********* Contact JS code *********

 1. Import plugins
 2. Contact form
 **********************************/

import "intl-tel-input/build/js/utils.js"
import intlTelInput from "intl-tel-input"

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
})
