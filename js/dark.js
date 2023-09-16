const themeSwitch = document.querySelector('#theme-switch');
const body = document.body;

themeSwitch.addEventListener('click', () => {
  body.classList.toggle('dark-theme');
});

// Get the theme switch element

// Add a click event listener to the element
themeSwitch.addEventListener('click', function() {
  // Check if the current class is fa-moon
  if (this.classList.contains('fa-moon')) {
    // If it is, change the class to fa-sun
    this.classList.remove('fa-moon');
    this.classList.add('fa-sun-alt');
  } else {
    // Otherwise, change the class back to fa-moon
    this.classList.remove('fa-sun-alt');
    this.classList.add('fa-moon');
  }
});