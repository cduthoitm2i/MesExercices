// Changement icone dark mode
const mode = document.querySelector('.mode');
const icon = document.querySelector('.fa-moon');
const garuda = document.querySelector('.garuda-silhouette');

mode.addEventListener('click', function(){
    document.body.classList.toggle('dark-mode');

    if(document.body.classList.contains('dark-mode')) {
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
        garuda.classList.add('garuda-dark');
    }
    else  {
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
        garuda.classList.remove('garuda-dark'); 
    }
});

// Modification toogle-btn navbar
const bars = document.querySelector('.toggle-btn');
const navbar = document.querySelector('header .navbar');

bars.addEventListener('click', function() {
    if(bars.classList.contains('fa-bars')) {
        bars.classList.remove('fa-bars');
        bars.classList.add('fa-xmark');
        navbar.classList.add('slide');
    }
    else {
        bars.classList.remove('fa-xmark');
        bars.classList.add('fa-bars');
        navbar.classList.remove('slide');
    }
});