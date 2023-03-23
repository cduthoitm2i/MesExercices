// Changement icone dark mode
const mode = document.querySelector('.mode');
const icon = document.querySelector('.fa-moon');

mode.addEventListener('click', function(){
    document.body.classList.toggle('dark-mode');

    if(document.body.classList.contains('dark-mode')) {
        icon.classList.remove('fa-moon');
        icon.classList.add('fa-sun');
    }
    else {
        icon.classList.remove('fa-sun');
        icon.classList.add('fa-moon');
    }
});