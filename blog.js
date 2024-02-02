function openForm() {
    document.getElementById("popupForm").style.display = "block";
  }
  function closeForm() {
    document.getElementById("popupForm").style.display = "none";
  }


const addButton = document.querySelector(".submitButton");
const postsArea = document.querySelector(".posts-area");
const myForm = document.querySelector("form")

addButton.addEventListener("click", addNewPost);

function addNewPost() {
  const newDiv = document.createElement("div");
  newDiv.classList.add('blog-post');
  postsArea.appendChild(newDiv);

  const newH2 = document.createElement("h2");
  newDiv.appendChild(newH2);
  newH2.textContent = 'Sample Post ADDED';


  const newPara = document.createElement("p");
  newDiv.appendChild(newPara);
  newPara.textContent = 'Lorem Ipsum';

}