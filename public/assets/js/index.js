let changeArrow = document.getElementById('arrow-mouve');
let arrowDown = document.getElementById('arrow-down');
let showCheck = document.getElementById('show-check');
let video = document.querySelector('.test');

setTimeout(() => {
    video.classList.add('block');
}
,6000)




changeArrow.addEventListener('click', () => {
if(showCheck.classList.contains('show')){
     arrowDown.classList.remove('fa-xmark');
     arrowDown.classList.add('fa-arrow-down');
} else {
     arrowDown.classList.remove('fa-arrow-down');
     arrowDown.classList.add('fa-xmark');
}
})

window.addEventListener('click', () => {
     arrowDown.classList.remove('fa-xmark');
     arrowDown.classList.add('fa-arrow-down');
})

$('.carousel').carousel({
     interval: 2000
   })

