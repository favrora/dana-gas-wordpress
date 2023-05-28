/**********************************
 ***** Key financials JS code *****
 *********************************/

document.addEventListener("DOMContentLoaded", function () {
  // Importing the required components
  require("./components/global/main")

  const keyParent = document.querySelector(".key-filtr"),
    dropdownArrow = keyParent.querySelector(".filtrs"),
    dropdownMenu = document.querySelector(".filter-dropdown");

  dropdownArrow.addEventListener('mouseenter', () => {
    dropdownArrow.classList.add("show-menu");
  });

  dropdownArrow.addEventListener('mouseleave', () => {
    dropdownArrow.classList.remove("show-menu");
  });

  // Hide and show element in table
  const inputFilters = dropdownMenu.querySelectorAll("input")

  for (let i = 0; i < inputFilters.length; i++) {
    inputFilters[i].addEventListener("click", () => {
      const id = inputFilters[i].getAttribute("id"),
        row = document.querySelectorAll(`.row-${id.slice(-1)}`);

      for (let a = 0; a < row.length; a++) {
        if (inputFilters[i].checked) {
          row[a].classList.remove("d-none");
        } else {
          row[a].classList.add("d-none");
        }
      }
    })
  }

})
