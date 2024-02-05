//Rozwijanie menu
function hamburgerToX(x) {
  x.classList.toggle("change");
  document.querySelector('.mobile-menu').classList.toggle('active');
}

//Form open/close

function openForm() {
  document.getElementById("popupForm").style.display = "block";
}
function closeForm() {
  document.getElementById("popupForm").style.display = "none";
}
