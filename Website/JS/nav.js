const hamburger = document.querySelector('.hamburger');
const dropdownMenu = document.querySelector('.dropdown-menu');
console.log(hamburger, dropdownMenu);

hamburger.addEventListener('click', function() {
    dropdownMenu.classList.toggle('open');
});