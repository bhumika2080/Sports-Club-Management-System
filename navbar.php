<?php session_start(); ?>   
    
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
        rel="stylesheet"> -->
    <link rel="stylesheet" href="style1.css">
    <!-- <link rel="stylesheet" href="navbarstyle.css"> -->
    <link rel="stylesheet" href="fontawesomecss/css/all.css">

    <nav>
            <a href="index.html"><img src="logo.png"></a>

            <div class="backbutton"><i class="fa fa-arrow-circle-left" aria-hidden="true" onclick="window.history.back()" 
                style=" font-size: 30px; color: white; cursor: pointer" ></i>
            </div>

            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()" style="display: none;"></i>

                <ul>
                    <li class="product-list"><a href="index.html">HOME</a></li>
                    <li class="product-list"><a href="toolbox.php">MEMBERS PROFILE</a></li>
                    <!-- <li class="product-list"><a href="#0">Widgets</a>
                    <div class="sub-menu">
                        <ol> -->
                            <li class="product-list"><a href="newmember.php">FORM (TO ADD NEW MEMBER)</a></li>
                            <li class="product-list"><a href="newteam.php">FORM (TO JOIN NEW TEAM)</a></li>
                        <!-- </ol>
                    </div>
                    </li> -->
                    <li class="product-list"><a href="services.php">SERVICES</a></li>
                    <li class="product-list"><a href="about.php">ABOUT</a></li>
                    <li class="product-list"><a href="contact.php">CONTACT US</a></li>
                    <li><a href="sp.php">SHOPPING</a></li>
                    <li><button type="button" class="hero-btn" style="border-radius: 900px;">
                        <a href="logout-user.php" >LOG OUT</a></button>
                    </li>
                </ul>
            </div>
                <i class="fa fa-bars" onclick="showMenu()" style="display: none;"></i>
    </nav>

    <script>
        var navLinks = document.getElementById("navLinks");
        function showMenu() {
            navLinks.style.right = "0";
        }
        function hideMenu() {
            navLinks.style.right = "-200px";
        }
    </script>

  