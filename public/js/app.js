document.addEventListener('DOMContentLoaded', function(){
    const menuBtn = document.querySelector('#main-nav i');
    const menu = document.querySelector('#main-nav ul');

    menuBtn.addEventListener('click', function(){
        menu.classList.toggle('display');
        menuBtn.classList.toggle('bi-list');
		menuBtn.classList.toggle('bi-x');
        menuBtn.classList.toggle('white-shadow');
    });

    const textarea = document.querySelector('.synopsis')
    const count = document.getElementById('count');
    textarea.onkeyup = (charactersLeft) => {
    count.innerHTML = (charactersLeft.target.value.length) + '/1000';
    };

});

// Language: javascript