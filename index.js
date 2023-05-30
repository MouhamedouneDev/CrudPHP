var btnAdd = document.getElementById("btnAdd");
var popUp = document.querySelector(".popUp");


btnAdd.addEventListener('click',()=>{
    popUp.classList.toggle("active");
});