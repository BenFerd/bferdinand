const menuBurgerBtn = document.querySelector('.burger');

menuBurgerBtn.addEventListener('click', () => {
    document.body.classList.toggle('menu-open');
})

const burger = document.querySelector('.burger');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
})