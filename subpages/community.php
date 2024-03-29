<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/hamburger.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/blog.css">
    <link rel="stylesheet" href="../css/blog-form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="../media/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="../media/logo.png">
    <script src="../main.js" defer></script>
    <script src="../blog.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <title>Community | Rescript</title>
    <script>
        $(document).ready(function(){
            $("form").submit(function(event) {
                event.preventDefault();
                console.log("Form submitted");
                var title = $("#form-title").val();
                var content = $("#form-content").val();
                var file = $("#form-file").val();
                
                const newDiv = document.createElement("div");
                newDiv.classList.add('blog-post');
                postsArea.appendChild(newDiv);

                const newH2 = document.createElement("h2");
                newDiv.appendChild(newH2);
                newH2.textContent = 'AJAX POST';


                const newPara = document.createElement("p");
                newDiv.appendChild(newPara);
                newPara.textContent = 'Ajax post content';
                
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <header>
            <a href="../index.html" class="logo"><img src="../media/logo2.png" alt="logo"><p>Rescript</p></a>
            <div class="hamburger" onclick="hamburgerToX(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <ul class="mobile-menu">
                <li><a href="learn.html">Learn Rescript</a></li>
                <li><a href="community.html">Community</a></li>
                <li><a href="#">About</a></li>
                <li><a href="media/RescriptSetupX64.zip" download>Download <i class="bi bi-download"></i></a></li>
            </ul>
            <nav>
                <ul>
                    <li><a href="learn.html" class="option"><i class="bi bi-journal-code"></i><p>Learn Rescript</p></a></li>
                    <li><a href="community.html" class="option activeSite"><i class="bi bi-person"></i><p>Community</p></a></li>
                    <li><a href="#" class="option"><i class="bi bi-person-vcard"></i><p>About</p></a></li>
                    <a href="media/RescriptSetupX64.zip" download><button><i class="bi bi-download"></i><p>Download</p></button></a>
                </ul>
            </nav>
        </header>
        <main>
            <div class="loginPopup">
                <div class="formPopup" id="popupForm">
                    <form action="community.php" class="formContainer" method="POST">
                        <div class="bg-blur"></div>
                        <div class="x-btn">
                            <h2>Create Post</h2>
                            <div type="button" class="btn cancel" onclick="closeForm()"><h1><i class="bi bi-x"></i></h1></div>
                        </div>
                        <label for="Title">
                            Title
                        </label>
                        <input type="text" id="form-title" name="title" required>
                        <label for="content">
                            Content
                        </label>
                        <textarea name="content" id="form-content" cols="30" rows="10" required></textarea>
                        <input type="file" id="form-file" accept="image/png, image/jpeg" name="photo"><br>
                        <input type="submit" value="Create" class="submitButton"></input>
                    </form>
                </div>
            </div>
            <div class="blog-area">
                <div class="subpage-info">
                    <i class="bi bi-caret-right"></i>
                    Community 
                </div>
                <h1>Rescript Blog Posts</h1>
                <button class="openButton" onclick="openForm()"><strong>Create Post <i class="bi bi-pencil-square"></i></strong></button>
                <div class="posts-area">
                <div class="blog-post">
                    <h2>Sample Post 1</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta molestias accusantium eius facilis praesentium magni unde error quasi rerum. Obcaecati eum odit blanditiis aliquid sunt! Tempora rem debitis delectus aut, nihil distinctio tenetur veniam, quos nesciunt nobis minus saepe? Natus assumenda, minima temporibus sunt quidem velit similique nesciunt delectus modi omnis at rerum nam non illo, esse enim libero harum?</p>
                    <footer>
                        <p>Read More >></p>
                    </footer>
                </div>
                <div class="blog-post">
                    <h2>Sample Post 2</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta molestias accusantium eius facilis praesentium magni unde error quasi rerum. Obcaecati eum odit blanditiis aliquid sunt! Tempora rem debitis delectus aut, nihil distinctio tenetur veniam, quos nesciunt nobis minus saepe? Natus assumenda, minima temporibus sunt quidem velit similique nesciunt delectus modi omnis at rerum nam non illo, esse enim libero harum?</p>
                    <footer>
                        <p>Read More >></p>
                    </footer>
                </div>
              </div>
            </div>
        </main>
    <footer>
        <ul>
            <h3>Learn Rescript</h3>
            <li><a href="">Introduction</a></li>
            <li><a href="">Installation</a></li>
            <li><a href="">Importing Components</a></li>
            <li><a href="">Designing Websites</a></li>
        </ul>
        <ul>
            <h3>Community</h3>
            <li><a href="">Blog</a></li>
            <li><a href="">Posts</a></li>
            <li><a href="">Custom Libraries</a></li>
            <li><a href="">Videos</a></li>
        </ul>
        <ul>
            <h3>About Us</h3>
            <li><a href="">Our Team</a></li>
            <li><a href="">History and Timeline</a></li>
            <li><a href="">Join our Team!</a></li>
        </ul>
        <ul>
            <h3>More</h3>
                <div class="icons">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-discord"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                </div>
        </ul>
    </footer>
</div>
</body>
</html>