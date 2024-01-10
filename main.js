// let options = document.querySelectorAll('.option');
// let selectedOption = localStorage.getItem('selectedOption');

// let i;
// function unselectAll() {
//     for (i = 0; i < options.length; i++) {
//         options[i].style.backgroundColor = "";
//     }
// }
// options.forEach(option => {
//    option.addEventListener('click', function(){
//       unselectAll();
//       this.style.backgroundColor = "#ff7e0e4c";
//       localStorage.setItem('selectedOption', this.innerText);
//    } );
// });

//         if (selectedOption) {
//             options.forEach(option => {
//                 if (option.innerText === selectedOption) {
//                     option.style.backgroundColor = "#ff7e0e4c";
//                 }
//             });
//         }