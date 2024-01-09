let options = document.querySelectorAll('.option');
let i;
function unselectAll() {
    for (i = 0; i < options.length; i++) {
        options[i].style.backgroundColor = "";
    }
}
options.forEach(option => {
   option.addEventListener('click', function(){
      unselectAll();
      this.style.backgroundColor = "#ff7e0e4c";
   } );
});