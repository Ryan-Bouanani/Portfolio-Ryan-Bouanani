<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <!-- Primary Meta Tags -->
    <title>Ryan Bouanani | Développeur Web et Web mobile</title>
    <meta name="title" content="Ryan Bouanani | Développeur Web et Web mobile">
    <meta name="description" content="Découvrez mon portfolio de développeur web. Vous y trouverez des réalisations qui mettent en avant mes compétences et connaissances en développement web.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://portfolio-ryan-bouanani.vercel.app/">
    <meta property="og:title" content="Ryan Bouanani | Développeur Web et Web mobile">
    <meta property="og:description" content="Découvrez mon portfolio de développeur web. Vous y trouverez des réalisations qui mettent en avant mes compétences et connaissances pour le développement web.">
    <meta property="og:image" content="https://portfolio-ryan-bouanani.vercel.app/assets/metatag/ryan-bouanani-img-metatag.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://portfolio-ryan-bouanani.vercel.app/">
    <meta property="twitter:title" content="Ryan Bouanani | Développeur Web et Web mobile">
    <meta property="twitter:description" content="Découvrez mon portfolio de développeur web. Vous y trouverez des réalisations qui mettent en avant mes compétences et connaissances pour le développement web.">
    <meta property="twitter:image" content="https://portfolio-ryan-bouanani.vercel.app/assets/metatag/ryan-bouanani-img-metatag.png">

    <link rel="apple-touch-icon" sizes="180x180" href="./favicon_io//apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon_io//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon_io//favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#4b89f8">
    <meta name="msapplication-TileColor" content="#4b89f8">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="#home">RYAN BOUANANI</a>
            <ul class="navLinks">
                <li><a href="#home">HOME</a></li>
                <li><a href="#skills">SKILLS</a></li>
                <li><a href="#projects">PROJECTS</a></li>
                <li><a href="#education">DIPLOMES</a></li>
                <li><a href="#professionalExperiences">EXPERIENCES</a></li>
                <!-- <li><a href="#contact">CONTACT</a></li> -->
            </ul>
            <button class="toggleBtn" id="navToggleOpen">
                <i class="fa-solid fa-bars"></i>
            </button>
            <button class="toggleBtn" id="navToggleClose">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </nav>
    </header>
    
    <main>
        <!-- * HOME -->
        <section id="home" class="container">
            <div class="homeLeft elementsScroll">
                <h1><span class="h1Color">Ryan</span> Bouanani</h1>
                <p>Actuellement en formation de Développeur Web, j'ai acquis de nombreuses compétences et connaissances grâce à des projets réalisés dans différents langages de programmation tout au long de ma formation.
                </p>
                <p>
                    Etant conscient du chemin à parcourir pour m'améliorer, je suis plus que jamais motivée à apprendre pour devenir meilleur.      
                </p>
                <p>Je suis également à la recherche d'une entreprise pouvant m'accueillir pendant mon stage de fin de formation en tant que développeur Web pour une durée total de 2 mois du 30/09 au 30/11 2022.</p>
                <a href="assets/CV/CV_RYAN_BOUANANI_ALTERNANCE.pdf" class="button" download="">Télécharger mon CV</a>
            </div>
            <div class="homeRight elementsScroll">
                <div class="homeIllustration"></div>
            </div>
            <span class="bubble1 bubble"></span>
            <span class="bubble2 bubble"></span>
            <span class="bubble3 bubble"></span>
        </section>


            <!-- * SKILLS -->
        <section id="skills" class="container">
            <h2>Skills</h2>
            <div class="skillsContainer">
                <div class="skillsLeft elementsScroll">
                    <div class="skillsIllustration"></div>
                </div>
                <div class="skillsRight elementsScroll">
                    <div class="frontEndContainer">
                        <h3>Front End</h3>
                        <div class="frontEnd">
                            <div class="html">
                                <img src="assets/skills/HTML.svg" alt="">
                                <h4>HTML</h4>
                            </div>
                            <div class="css">
                                <img src="assets/skills/CSS.svg" alt="">
                                <h4>CSS</h4>
                            </div>
                            <div class="javascript">
                                <img src="assets/skills/Javascript.svg" alt="">
                                <h4>Javascript</h4>
                            </div>
                            <div class="angular">
                                <img src="assets/skills/Angular.svg" alt="">
                                <h4>Angular</h4>
                            </div>
                        </div>
                    </div>
                    <div class="backEndContainer">
                        <h3>Back End</h3>
                        <div class="backEnd">
                            <div class="mysql">
                                <img src="assets/skills/MySQL.svg" alt="">
                                <h4>MySQL</h4>
                            </div>
                            <div class="php">
                                <img src="assets/skills/PHP.svg" alt="">
                                <h4>PHP</h4>
                            </div>
                            <div class="synfony">
                                <img src="assets/skills/Symfony.svg" alt="">
                                <h4>Symfony</h4>
                            </div>
                        </div>
                    </div>
                    <div class="webDesignCmsContainer">
                        <div class="webdesignContainer">
                            <h3>Web Design</h3>
                            <div class="webdesign">
                                <div class="figma">
                                    <img src="assets/skills/Figma.svg" alt="">
                                    <h4>Figma</h4>
                                </div>
                            </div>
                        </div>
                        <div class="cmsContainer">
                            <h3>CMS</h3>
                            <div class="cms">
                                <div class="wordpress">
                                    <img src="assets/skills/Wordpress.svg" alt="">
                                    <h4>Wordpress</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- * Projects -->
        <section id="projects" class="container">
            <h2>Projects</h2>
            <div class="ProjectsCardsContainer">
                <div class="projectCard elementsScroll projectCard1">
                    <!-- <div class="cardImg"> -->
                        <a href="https://github.com/Ryan-Bouanani/exam_angular">
                        <img src="./assets/luxeMoto.PNG" alt="Moto store angular">
                    </a>
                    <!-- </div> -->
                    <div class="content">
                        <h3>Site de Moto</h3>
                        <p>Création d'un site de moto en Angular faisant appel à une api avec affichage des motos à la une, page détail de chaque motos et motos trier par marques et types</p>
                    </div>
                </div>
                
                <div class="projectCard elementsScroll">
                    <a href="https://github.com/Ryan-Bouanani/CHAT-APP">
                        <img src="./assets/chat.PNG" alt="chat en php">
                    </a>
                    <div class="content">
                        <h3>CHAT</h3>
                        <p>Création d'une application de chat en PHP SQL et AJAX avec formulaire d'inscription / connexion, barre de recherche d'utilisateur et message en temps réel</p>
                        </div>
                </div>
            </div>
        </section>



        <!-- * Diplômes et Formations -->
        <section id="education"  class="container">
            <h2>Diplômes et Formations</h2>
            <div class="educationContainer">
                <div class="educationLeft">
                    <div class="educationCard elementsScroll">
                        <p class="date">12/2021 - 12/2022</>
                        <h3 class="diplome">TITRE PROFESSIONNEL DEVELOPPEUR WEB ET WEB MOBILE</h3>
                        <h4 class="school">HumanBooster</h4>
                        <h5>Saint-Just-Saint-Rambert</h5>
                    </div>
                    <div class="educationCard elementsScroll">
                        <p class="date">09/2018 - 06/2021<p/>
                        <h3 class="diplome">BAC PROFESSIONNEL TRANSPORT</h3>
                        <h4 class="school">Lycée Claude Lebois</>
                        <h5 class="location">Saint-Chamond</h5>                     
                    </div>
                </div>
                <div class="educationRight elementsScroll">
                    <div class="educationIllustration"></div>
                </div>
            </div>
        </section>

        


        <!-- * Expérience professionnel -->
        <section id="professionalExperiences" class="container">
            <h2>Expérience professionnel (stages)</h2>
            <div class="timeline elementsScroll">
                <div class="expContainer left elementsScroll">
                    <div class="expCard">
                        <p class="date">09/2020 - 10/2020</p>
                        <h3>Exploitant Transport / Pejy Transport</h3>
                        <h5>Saint Etienne</h5>
                        <p class="paraGray">Organisation d'un transport routier, affectation des moyens humains et matériels, utilisation logiciels entreprise, suivie tournées conducteur, optimisation des tournées et planning des conducteurs.</p>
                    </div>
                </div>
                <div class="expContainer right elementsScroll">
                    <div class="expCard">
                        <p class="date">11/2019 - 12/2019</p>
                        <h3>Exploitant Transport / Perrenot Transport </h3>
                        <h5>Rive-de-Gier</h5>
                    </div>
                </div>
                <div class="expContainer left elementsScroll">
                    <div class="expCard">
                        <p class="date">06/2019</p>
                        <h3> Agent de quai / Alpex Protection</h3>
                        <h5>Saint-Chamond</h5>
                        <p class="paraGray">Préparation de commandes, chargement et déchargement de camions</p>
                    </div>
                </div>
                <div class="expContainer right elementsScroll">
                    <div class="expCard">
                        <p class="date">12/2018</p>
                        <h3>Magasinier / Lycée Claude Lebois</h3>
                        <h5>Saint-Chamond</h5>
                        <p class="paraGray">Réception et vérification marchandises, gestion de l'état des stocks, inventaires, préparation expédition marchandises.</p>
                    </div>            
                </div>
            </div>
        </section>




        <!-- * Contact -->
        <section id="contact" class="container">
            <h2>Contact</h2>
            <div class="contactContainer">
                <div class="contactLeft elementsScroll">
                    <div class="topInfo">
                        <div class="numTel">
                            <span class="telIcon"></span>
                            <a href="tel:+33619708209">
                            <h4>06 19 70 82 09</h4>
                            </a>
                        </div>
                        <div class="mail">
                            <span class="mailIcon"></span>
                            <a href="mailto:ryan42426@gmail.com">
                            <h4>Ryan42426@gmail.com</h4></a>
                        </div>
                        <div class="location">
                            <span class="locationIcon"></span>
                            <h4>Saint Etienne, Lyon</h4>
                        </div>
                    </div>
                    <div class="contactIllustration"></div>
                </div>
                <div class="contactRight elementsScroll">
                    <form action="mail.php" method="POST">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" placeholder="Entrer votre nom" required>
                        <label for="mail">Mail</label>
                        <input type="email" id="mail" name="mail" placeholder="Entrer votre email" required>
                        <label for="object">Nom</label>
                        <input type="text" id="object" name="object" placeholder="Object" required>
                        <label for="message">Message</label>
                       <textarea name="message" id="message" cols="30" rows="10" placeholder="Entrer votre message" required></textarea>
                       <input type="submit">
                    </form>
                </div>
            </div>
        </section> 
    </main>

    <div class="arrowScrollTop"></div>

    <footer>
        <p>Designé et coder par Ryan Bouanani</p>
        <p>©Copyright 2022 - Ryan Bouanani</p>
    </footer>

    <!-- Javascript -->
    <script src="app.js"></script>
</body>
</html>