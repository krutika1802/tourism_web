<!DOCTYPE html>
<html lang="en" ng-app="adventureApp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADVENTURE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>
<body ng-controller="MainController">
    <nav class="navbar glass" style="height: 70px">
        <span>
            <a href="#home" style="display: flex; align-items: center">
                <img class="img2" src="./img/mountain.png" width="40" style="margin: -25px -10px -25px -20px" />
                <h1 class="logo">&nbsp;ADVENTURE</h1>
            </a>
        </span>
        <ul class="nav-links">
            <li><a href="#home" id="pri" class="active cir_border">Home</a></li>
            <li><a href="#events" id="sec" class="cir_border">Events</a></li>
            <li><a href="#explore" id="tri" class="cir_border">Explore</a></li>
            <li><a href="#tours" id="quad" class="cir_border">Tours</a></li>
            <li><a href="#about" id="quint" class="cir_border">About</a></li>
            <li><a href="#contribution" id="hex" class="cir_border">Contributions</a></li>
            <li><a href="#contact" id="hept" class="cir_border">Contact</a></li>
            <li>
                <div>
                    <input type="checkbox" class="checkbox" id="checkbox" />
                    <label for="checkbox" class="label">
                        <i class="fa fa-moon-o"></i>
                        <i class="fa fa-sun-o"></i>
                        <div class="ball"></div>
                    </label>
                </div>
            </li>
        </ul>
        <img src="./img/menu-btn.png" alt="" class="menu-btn" />
    </nav>

    <header id="home">
        <div class="header-content">
            <h2 id="quote">Explore the Beauty of Karnataka</h2>
            <div class="line"></div>
            <h1>ONE STATE MANY WORLDS</h1>
        </div>
    </header>

    <section class="events" id="events">
        <div class="container">
            <div class="title">
                <h1 class="dark">Upcoming Events</h1>
                <div class="line"></div>
            </div>
            <div class="row">
                <article class="card col">
                    <img class="card-img" src="./img/img1.jpg" />
                    <h4 class="dark">Chamundi temple visit</h4>
                    <p class="font-color">Chamundi temple visit is without a doubt, one of the most renowned travel destinations in Karnataka.</p>
                   
                </article>
                <article class="card col">
                    <img src="./img/img2.jpg" />
                    <h4 class="dark">Murudeshwara</h4>
                    <p class="font-color">Join small guided group temple and beaches, enjoy a challenging ocean, or a luxury private guided walk which can be made especially for you.</p>
                   
                </article>
                <article class="card col">
                    <img src="./img/im.jpg" />
                    <h4 class="dark">Malpe Beaches</h4>
                    <p class="font-color">Diving in Malpe Beaches is exceptional. The costal belt surroundings is one of the richest beaches in India.</p>
                   
                </article>
            </div>
        </div>
    </section>

    <section class="explore" id="explore">
        <div class="explore-content">
            <h1>EXPLORE KARNATAKA</h1>
            <div class="line"></div>
            <p>“Travel makes one modest. You see what a tiny place you occupy in the world.”– Gustav Flaubert <br />Exploring will make you want to pack your bag, book that ticket and jet away.</p>
            
        </div>
    </section>

    <section class="tours" id="tours">
        <div class="container row">
            <div class="col content-col">
                <h1 class="font-color">UPCOMING TOURS & DESTINATION</h1>
                <div class="line"></div>
                <p>Thursday 07 March 2024 : Mysuru Palace  <br />Friday 08 March 2024 : Chamundi Betta.<br />Saturday 09 March 2024 : KRS Dam. <br />and many more ......</p>
                
            </div>
            <div class="image-col">
                <div class="image-gallery">
                    <img src="./img/img3.png" alt="" />
                    <img src="./img/img4.png" alt="" />
                    <img src="./img/img5.png" alt="" />
                    <img src="./img/img6.png" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="title">
            <h1 class="font-color">About Us</h1>
            <div class="line"></div>
        </div>
        <div id="about_us">
            <div class="boxx">
                <div class="containerx">
                    <input type="radio" name="slider" id="item-1" checked />
                    <input type="radio" name="slider" id="item-2" />
                    <input type="radio" name="slider" id="item-3" />
                    <div class="cards">
                        <label class="cardt" for="item-1" id="col-img-1">
                            <img src="./img/carousel-img4.jpg" />
                        </label>
                        <label class="cardt" for="item-2" id="col-img-2">
                            <img src="./img/carousel-img5.jpg" />
                        </label>
                        <label class="cardt" for="item-3" id="col-img-3">
                            <img src="./img/carousel-img6.jpg" />
                        </label>
                    </div>
                </div>
                <span id="about-quad">
                    <a href="#home">
                        <center>
                            <h1 style="font-family: var(--ff-montserrat); color: white;">Find that</h1>
                            <br />
                            <img class="img2" src="./img/mountain_dark.jpg" width="200" style="border-radius: 12%" />
                            <br />
                            <h1 class="logo" style="font-size: 50px">ADVENTURE</h1>
                        </center>
                    </a>
                </span>
            </div>
        </div>
    </section>

    <section class="contributors" id="contribution">
        <div class="title">
            <h1 class="font-color">Contributors</h1>
            <div class="line"></div>
        </div>
        <div class="concard">
            <div class="text">
                <h1>Krutika Naik</h1>
                <h1>Divya shree</h1>
                <h1>mamatha</h1>
        </div>
    </section>

    <section id="contact">
        <div class="title">
            <h1 class="font-color">Contact Us</h1>
            <div class="line"></div>
        </div>
        <div class="contact_us">
            
            <form class="cform" action="submit.php" method="POST">
                <div class="crow-message">
                    <h1 class="color">Send us a message</h1>
                    <div></div>
                </div>
                <div class="crow-in">
                    <input type="text" id="name" name="name" placeholder="Your name" required />
                    <input type="email" id="email" name="email" placeholder="Your Email id" required/>
                </div>
                <div class="crow">
                    <div class="ccol-left">
                        <select name="country" id="country">
                            <option value =""> Select Location</option>
                            <option value="Mysuru">Mysuru</option>
                            <option value="Udupi">Udupi</option>
                            <option value="Murudeshwara">Murudeshwara</option>
                            <option value="Gokarna">Gokarna</option>
                            <option value="Mangalore">Mangalore</option>
                            <option value="Chikmagalur">Chikmagalur</option>
                        </select>
                    </div>
                </div>
                <div class="crow">
                    <div class="ccol-left">
                        <textarea type="text" id="remarks" name="remarks" placeholder="Your Remarks....." style="height: 150px" required></textarea>
                    </div>
                </div>
                <input class="crow-s" type="submit" value="Submit" required/>
            </form>
            <div class="cbox">
                <div>
                    <p class="cbox-message">Prefer some other way ?<br />Reach us by using the details given below</p>
                    <div class="cbox-line"></div>
                </div>
                <div class="c_boxx">
                    <a href="mailto:abc@gmail.com">
                        <i class="fa fa-envelope"></i>
                        Mail: uktourism@adventure.com
                    </a>
                </div>
                <div class="c_boxx">
                    <a href="tel:+91-98756-89876">
                        <i class="fa fa-phone"></i>
                        Phone: (+91) 9875689876
                    </a>
                </div>
                <div class="c_boxx">
                    <a href="#">
                        <i class="fa fa-map-marker"></i>
                        Location: Bengaluru,Karnataka,India
                    </a>
                </div>
            </div>
        </div>
    </section>

    <i class="arrow" onclick="topFunction()" id="upbtn"></i>

    <section class="footer">
        <span>Created By Krutika Naik and Team</span>
    </section>

    <script src="angular.js"></script>
    <script>
        angular.module('adventureApp', [])
        .controller('MainController', function($scope, $location, $anchorScroll) {
            $scope.navigateToTours = function() {
                $location.hash('tours');
                $anchorScroll();
            };
        });
    </script>
</body>
<script>
    const checkbox = document.querySelector('.checkbox');
    checkbox.addEventListener('click',(e)=>{
        if(checkbox.checked){
            document.body.classList.add('dark');
        }else{
            document.body.classList.remove('dark')
        }
    })
</script>
</html>


