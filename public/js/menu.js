document.addEventListener('DOMContentLoaded', function(){
    const menuBtn = document.querySelector('#main-nav i');
    const menu = document.querySelector('#main-nav ul');

    menuBtn.addEventListener('click', function(){
        menu.classList.toggle('display');
        menuBtn.classList.toggle('bi-list');
		menuBtn.classList.toggle('bi-x');
    });

    const modalBtn = document.querySelector('.open-modal-button');
    const modal = document.querySelector('.modal');
    const closeBtn = document.querySelector('.close');

    modalBtn.addEventListener('click', function(){
        modal.classList.toggle('hidden');
    });

    closeBtn.addEventListener('click', function(){
        modal.classList.toggle('hidden');
    }
    );
});

// Language: javascript