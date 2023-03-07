<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colas NAUDI</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Akronim&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="nav sticky">
        <div class="logo">
            <a href="#">
                <i class="fas fa-code"></i>
            </a>
        </div>
        <ul>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </div>

    <header>
        <div class="main-infos">
            <h1>Colas NAUDI</h1>
            <p id="main-infos-subtext">Full-Stack Web Developer</p>
        </div>
    </header>
    <hero>
        <img src="img/moon.png" class="moon" alt="">
        <img src="img/earth.png" class="earth" alt="">
        <img src="img/astronaut.png" class="astronaut" alt="">
    </hero>
    <section>
        <div class="projects" id="projects">
            <div class="image">
                <img src="img/Projects.png" alt="">
            </div>
            <div class="titre">
                <h2>Projects</h2>
            </div>
        </div>
        <h2 class="domain pink">WEB</h2>
        <div class="container">
            <div class="musicPalace-logo">
                <img src="img/MusicPalace/ITunes_logo.svg.png" alt="">
            </div>
            <div class="project-title">
                <h2>Music Palace</h2>
            </div>
            <div class="align-center">
                <img src="img/MusicPalace/Screen-MusicPalace.png" id="MusicPalace-Mockup" alt="">
                <div class="text">
                    <p>MusicPalace is a responsive web application for selling CDs online.
                        It's a dummy application, which doesn't really allow you to buy CDs.
                        The site is hosted online thanks to AlwaysData.<br>
                    <br>
                    Link to the project:<br>
                    <a href="https://github.com/colasnaudi/MusicPalace">https://github.com/colasnaudi/MusicPalace</a><br>
                    <br>
                    Link to the website:<br>
                    <a href="http://cnaudi.alwaysdata.net/index.html">http://cnaudi.alwaysdata.net/index.html</a></p>
                </div>
            </div>
            <div class="align-center">
                <div class="Langages-title">
                    <h2>Languages</h2>
                    <p>PHP - HTML - CSS - JavaScript - SQL</p>
                </div>
                <div class="Outils-title">
                    <h2>Tools</h2>
                    <p>Figma - PHPStorm - AlwaysData</p>
                </div>
                <div class="Notions-title">
                    <h2>Notions</h2>
                    <p>Project management - Web development - Web design - Web responsive</p>
                </div>
            </div>
        </div>
        <h2 class="domain pink">UI / UX Design</h2>
        <div class="container">
            <div class="project-title SurfGood-title">
                <img src="img/SurfGood/SurfGood-logo.png" id="SurfGood-title" width="100px" alt="">
            </div>
            <div class="align-center">
                <img src="img/SurfGood/Logo.png" id="SurfGood-logo" alt="">
                <div class="text">
                    <p>Surfgood is a marine forecast app for surfers. <br>
                        It would consist of obtaining marine forecasts over 7 days as well as access to the webcam of the chosen spot. <br>
                        The application would be based on France and would reference surf spots on the Atlantic and Mediterranean coast. <br>
                        There would also be the possibility of adding surf spots to our favorites list to access them more quickly. <br></p>
                </div>
            </div>
            <div class="maquettes">
                <h2>More mockups</h2>
                <section class="carousel">
                    <ul class="carousel-items">
                        <li class="carousel-item">
                            <div class="card">
                                <img src="img/SurfGood/Connexion.png" alt="">
                            </div>
                        </li>
                        <li class="carousel-item">
                            <div class="card">
                                <img src="img/SurfGood/list.png" alt="">
                            </div>
                        </li>
                        <li class="carousel-item">
                            <div class="card">
                                <img src="img/SurfGood/Prev1.png" alt="">
                            </div>
                        </li>
                        <li class="carousel-item">
                            <div class="card">
                                <img src="img/SurfGood/prev2.png" alt="">
                            </div>
                        </li>
                        <li class="carousel-item">
                            <div class="card">
                                <img src="img/SurfGood/cam.png" alt="">
                            </div>
                        </li>
                    </ul>
                </section>
                <h3>Scroll to see <i class="fa-solid fa-arrow-right"></i></h3>
            </div>
            <div class="align-center">
                <div class="Langages-title">
                    <h2>Languages</h2>
                    <p>❌</p>
                </div>
                <div class="Outils-title">
                    <h2>Tools</h2>
                    <p>Figma - Dribbble</p>
                </div>
                <div class="Notions-title">
                    <h2>Notions</h2>
                    <p>UI / UX  Design</p>
                </div>
            </div>
        </div>
        <h2 class="domain pink">Data Analysis</h2>
        <div class="container">
            <div class="Chronoplus-logo">
                <img src="img/Logo_Chronoplus.png" alt="">
            </div>
            <div class="project-title">
                <h2>Algorithm Visualization with Buses</h2>
            </div>
            <div class="align-center">
                <video src="img/CaptureBUS.mov" preload="auto" controls></video>
                <div class="text">
                    <p>
                        Python app using Tkinter and the data from the Chronoplus bus network. <br>
                        Displays the progress of the chosen algorithm with lines and also the path between the departure stop and the arrival stop showing all intermediate stops. <br>
                        Also displays the total distance as well as the number of stops. <br>
                        That video shows the <strong>A*</strong> algorithm. But there are others like <strong>Dijkstra, Warshall, Bellman </strong> visible on my Github.<br>
                        <br>
                        Link to the project:<br>
                        <a href="https://github.com/colasnaudi/Algorithm-Visualization-Bus">https://github.com/colasnaudi/Algorithm-Visualization-Bus</a><br>
                        <br>
                    </p>
                </div>
            </div>
            <div class="align-center">
                <div class="Langages-title">
                    <h2>Languages</h2>
                    <p>Python - Tkinter(Library)</p>
                </div>
                <div class="Outils-title">
                    <h2>Tools</h2>
                    <p>VSCode - PyCharm - Spider</p>
                </div>
                <div class="Notions-title">
                    <h2>Notions</h2>
                    <p>Maths - Algorithm - Design</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="project-title" style="padding-top: 10%;">
                <h2 class="Data-analysis-title">🔍 Data analysis</h2>
            </div>
            <div class="align-center">
                <div class="text">
                    <p>
                        Analysis of the data of hikers and moutains. <br>
                        Using Python and ipynb file to show the chart directly in the file. <br>
                        <br>
                        Link to the project:<br>
                        <a href="https://github.com/colasnaudi/Data-analysis/blob/master/ProjetPics.ipynb">https://github.com/colasnaudi/Data-analysis/blob/master/ProjetPics.ipynb</a><br>
                        <br>
                    </p>
                </div>
            </div>
            <div class="maquettes">
                <section class="carousel">
                    <ul class="carousel-items">
                        <li class="carousel-item">
                            <div class="card">
                                <img src="img/Graphs1.png" style="background-color: white;" alt="">
                            </div>
                        </li>
                        <li class="carousel-item">
                            <div class="card">
                                <img src="img/Graphs2.png" style="background-color: white;" alt="">
                            </div>
                        </li>
                        <li class="carousel-item">
                            <div class="card">
                                <img src="img/Graphs3.png" style="background-color: white;" alt="">
                            </div>
                        </li>
                    </ul>
                </section>
                <h3>Scroll to see <i class="fa-solid fa-arrow-right"></i></h3>
            </div>
            <div class="align-center">
                <div class="Langages-title">
                    <h2>Languages</h2>
                    <p>Python - Matplotlib,Pyplot(Library) - Pandas(Library)</p>
                </div>
                <div class="Outils-title">
                    <h2>Tools</h2>
                    <p>PyCharm - Spider</p>
                </div>
                <div class="Notions-title">
                    <h2>Notions</h2>
                    <p>Maths - Charts</p>
                </div>
            </div>
        </div>
        <h2 class="domain pink">Project management</h2>
    </section>

    <section>
        <div class="about" id="about">
            <div class="image">
                <img src="img/About.png" alt="">
            </div>
            <div class="titre">
                <h2>About</h2>
            </div>
        </div>
        <h2 class="domain green">About me</h2>
        <div class="container">
            <div class="align-center">
                <img src="img/AboutMe/Colas.png" alt="" id="aboutme-colas">
                <div class="text">
                    <p>My name is Colas NAUDI, I'm 20 years old and I come from Labenne (Aquitaine, France).
                        Currently in second year of IT BUT at the IUT of Bayonne and Pays de l'Adour (Anglet, France).
                        I am doing my work-study training at <a href="https://www.nobatek.inef4.com/" id="link-nobatek">NOBATEK/INEF4</a> in Anglet as a <strong>full-stack web developer</strong>.<br>
                        <br>
                        I am passionate about web development and design. So I decided to specialize in these areas.
                        I am also passionate about sports, especially surfing and skiing.
                    </p>
                </div>
            </div>
        </div>
        <h2 class="domain green">Education</h2>
            <div class="school">
                <i class="fa-solid fa-school bg-green"></i>
                <h2>IUT de Bayonne et des Pays de l'Adour</h2>
                <h2 class="date dgreen">2021 - Now</h2>
                <p>University Bachelor of Technology in Computer Science (2nde year)</p>
            </div>
            <div class="school">
                <i class="fa-solid fa-school bg-blue"></i>
                <h2>IUT de Bayonne et des Pays de l'Adour</h2>
                <h2 class="date dblue">2020 - 2021</h2>
                <p>Two-year technical degree in Computer Science (One year)</p>
            </div>
            <div class="school">
                <i class="fa-solid fa-school bg-pink"></i>
                <h2>Lycée Sud des Landes</h2>
                <h2 class="date dpink">2017 - 2020</h2>
                <p>Scientific High-School degree with physics and chemistry option</p>
            </div>
        <h2 class="domain green">Skills</h2>
        <div class="skills">
            <h2>Languages</h2>
            <div class="skill">
                <div class="skill-name">HTML/CSS</div>
                <div class="skill-bar">
                    <div class="skill-per" per="90%" style="max-width: 90%"></div>
                </div>
                <div class="level">
                    <p>Very advanced</p>
                </div>
            </div>
            <div class="skill">
                <div class="skill-name">C++</div>
                <div class="skill-bar">
                    <div class="skill-per" per="70%" style="max-width: 70%"></div>
                </div>
                <div class="level">
                    <p>Intermediate</p>
                </div>
            </div>
            <div class="skill">
                <div class="skill-name">SQL</div>
                <div class="skill-bar">
                    <div class="skill-per" per="70%" style="max-width: 70%"></div>
                </div>
                <div class="level">
                    <p>Intermediate</p>
                </div>
            </div>
            <div class="skill">
                <div class="skill-name">Python</div>
                <div class="skill-bar">
                    <div class="skill-per" per="70%" style="max-width: 70%"></div>
                </div>
                <div class="level">
                    <p>Intermediate</p>
                </div>
            </div>
            <div class="skill">
                <div class="skill-name">PHP</div>
                <div class="skill-bar">
                    <div class="skill-per" per="50%" style="max-width: 50%"></div>
                </div>
                <div class="level">
                    <p>Intermediate</p>
                </div>
            </div>
            <div class="skill">
                <div class="skill-name">Java</div>
                <div class="skill-bar">
                    <div class="skill-per" per="50%" style="max-width: 50%"></div>
                </div>
                <div class="level">
                    <p>Intermediate</p>
                </div>
            </div>
            <div class="skill">
                <div class="skill-name">Bash</div>
                <div class="skill-bar">
                    <div class="skill-per" per="50%" style="max-width: 50%"></div>
                </div>
                <div class="level">
                    <p>Intermediate</p>
                </div>
            </div>
            <div class="skill">
                <div class="skill-name">JavaScript</div>
                <div class="skill-bar">
                    <div class="skill-per" per="50%" style="max-width: 50%"></div>
                </div>
                <div class="level">
                    <p>Intermediate</p>
                </div>
            </div>

            <h2>Tools</h2>
            <div class="skill">
                <div class="skill-name">VSCode</div>
                <div class="skill-bar">
                    <div class="skill-per" per="50%" style="max-width: 50%"></div>
                </div>
                <div class="level">
                    <p>Intermediate</p>
                </div>
            </div>
            <div class="skill">
                <div class="skill-name">JetBrain (PHPStorm, PyCharm, IntelliJ...)</div>
                <div class="skill-bar">
                    <div class="skill-per" per="50%" style="max-width: 50%"></div>
                </div>
                <div class="level">
                    <p>Intermediate</p>
                </div>
            </div>
            <div class="skill">
                <div class="skill-name">Figma - Canva</div>
                <div class="skill-bar">
                    <div class="skill-per" per="50%" style="max-width: 50%"></div>
                </div>
                <div class="level">
                    <p>Intermediate</p>
                </div>
            </div>
            <div class="skill">
                <div class="skill-name">Adobe (PhotoShop, Premiere Pro, Illustrator...)</div>
                <div class="skill-bar">
                    <div class="skill-per" per="50%" style="max-width: 50%"></div>
                </div>
                <div class="level">
                    <p>Intermediate</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="contact" id="contact">
            <div class="image">
                <img src="img/Contact.png" alt="">
            </div>
            <div class="titre">
                <h2>Contact</h2>
            </div>
        </div>
        <div class="container">
            <div class="align-center">
                <div class="Langages-title">
                    <h2>Linkedin</h2>
                    <p>Colas NAUDI</p>
                </div>
                <div class="Outils-title">
                    <h2>Instagram</h2>
                    <p>@colasnaudi</p>
                </div>
            </div>
            <h2 id="contact-me-title">Contact me</h2>
            <div class="align-center">
                <form action="php/formulaire.php" method="post">
                    <input type="text" name="Name" size="30" placeholder="Name"><BR>
                    <input type="text" name="Mail" size="30" placeholder="Mail"><BR>
                    <input type="text" name="Subject" size="50" placeholder="Subject"><BR>
                    <textarea placeholder="Message" id="Message" name="Message"></textarea><BR>
                    <input type="submit" value="Send" id="btn-envoyer">
                </form>
                <?php
                    if(isset($_GET['error'])){
                        if ($_GET['error'] == 1 ){
                            echo "<p style='color:red'>Veuillez remplir tous les champs</p>";
                        }
                        else if ($_GET['error'] == 2 ){
                            echo "<p style='color:red'>Veuillez entrer un email valide</p>";
                        }
                    }
                    else if (isset($_GET['success'])){
                        if ($_GET['success'] == 1 ) {
                            echo "<p style='color:green'>Votre message a bien été envoyé</p>";
                        }
                    }
                ?>
            </div>
        </div>
    </section>
    <footer>
        <div class="align-center">
            Created by Colas Naudi with ❤️ and <a href="https://pages.github.com/">Github Pages</a>
        </div>
    </footer>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
