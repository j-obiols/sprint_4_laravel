const boto = document.querySelector('#boto');
const menu = document.querySelector('#menu');

boto.addEventListener('click', ()=> {
    console.log('me diste click')

    menu.classList.toggle('hidden')
})
