const menDropdown = document.getElementById('men-dropdown');
const menDropdownMenu = menDropdown.querySelector('.dropdown-menu');

menDropdown.addEventListener('mouseenter', () => {
  menDropdownMenu.style.display = 'block';
});

menDropdown.addEventListener('mouseleave', () => {
  menDropdownMenu.style.display = 'none';
});

const womenDropdown = document.getElementById('women-dropdown');
const womenDropdownMenu = womenDropdown.querySelector('.dropdown-menu');

womenDropdown.addEventListener('mouseenter', () => {
  womenDropdownMenu.style.display = 'block';
});

womenDropdown.addEventListener('mouseleave', () => {
  womenDropdownMenu.style.display = 'none';
});

const kidsDropdown = document.getElementById('kids-dropdown');
const kidsDropdownMenu = kidsDropdown.querySelector('.dropdown-menu');

kidsDropdown.addEventListener('mouseenter', () => {
  kidsDropdownMenu.style.display = 'block';
});

kidsDropdown.addEventListener('mouseleave', () => {
  kidsDropdownMenu.style.display = 'none';
});
