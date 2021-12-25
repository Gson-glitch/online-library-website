const toggleButton = document.querySelector('.toggle-button');

const navbarLinks = document.querySelector('#welcome-header .header');

const btn = document.querySelector('#btn');

const test = document.querySelector('#books-img').getElementsByClassName('img');

toggleButton.addEventListener('click', displayFunction);

btn.addEventListener('click', myFunction);

function displayFunction(){
    navbarLinks.classList.toggle('active');
}

function myFunction() {
    for(let i=0; i<test.length; i++) {
        test[i].classList.toggle('active');
    }
}