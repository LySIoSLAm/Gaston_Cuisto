<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/style.css">
    <script src="../JavaScript/jquery.js"></script>
    <title>Gaston Cuisto</title>
</head>
<body>
    
    <!--debut de l'en-tete de la page-->
 
    <header id="header" >

        <nav>
            <ul>
                <li><a href="#home">accueil</a></li>
                <li><a href="#plat">plat du jour</a></li>
                <li><a href="#about">a propos</a></li>
                <li><a href="#chef">nos chefs</a></li>
                <li><a href="#contact">contact</a></li>
                <li><a href="connexion.php">se connecter</a></li>
            </ul>
        </nav>
        <div class="fas fa-bars"></div>
        <a href="#" class="logo"><img src="../Img-Video/logo_restaurant.png" alt="logo"></a>

    </header>

    <!--fin de l'en-tete de la page-->


    <!--debut de la section accueil-->

    <section id="home" class="container-fluid">

        <div class="row min-vh-100 align-items-center">
            <div class="col-md-16 ml-md-5 text-md-left text-center content">
                <h1>Que Des Plats Délicieux</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Quam ratione veritatis laborum natus pariatur adipisci dicta culpa <br>laboriosam fugiat totam, 
                    distinctio perferendis ad quae accusamus recusandae maxime. Error, eligendi repudiandae!
                </p>
                <a href="#plat"><button>reserver</button></a>
            </div>
            <div class="video-container">
                <video src="../Img-Video/page_accueil_vid.mp4" autoplay loop class="vid video1"></video>
            </div>
        </div>

    </section>

    <!--fin de la section accueil-->   
    
    <!--debut de la section plat--> 

    <section id="plat" class="container-fluid">

        <div class="heading text-center">
            <h1><span>P</span>lats <span>d</span>u <span>J</span>our </h1>
            <p>voici les plats proposez aujourd'hui.</p>
        </div>

        <div class="card-container">
            <div class="card">
                <img src="../Img-Video/img1.jpg" alt="plat1">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque velit laborum doloribus eius cumque </p>
                <a href="../Page/reservation.php"><button>reserver se plat</button></a>
            </div>
            <div class="card">
                <img src="../Img-Video/img2.jpg" alt="plat2">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque velit laborum doloribus eius cumque </p>
                <a href="../Page/reservation.php"><button>reserver se plat</button></a>
            </div>
            <div class="card">
                <img src="../Img-Video/img3.jpg" alt="plat3">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque velit laborum doloribus eius cumque </p>
                <a href="../Page/reservation.php"><button>reserver se plat</button></a>
            </div>
            <div class="card">
                <img src="../Img-Video/img4.jpg" alt="plat4">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque velit laborum doloribus eius cumque </p>
                <a href="../Page/reservation.php"><button>reserver se plat</button></a>
            </div>
        </div>

    </section>

   <!--fin de la section plats--> 

   <!--debut de la section a propos--> 

    <section id="about" class="container">

        <div class="heading text-center">
            <h1><span>A</span> <span>P</span>ropos <span>D</span>e <span>N</span>ous </h1>
        </div>
        
        <div class="row min-vh-100">
            <div class="col-md-6 align-items-center content">
                <img src="../Img-Video/logo_restaurant.png" alt="logo">

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim, pariatur libero? 
                    Nihil tempore porro nostrum repellendus! Libero ratione ipsam cum quidem earum. 
                    Ipsum, tenetur vero!
                </p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis distinctio itaque dolorum. Nisi, quod. Repudiandae.</p>
                <a href="#"><button> En savoir plus</button></a>
            </div>
            <div class="col-md-6 image">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d20257.8618669419!2d3.084067308356064!3d50.
                604212809202394!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d5c13add4e13%3A0xaf47fc211853709a!2sLyc%C3%A9e%20Gaston%20Berger!5e0!3m2!1sfr!2sfr!4v1646230340011!5m2!1sfr!2sfr" 
                width="700vh" height="650vh" style="border: 7px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

    </section>

    <!--fin de la section a propos--> 

    <!--debut de la section chefs--> 

    <section id="chef" class="container-fluid">

        <div class="heading text-center">
            <h1><span>N</span>os <span>C</span>hefs</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="chef-container">
            <div class="chef">
                <img src="../Img-Video/chef1.jpg" alt="chef1">
                <h2>Chef Amine</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                    Itaque velit laborum doloribus eius cumque </p>
            </div>
            <div class="chef">
                <img src="../Img-Video/chef2.jpg" alt="chef2">
                <h2>Chef Rodriguez</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque velit laborum doloribus eius cumque </p>
            </div>
            <div class="chef">
                <img src="../Img-Video/chef3.jpg" alt="chef3">
                <h2> Chef Bruno</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque velit laborum doloribus eius cumque </p>
            </div>
        </div>
    </section>

    <!--fin de la section chefs--> 


    <!--debut de la section contact--> 

    <section id="contact" class="container-fluid">

        <div class="heading text-center">
            <h1><span>C</span>ontactez-<span>N</span>ous</h1>
        </div>

        <div class="row justify-content-center">
            <form action="" class="col-md-7">

                <div class="inputbox">
                    <input type="text" name="" id="" required>
                    <h3>Nom complet :</h3>
                </div>

                <div class="inputbox">
                    <input type="email" name="" id="" required>
                    <h3>E-mail :</h3>
                </div>

                <div class="inputbox">
                    <textarea required name="" id="" cols="30" rows="10"></textarea>
                    <h3>Message :</h3>
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </section>

    <!--fin de la section contact--> 

    <!--section pied de page--> 

    <footer id="footer">
        <div class="row align-items-center">
            <div class="col-md-4 brand">
                <div class="icons">
                    <h2>nos réseaux sociaux:</h2>
                    <a href="https://fr-fr.facebook.com/Lyc%C3%A9e-Gaston-Berger-Officiel-1669262749959868/" target="_blank" class="fab  fa-facebook-square" ></a>
                    <a href="https://www.linkedin.com/school/lyc%C3%A9e-gaston-berger/" target="_blank" class="fab fa-linkedin" ></a>
                    <a href="#" class="fab fa-instagram-square"></a>
                    <a href="#" class="fab fa-twitter-square"></a>
                    <a href="#" class="fab fa-pinterest-square"></a>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="footer-liens">
                    <h2>liens:</h2>
                    <a href="#home">accueil</a>
                    <a href="#plat">plat du jour</a>
                    <a href="#about">a propos</a>
                    <a href="#chef">nos chefs</a>
                    <a href="#contact">contact</a>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="politique">
                    <h2>notre politique rgpd:</h2>
                    <a href="../Page/Politique-rgpd.html" target="_blank">gaston politique</a>
                </div>
            </div>
        </div>
        <h1>&copy; copyright @ 2022 by <span>G</span>aston <span>C</span>uisto</h1>
    </footer>

    <!--fin --> 



    <script>
    $(document).ready(function(){

        $('.fa-bars').click(function(){
            $(this).toggleClass('fa-times')
            $('nav').toggleClass('nav-toggle');
        });

        $('nav ul li a').click(function(){
            $('.fa-bars').removeClass('fa-times')
            $('nav').removeClass('nav-toggle');
        });

/*mettre un background lorsqqu'on descent*/
        $(window).on('scroll load', function(){
            if($(window).scrolltop() > 10){
                $('#header').addClass('header-active');
            } 
            else{
                $('#header').removeClass('header-active');
            }
        });

    });
    </script>
</body>
</html>