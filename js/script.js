/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/*                                ScrollReveal                                */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

ScrollReveal().reveal('.nav, .main-infos, .projects, .about, .contact, section h2, .maquettes, .school, .skills, .container', { duration: 1400, reset: true});


/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/*                                   Navbar                                   */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/*                             Animation on scroll                            */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

let moon = document.querySelector('.moon');
let earth = document.querySelector('.earth');
let astronaut = document.querySelector('.astronaut');

window.addEventListener('scroll', function() {
    let value = window.scrollY;

    if (window.innerWidth >= 530) {
        moon.style.right = 13 + value*0.015 + '%';
        moon.style.top = 45 - value*0.01 + '%';
        moon.style.width = 130 + value*0.03 + 'px';
        moon.style.rotate = value*0.01 + 'deg';
        moon.style.opacity = 0 + value*0.02;

        earth.style.right = 60 + value*0.025 + '%';
        earth.style.top = '53%';
        earth.style.width = 330 - value*0.05 + 'px';
        earth.style.rotate = value*-0.01 + 'deg';
        earth.style.opacity = 0 + value*0.02;

        astronaut.style.right = 20 + value*0.07 + '%';
        astronaut.style.top = 28 + value*0.1 + '%';
        astronaut.style.width = 150 + value + 'px';
        astronaut.style.rotate = value*-0.1 + 'deg';
        astronaut.style.opacity = 0 + value*0.02;
    }
    else {
        moon.style.right = 10 + value*0.015 + '%';
        moon.style.top = '33%';
        moon.style.width = 130 + value*0.03 + 'px';
        moon.style.rotate = value*0.01 + 'deg';
        moon.style.opacity = 0 + value*0.02;
        
        earth.style.right = 58 + value*0.025 + '%';
        earth.style.top = '41%';
        earth.style.width = 330 - value*0.05 + 'px';
        earth.style.rotate = value*-0.01 + 'deg';
        earth.style.opacity = 0 + value*0.02;

        astronaut.style.right = 16 + value*0.07 + '%';
        astronaut.style.top = 28 + value*0.1 + '%';
        astronaut.style.width = 150 + value + 'px';
        astronaut.style.rotate = value*-0.1 + 'deg';
        astronaut.style.opacity = 0 + value*0.06;
    }
});

function changePicture() {
    let graphs1 = document.getElementById('graphs1');
    let graphs2 = document.getElementById('graphs2');
    let graphs3 = document.getElementById('graphs3');


    if (graphs2.style.opacity == 0 && graphs3.style.opacity == 0) {
        graphs1.style.opacity = 0;
        graphs2.style.opacity = 1;
        graphs3.style.opacity = 0;
    }
    else if (graphs1.style.opacity == 0 && graphs3.style.opacity == 0) {
        graphs1.style.opacity = 0;
        graphs2.style.opacity = 0;
        graphs3.style.opacity = 1;
    }
    else if (graphs1.style.opacity == 0 && graphs2.style.opacity == 0) {
        graphs1.style.opacity = 1;
        graphs2.style.opacity = 0;
        graphs3.style.opacity = 0;
    }
    
}