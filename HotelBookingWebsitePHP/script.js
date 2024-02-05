const navBtn = document.getElementById('nav-btn');
const cancelBtn = document.getElementById('cancel-btn');
const sideNav = document.getElementById('sidenav');
const modal = document.getElementById('modal');


navBtn.addEventListener("click", function(){
    sideNav.classList.add('show');
    modal.classList.add('showModal');
});

cancelBtn.addEventListener('click', function(){
    sideNav.classList.remove('show');
    modal.classList.remove('showModal');
});

window.addEventListener('click', function(event){
    if(event.target === modal){
        sideNav.classList.remove('show');
        modal.classList.remove('showModal');
    }
});
document.getElementById('loginbtn').addEventListener('click',
function(){
    document.querySelector('.bg-modal').style.display ='flex';
});
document.querySelector('.close').addEventListener('click',
function() {
    document.querySelector('.bg-modal').style.display='none';
    document.querySelector('.bg-modal').forEach(target => target.classList.remove('no-scroll'));
});
function changeBg(){
    var navbar = document.getElementById('navbar');
    var scrollvalue = window.scrollY;
    if(scrollvalue <400){
         navbar.classList.remove('bgColor');
         }else{
             navbar.classList.add('bgColor');
            }
        }
        window.addEventListener('scroll',changeBg);



