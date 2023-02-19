// get elements
const dropzoneFile = document.querySelector("#dropzone-file");
const defaultPreviewContainer = document.querySelector(
  "#default-preview-container"
);
const imgPreviewContainer = document.querySelector("#img-preview-container");
const imgPreview = document.querySelector("#img-preview");
const removeImgBtn = document.querySelector("#remove-img-btn");

// hide the image preview container on page load
window.addEventListener("load", function () {
  imgPreviewContainer.classList.add("hidden");
});

// handle file selection
dropzoneFile.addEventListener("change", function () {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.addEventListener("load", function () {
      // hide default preview container
      defaultPreviewContainer.classList.add("hidden");
      // show image preview container
      imgPreviewContainer.classList.remove("hidden");
      // set image preview source
      imgPreview.setAttribute("src", this.result);
    });
    reader.readAsDataURL(file);
  }
});

// handle remove image button click
removeImgBtn.addEventListener("click", function () {
  // clear input field
  dropzoneFile.value = "";
  // hide image preview container
  imgPreviewContainer.classList.add("hidden");
  // show default preview container
  defaultPreviewContainer.classList.remove("hidden");
});
