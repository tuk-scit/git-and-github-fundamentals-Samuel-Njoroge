var imageForm = document.getElementById("imageForm");

// Get a reference to the <input type="file"> element
var imageFile = document.getElementById("imageFile");

// Get a reference to the <div> element that will contain the uploaded image
var uploadedImage = document.getElementById("uploadedImage");

// Listen for when the form is submitted
imageForm.addEventListener("submit", function (event) {
  // Stop the form from submitting (which would cause the page to refresh)
  event.preventDefault();

  // Check if the user has selected a file
  if (imageFile.files.length > 0) {
    // Create a new <img> element
    var img = document.createElement("img");

    // Set the src attribute of the <img> element to the data URL of the selected file
    img.src = URL.createObjectURL(imageFile.files[0]);

    // Add the <img> element to the page
    uploadedImage.appendChild(img);
  }
});
