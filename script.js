async function downloadFile(url,filename) {
    // const url = 'https://example.com/yourfile.pdf'; // Replace with the URL of the file you want to download
    // const filename = 'yourfile.pdf'; // Specify the filename for the downloaded file
     url=url;
     filename=filename;
    try {
        const response = await fetch(url);
        const blob = await response.blob();
        const urlObject = window.URL.createObjectURL(blob);
        const link = document.createElement('a');
       
        link.href = urlObject;
        link.download = filename;
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    } catch (error) {
        console.error('Error downloading file:', error);
    }
}


// For BTech Dropdown ... 
/* *************************************************************************************************************** */

// document.getElementById("dropdown").addEventListener("change", function() {
//       // Hide all specific elements
//       var specificElements = document.querySelectorAll('.btech');
//       specificElements.forEach(function(element) {
//         element.style.display = 'none';
//       });
    
//       // Show the specific element based on the selected option
//       var selectedOption = this.value;
//       if (selectedOption !== 'default') {
//         var specificElement = document.getElementById(selectedOption);
//         if (specificElement) {
//           specificElement.style.display = 'block';
//         }
//       }
//     });


// For MTech Dropdown ... 
/* *************************************************************************************************************** */

// document.getElementById("mtechDropdown").addEventListener("change", function() {
//   // Hide all specific elements
//   var specificElements = document.querySelectorAll('.mtech');
//   specificElements.forEach(function(element) {
//     element.style.display = 'none';
//   });

//   // Show the specific element based on the selected option
//   var selectedOption = this.value;
//   if (selectedOption !== 'default') {
//     var specificElement = document.getElementById(selectedOption);
//     if (specificElement) {
//       specificElement.style.display = 'block';
//     }
//   }
// });


// Function to handle dropdown selection
function handleDropdownChange(dropdownId, specificElementClass) {
  var dropdown = document.getElementById(dropdownId);
  var specificElements = document.querySelectorAll('.' + specificElementClass);

  // Hide all specific elements
  specificElements.forEach(function(element) {
    element.style.display = 'none';
  });

  // Show the specific element based on the selected option
  var selectedOption = dropdown.value;
  if (selectedOption !== 'default') {
    var specificElement = document.getElementById(selectedOption);
    if (specificElement) {
      specificElement.style.display = 'block';
    }
  }
}

function showAndScrollToHiddenText(id)
{
  // var hiddenText = document.getElementById(id);
  // hiddenText.style.display = "block";

  //......
  // Hide all text
  document.querySelectorAll('.hidden').forEach(item => {
    item.style.display = 'none';
  });
  // Show the corresponding text
  document.getElementById(id).style.display = 'block';

  //.......
  hiddenText.scrollIntoView({ behavior: 'smooth' });
  
}

// function showAndScrollToHiddenTextByClass(clas)
// {
//   var hiddenText1 = document.getElementsByClassName(clas);
//   hiddenText1.style.display = "block";
//   hiddenText1.scrollIntoView({ behavior: 'smooth' });
// }


// To show last Update Date ...

document.addEventListener('DOMContentLoaded', function() {
  // Get the current date and time
  var currentDateTime = new Date();

  // Format the date and time
  var formattedDateTime = currentDateTime.toLocaleString('en-US', { 
      weekday: 'long', 
      year: 'numeric', 
      month: 'long', 
      day: 'numeric',
      hour: 'numeric',
      minute: 'numeric',
      second: 'numeric',
      hour12: true
  });

  // Update the last update date and time element
  document.getElementById('lastUpdateDateTime').textContent = formattedDateTime;
});



