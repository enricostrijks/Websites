<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>StrixArtz</title>
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Aldrich&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/style.css">
    </head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="nav-logo">
                    <a href="index.html">
                        <img src="./img/strixlogo.png">
                    </a>
                </div>

                <div class="menu-icons open">
                        <i class="icon ion-md-menu"></i>
                </div>
                
                <ul class="nav-list">
                    <div class="menu-icons close">
                        <i class="icon ion-md-close"></i>
                    </div>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#diensten" class="nav-link">Diensten</a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#prijzen" class="nav-link">Prijzen</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
    <section class="home-section">
        <div class="container">
            <div class="main-message"><br><br><br><br>
                <center><h1>StrixArtz</h1>
                <p>Designer and Developer </p><br><br><br><br></center>
        </div>
    </section>

    <section class="diensten-section">
        <div class="container">
            <a name="diensten" class="diensten-section-anchor"></a> 
            <div class="title-heading"><br><br>
                <h1>Diensten</h1>
                <p>Die worden aangeboden door StrixArtz</p><br><br><br><br>
            </div>

            <div class="services-grid">
                <div class="services-grid-item graphic-design">
                    <i class="icon ion-md-create"></i>
                    <h1>Graphic Design</h1>
                    <p>Graphic design voor meerdere streaming diensten, sociale media en elk ander platform voor een statische afbeelding.</p>
            </div>

            <div class="services-grid">
                <div class="services-grid-item motion-design">
                    <i class="icon ion-md-videocam"></i>
                    <h1>Motion Design</h1>
                    <p>Motion design voor demonstratie video's, podium schermen, trailers, sociale media en meer!</p>
            </div>
            <div class="services-grid">
                <div class="services-grid-item web-development">
                    <i class="icon ion-md-laptop"></i>
                    <h1>Web Development</h1>
                    <p>Web development voor landingspagina’s en site tools. Onderhoud & up-to-date houden van uw website.</p>
            </div>
            
            <div class="services-grid">
                <div class="services-grid-item app-development">
                    <i class="icon ion-md-settings"></i>
                    <h1>App Development</h1>
                    <p>App development voor verschillende apps van game launchers tot soundboards. Onderhoud & up-to-date houden van uw app.</p>
            </div>
        </div><br><br><br><br><br><br><br><br><br><br><br><br>
    </section>

    <section class="portfolio-section">
    <a name="portfolio" class="portfolio-section-anchor"></a> 
        <div class="container">
            <center><div class="portfolio-content">
                <div class="modal-videos">
                <div class="modal-content-videos">
                    <span class="close-button">&times;</span>
                    <h4>Portfolio Video's</h4>
                    <iframe width="360" height="180" src="https://www.youtube.com/embed/X2gd3w_W0Xw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    <iframe width="360" height="180" src="https://www.youtube.com/embed/Pw9VsgXR8uE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    <iframe width="360" height="180" src="https://www.youtube.com/embed/mIPY_1C5eAU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </div>
            
            <div class="modal-banners">
                <div class="modal-content-banners">
                    <span class="close-buttonb">&times;</span>
                    <h4>Portfolio Banners</h4>
                    <div class="slideshow-container">

                        <div class="mySlides fade">
                        <img src="./img/BANNERVOORBEELDBLUE.png" style="width:100%">
                        <div class="text">Banner Strix Artz Blauw</div>
                        </div>
                    
                        <div class="mySlides fade">
                        <img src="./img/BANNERVOORBEELDGREEN.png" style="width:100%">
                        <div class="text">Banner Strix Artz Groen</div>
                        </div>
                    
                        <div class="mySlides fade">
                        <img src="./img/FortniteHeader.png" style="width:100%">
                        <div class="text">Fortnite Header</div>
                        </div>

                        <div class="mySlides fade">
                            <img src="./img/poltess.png" style="width:100%">
                            <div class="text">Banner Politie Tess</div>
                        </div>

                        <div class="mySlides fade">
                            <img src="./img/koolein.png" style="width:100%">
                            <div class="text">Banner Kolein</div>
                        </div>
                    
                        <a class="prev" onclick="plusSlidesB(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlidesB(1)">&#10095;</a>
                    </div>
                    <br>
                    
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                        <span class="dot" onclick="currentSlide(5)"></span>
                    </div>
                </div>
            </div>

            <div class="modal-logos">
                <div class="modal-content-logos">
                    <span class="close-buttonl">&times;</span>
                    <h4>Portfolio Logo's</h4>
                    <div class="slideshow-container">

                        <div class="mySlidesl fade">
                            <img src="./img/spellenjacht.png" style="width:50%">
                            <div class="text">Logo Spellenjacht</div>
                        </div>
                    
                        <div class="mySlidesl fade">
                        <img src="./img/logoextrajur.png" style="width:50%">
                        <div class="text">Logo ExtraJur</div>
                        </div>
                    
                        <div class="mySlidesl fade">
                        <img src="./img/logoprison.png" style="width:50%">
                        <div class="text">Logo PrisonRP</div>
                        </div>

                        <div class="mySlidesl fade">
                            <img src="./img/footballogo.png" style="width:50%">
                            <div class="text">Logo FootBallSkillerzzs</div>
                        </div>

                        <div class="mySlidesl fade">
                            <img src="./img/logoaaron.png" style="width:50%">
                            <div class="text">Logo GekkeAaron</div>
                        </div>
                    
                        <a class="prevl" onclick="plusSlidesL(-1)">&#10094;</a>
                        <a class="nextl" onclick="plusSlidesL(1)">&#10095;</a>
                    </div>
                    <br>
                    
                    <div style="text-align:center">
                        <span class="dotl" onclick="currentSlide(1)"></span>
                        <span class="dotl" onclick="currentSlide(2)"></span>
                        <span class="dotl" onclick="currentSlide(3)"></span>
                        <span class="dotl" onclick="currentSlide(4)"></span>
                        <span class="dotl" onclick="currentSlide(5)"></span>
                    </div>
                </div>
            </div>

            <div class="modal-overig">
                <div class="modal-content-overig">
                    <span class="close-buttono">&times;</span>
                    <h4>Portfolio Overig</h4>
                    <div class="slideshow-container">

                        <div class="mySlideso fade">
                            <img src="./img/offlinestrix.png" style="width:100%">
                            <div class="text">Twitch Offline Screen</div>
                        </div>    

                        <div class="mySlideso fade">
                        <img src="./img/SnowrailBefore.png" style="width:100%">
                        <div class="text">Snowway Before</div>
                        </div>
                    
                        <div class="mySlideso fade">
                        <img src="./img/Snowrail.png" style="width:100%">
                        <div class="text">Snowway After</div>
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                    <br>

                    <div style="text-align:center">
                        <span class="doto" onclick="currentSlide(1)"></span>
                        <span class="doto" onclick="currentSlide(2)"></span>
                        <span class="doto" onclick="currentSlide(3)"></span>
                    </div>
                </div>
            </div>
        </div>
        </center>
            <div class="portfolio">
                <div class="portfolio-text">
                <h1>Portfolio StrixArtz</h1>
                <button class="trigger-videos">Video's</button>
                <button class="trigger-banners">Banners</button><br>
                <button class="trigger-logos">Logo's</button>
                <button class="trigger-overig">Overig</button>
            </div>
        </div>
    </section>

    <section class="prijzen-section">
        <div class="container">
            <div class="title-heading"><br>
                <a name="prijzen" class="prijzen-section-anchor"></a> 
                <h1>Prijzen</h1>
                <p>Deze prijzen staan vast!</p><br><br>
                <img src="./img/PRICELISTSTRIXARTZ.png"><br><br>
            </div>
        </div>
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="contact"><br><br><br>
                <a name="contact" class="contact"></a> 
                <h3>Contact Formulier StrixArtz</h3><br><br><br>
                <center><form action="send.php" method="POST">
                    <p>Naam</p> <input type="text" name="name">
                    <p>Email</p> <input type="text" name="emailaddress">
                    <p>Bericht</p><textarea name="message" rows="6" cols="25"></textarea><br />
                    <input type="text" id="website" name="website"/>
                    <input type="text" id="email" name="email"/>
                    <input type="submit" value="Verstuur"><input type="reset" value="Reset">
                </form></center>
            </div>
        </div>
    </section>
    </main>

    <footer>
        <p>&copy; 2020 StrixArtz Het is niet toegestaan om afbeeldingen / video's van deze site te gebruiken zonder nadrukkelijke toestemming van wettige eigenaar.</p>
    </footer>

    </div>

    <script type="text/javascript" src="scripts.js"></script>
</body>
</html>