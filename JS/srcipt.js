const li1 = document.querySelector('.liInteractive');
const li2 = document.querySelector('.liInteractive2');
const li3 = document.querySelector('.liInteractive3');

li1.addEventListener('mouseover', function () {
    li1.classList.add('paintInteractive');
    li2.classList.remove('paintInteractive');
    li3.classList.remove('paintInteractive');

})

li2.addEventListener('mouseover', function () {
    li1.classList.remove('paintInteractive');
    li2.classList.add('paintInteractive');
    li3.classList.remove('paintInteractive');

})

li3.addEventListener('mouseover', function () {
    li1.classList.remove('paintInteractive');
    li2.classList.remove('paintInteractive');
    li3.classList.add('paintInteractive');

})

const interactiveName = document.querySelector('.interactiveName');
const desplegarMenu = document.querySelector('.interactiveMenu');

interactiveName.addEventListener('click', function () {
    desplegarMenu.classList.toggle('desplegar');
})