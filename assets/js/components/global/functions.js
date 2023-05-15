/**********************************
 ********* Functions JS ***********

 1. Dropdown close function
 2. Get & Post JSON
 3. Add progress btn
 *********************************/

/********************************
 ** 1. Dropdown close function **
 *******************************/

// if clicked outside dropdown then close it
function closeDropdown(dropdown, dropdownBtn, element) {
  document.body.addEventListener("click", function (event) {
    if (dropdown.contains(event.target) || dropdownBtn.contains(event.target)) {
    } else {
      if (element === "this") {
        dropdown.classList.remove("show")
      } else {
        dropdown.parentElement.classList.remove("show")
      }
    }
  })
}

/**********************************
 ******* 2. Get & Post JSON *******
 *********************************/
function getJSON(url, callback) {
  const xhr = new XMLHttpRequest()
  xhr.open("GET", url, true)
  xhr.responseType = "json"

  if (callback !== null) {
    xhr.onload = function () {
      if (xhr.status === 200) {
        callback(null, xhr.response)
      } else {
        callback(xhr.status, xhr.response)
      }
    }
  }

  xhr.send()
}

function postJSON(url, callback, parameters, csrfToken) {
  const xhr = new XMLHttpRequest()
  xhr.open("POST", url, true)
  xhr.responseType = "json"

  if (callback !== null) {
    xhr.onload = function () {
      if (xhr.status === 200) {
        callback(null, xhr.response)
      } else {
        callback(xhr.status, xhr.response)
      }
    }
  }

  if (csrfToken) xhr.setRequestHeader("x-csrf-token", csrfToken)
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
  xhr.send(parameters)
}

// postJSON(`${window.location.origin}/${localeCode}/affiliate-program`, callback, params);

/*********************************
 ****** 3. Add progress btn ******
 ********************************/

function addButtonProgress(btn, status) {
  if (status === "remove") {
    btn.querySelector(".dot-pulse").remove()
  } else {
    btn.innerHTML += '<span class="dot-pulse"><span></span></span>'
  }
}

/***************************************
 ** Exporting variables and functions **
 **************************************/

export { closeDropdown, getJSON, postJSON, addButtonProgress }
