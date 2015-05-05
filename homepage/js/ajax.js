// Global Variables


var main = function () {
  displaySessions($("#searchbar"));
  $("#searchbar").change(function () {
    displaySessions(self);
    //displaySessions($("#searchBar"));
    console.log($("#searchbar").text);
  });
};

function displaySessions (searchBar) {
  var searchItem = $(searchbar).text;
  if (searchItem.length === 0) {
    searchItem = '*';
  }
}


$(document).ready(main);