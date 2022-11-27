//Add a sticky effet on the header

const header = document.querySelector('.header');
const menuItems = document.querySelector('.fa-solid');
const menu = document.querySelector('.menu')

window.addEventListener('scroll', ()=>{
    header.classList.toggle('sticky', window.scrollY>0);
});

menu.style.maxHeight = "0px";

function togglemenu(){
    if(menu.style.maxHeight == "0px"){
        menu.style.maxHeight = "200px";
        menuItems.classList.toggle('fa-circle-xmark');
    }
    else{
        menu.style.maxHeight = "0px";
        menuItems.classList.toggle('fa-circle-xmark');
    }
}