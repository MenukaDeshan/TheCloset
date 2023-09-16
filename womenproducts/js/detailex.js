const tabButtons = document.querySelectorAll(".tab_button");
const tabPanels = document.querySelectorAll(".tab_panel");

tabButtons.forEach((button) => {
  button.addEventListener("click", (event) => {
    const currentButton = event.currentTarget;
    const currentPanel = currentButton.nextElementSibling;

    if (!currentButton.classList.contains("tab_button-active")) {
      // Deactivate all tab buttons and panels
      tabButtons.forEach((button) => {
        button.classList.remove("tab_button-active");
      });
      tabPanels.forEach((panel) => {
        panel.style.height = "0px";
        panel.classList.remove("tab_panel-active");
      });

      // Activate clicked tab button and panel
      currentButton.classList.add("tab_button-active");
      currentPanel.style.height =
        currentPanel.firstElementChild.clientHeight + 60 + "px";
      currentPanel.classList.add("tab_panel-active");
    } else {
      // Deactivate clicked tab button and panel
      currentButton.classList.remove("tab_button-active");
      currentPanel.style.height = "0px";
      currentPanel.classList.remove("tab_panel-active");
    }
  });
});

// Get references to the mainpic and the four images in the img-wrapper
let mainpic = document.getElementById("mainpic");
let images = document.querySelectorAll(".img-wrapper img");

// Loop through the images and add a click event listener to each one
images.forEach(function(image) {
  image.addEventListener("click", function() {
    // Set the src of the mainpic to the src of the clicked image
    mainpic.src = this.src;
    // Set the name of the mainpic to the name of the clicked image
    mainpic.name = this.name;
  });
});