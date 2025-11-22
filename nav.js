// function openNav(){
//     document.getElementById("mobile-menu").style.width = "100%";
// }

// function closeNav(){
//     document.getElementById("mobile-menu").style.width = "0%";
// }
let search = document.querySelector('.search-box');
document.querySelector('#search-icon').onclick = () =>{
    search.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');
document.querySelector('#menu-icon').onclick = () =>{
    navbar.classList.toggle('active');
    search.classList.remove('active');
}
window.onscroll = () => {
    navbar.classList.remove('active');
    search.classList.remove('active');
}
document.addEventListener('click', (e) => {
  const searchIcon = document.querySelector('#search-icon');
  // Si haces clic fuera de la barra o del ícono, se cierra
  if (!search.contains(e.target) && !searchIcon.contains(e.target)) {
    search.classList.remove('active');
  }
});