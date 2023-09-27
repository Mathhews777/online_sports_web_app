// search.js

document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("searchInput");
    const tableRows = document.querySelectorAll("tbody tr");
  
    searchInput.addEventListener("input", function () {
      const searchTerm = searchInput.value.trim().toLowerCase();
  
      tableRows.forEach(function (row) {
        const sportCell = row.querySelector("td:nth-child(2)"); // Index 2 corresponds to the Sport column
  
        if (sportCell) {
          const sportValue = sportCell.textContent.toLowerCase();
          if (sportValue.includes(searchTerm)) {
            row.style.display = "";
          } else {
            row.style.display = "none";
          }
        }
      });
    });
  });
  