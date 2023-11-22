<!--JavaScript for Toggle Menu-->
let navLinks = document.getElementById("navLinks");

function showMenu() {
    navLinks.style.right = "0";
}

function hideMenu() {
    navLinks.style.right = "-200px"
}

//     js for login popup
document.querySelector("#show-login").addEventListener("click",function (){
    document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close-btn").addEventListener("click",function (){
    document.querySelector(".popup").classList.remove("active");
});


//     js for register popup
document.querySelector("#reg").addEventListener("click",function (){
    document.querySelector(".popup-reg").classList.add("active");
    document.querySelector(".popup").classList.remove("active");
});
document.querySelector(".popup-reg .close-btn").addEventListener("click",function (){
    document.querySelector(".popup-reg").classList.remove("active");
});

document.querySelector("#to-login").addEventListener("click",function (){
    document.querySelector(".popup-reg").classList.remove("active");
    document.querySelector(".popup").classList.add("active");
});