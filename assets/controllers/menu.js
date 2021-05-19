const menuBurgerBtn = document.querySelector('.burger');

menuBurgerBtn.addEventListener('click', () => {
    document.body.classList.toggle('menu-open');
})