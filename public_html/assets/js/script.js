const mobMenu = document.getElementById('mob-menu')
const menuContainer = document.querySelector('.menu-container')

mobMenu.addEventListener('click', e => {
    // container toggle
    menuContainer.classList.toggle('menu-display');
    // icon toggle
    if (mobMenu.src === 'http://mytaxi.lt/assets/icons/menu.svg') {
        mobMenu.src = 'assets/icons/close.svg';
    } else if (mobMenu.src === 'http://mytaxi.lt/assets/icons/close.svg') {
        mobMenu.src = 'assets/icons/menu.svg';
    }
})