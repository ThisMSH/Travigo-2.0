const header = document.querySelector("header");
const logowhite = document.getElementById("logowhite");
const logodark = document.getElementById("logodark");
let icon = document.getElementById("menu-icon");
logodark.classList.add("hide");

window.addEventListener ("scroll", function() {
	header.classList.toggle ("sticky", window.scrollY > 0) ? icon.style.color = "black" : icon.style.color = "white";
	logowhite.classList.toggle ("hide", window.scrollY > 0);
	logodark.classList.toggle ("hide", window.scrollY == 0);

});

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navbar.classList.toggle('open');
};

window.onscroll = () => {
	menu.classList.remove('bx-x');
	navbar.classList.remove('open');
};