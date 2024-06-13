    let menu = document.querySelector('#menu-icon');
    let navlist = document.querySelector('.navlist');

    menu.onclick = () => {
        menu.classList.toogle('bx-x');
        navlist.classList.toogle('open');
    };

  