const mobMenu = document.getElementById('mob-menu')
const menuContainer = document.querySelector('.menu-container')

mobMenu.addEventListener('click', e => {
    menuContainer.classList.toggle('menu-display');
})