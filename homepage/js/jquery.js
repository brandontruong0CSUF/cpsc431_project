// Global Variables
var selectedRow = null;


var main = function () {
  
  // Selecting a row
  $("tbody tr").click(function () {
    var currentRow = $(this);
    // If no active row, make selection active
    if (selectedRow) {
      selectedRow.removeClass("active");
      // Selecting an active row will make it inactive
      if (selectedRow[0] === currentRow[0]) {
        selectedRow = null;
        return;
      }
    }
    currentRow.addClass("active");
    selectedRow = currentRow;
  });
  
  // Avg Test Score button click
  $("#testScore").click(function () {
    $.redirectPost("testScore.php", {});
  });
  
  // Avg Class Score button click
  $("#classScore").click(function () {
    if (selectedRow) {
      $.redirectPost("classScore.php", {cwid: selectedRow.attr("cwid"), firstName: selectedRow.attr("firstName"), lastName: selectedRow.attr("lastName")});
    }
    else {
      alert("Please select a student!");
    }
  });

};


// http://stackoverflow.com/a/23347763
// jquery extend function
$.extend(
{
    redirectPost: function(location, args)
    {
        var form = '';
        $.each( args, function( key, value ) {
            form += '<input type="hidden" name="'+key+'" value="'+value+'">';
        });
        $('<form action="'+location+'" method="POST">'+form+'</form>').submit();
    }
});

$(document).ready(main);