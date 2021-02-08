<!DOCTYPE html>
<html lang="en">

<head>
    <title>iridescXnt designs | my portfolio, projects, and ideas</title>
        <link rel="icon" href="Images/logo-icon.PNG">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 




                            <!--CSS-->
                                <link rel="stylesheet" href="CSS/header.css">
                                <link rel="stylesheet" href="CSS/web-card.css">
                                <link rel="stylesheet" href="CSS/body.css">

                                <link rel="stylesheet" href="CSS/footer.css">
                                <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


                            <!--JavaScript-->
                                <script src="JS/menuDrop.js"></script>


                            <!--Fonts-->
                                <link rel="preconnect" href="https://fonts.gstatic.com">
                                <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@100&family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
                                <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
                                <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
                                <link href="https://fonts.googleapis.com/css2?family=Long+Cang&display=swap" rel="stylesheet">





</head>

<body id="body-shadow">


<header data-aos="fade-down">


                <!--
                    Open menu
                -->
                    <svg onclick="expandMenu();" id="expand-toggle" xmlns="http://www.w3.org/2000/svg" fill="#e63946" class="bi bi-text-indent-left" viewBox="0 0 20 20">
                        <path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                    </svg>


                <!--
                    Close menu
                -->
                    <svg onclick="retractMenu();" id="expand-detoggle" xmlns="http://www.w3.org/2000/svg" fill="#e63946" class="bi bi-text-indent-right" viewBox="0 0 20 20">
                        <path d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm10.646 2.146a.5.5 0 0 1 .708.708L11.707 8l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zM2 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                    </svg>

                    <!--Profile picture-->
                        <img id="pfp" src="Images/profile-picture.jpg" alt="profile picture">


                                <!--
                                    Hidden menu
                                -->
                                    <div id="expand">

                                            <a href="index.html">Home</a>
                                            <hr>
                                            <a href="my-experience.html">myXP</a>
                                            <hr>
                                            <a href="projects.html">myProjects</a>
                                            <hr>
                                            


                                            <div class="x-logo">
                                                <img src="Images/logo-X.png" alt="x from logo">
                                            </div>



                                    </div>



            <img src="Images/logo.PNG" alt="iridescXnt logo">


</header>
                   


<div data-aos="fade-right" id="unsure-button">

    <p id="drop-button">
        Not sure what you need?
    </p>

    <!--Show button-->
        <svg id="arr-down" onclick="arrDown();" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#e63946" class="bi bi-arrow-bar-down" viewBox="0 0 15 15">
            <path fill-rule="evenodd" d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM8 6a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 0 1 .708-.708L7.5 12.293V6.5A.5.5 0 0 1 8 6z"/>
        </svg>


    <!--Hide button-->
        <svg id="arr-up" onclick="arrUp();" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#e63946" class="bi bi-arrow-bar-up" viewBox="0 0 15 15">
            <path fill-rule="evenodd" d="M8 10a.5.5 0 0 0 .5-.5V3.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 3.707V9.5a.5.5 0 0 0 .5.5zm-7 2.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5z"/>
        </svg>

</div>

<div id="static-dynamic-info">
    <h1 id="static-dynamic">
        Static <em style="color: white";>vs</em> Dynamic
    </h1>
        <p id="static-p">
            <em style="color: #e63946;">Static</em> is a webpage that contains fixed content. It
            has no ability to log user information. The sole purpose of it is to display critical
            information. The content is fixed and cannot be changed without <em style="color:#e63946">admin</em>
            permissions.
        </p>
        <p id="dynamic-p">
            <em style="color: #e63946;">Dynamic</em> is a lot deeper. It allows for many more features
            such as storefronts, user accounts, multiple pages within the website. It can store data in databases
            such as mySQL.
            <br>
            <em style="color: rgb(95, 95, 95); font-size: 4vw;">
                Some features currently unavailable.
            </em>
        </p>
</div>



<div data-aos="fade-up" class="website-pricing">


<div id="web-price-card">
        <h2 id="card-title">
            Level 1 <em style="font-size: 4vw; color: #e63946;">Static</em>
        </h2>
        <h2 id="card-pricing">
            $200
        </h2>
        <h3 id="card-features">
            Includes:
        </h3>
            <ul>
                <li>Custom domain</li>
                <li>(1) custom pages</li>
            </ul>
        <h5 id="card-info">
            All packages come with basic customer support.<br><br>
            Package does not include monthly maintenance.<br><br>
        </h5>
</div>

<div id="web-price-card">
    <h2 id="card-title">
        Level 2 <em style="font-size: 4vw; color: #e63946;">Static</em>
    </h2>
    <h2 id="card-pricing">
        $275
    </h2>
    <h3 id="card-features">
        Includes:
    </h3>
        <ul>
            <li>Custom domain</li>
            <li>(2) custom pages</li>
        </ul>
    <h5 id="card-info">
        All packages come with basic customer support.<br><br>
        Package does not include monthly maintenance.<br><br>
    </h5>
</div>

<div id="web-price-card">
    <h2 id="card-title">
        Level 3 <em style="font-size: 4vw; color: #e63946;">Static</em>
    </h2>
    <h2 id="card-pricing">
        $350
    </h2>
    <h3 id="card-features">
        Includes:
    </h3>
        <ul>
            <li>Custom domain</li>
            <li>(5) custom pages</li>
        </ul>    
    <h5 id="card-info">
        All packages come with basic customer support.<br><br>
        Package does not include monthly maintenance.<br><br>
    </h5>
</div>

<div id="web-price-card">
    <h2 id="card-title">
        Level 4 <em style="font-size: 4vw; color: #e63946;">Dynamic</em>
    </h2>
    <h2 id="card-pricing">
        $400
    </h2>
    <h3 id="card-features">
        Includes:
    </h3>
        <ul>
            <li>Custom domain</li>
            <li>(7) custom pages</li>
            <li>Collect client infromation in database through form entry</li>
        </ul>    
    <h5 id="card-info">
        All packages come with basic customer support.<br><br>
        Package does not include monthly maintenance.<br><br>
    </h5>
</div>





</div>



        <form action="post_signup.php" method="POST">

    

    
                    <input type="text" id="fname" placeholder="First Name" required>
                    <input type="text" id="lname" placeholder="Last Name" required>
                    <input type="email" id="email" placeholder="Email" required>
            

            
                    <p>Do you currently own a web domain?</p>
                    <select id="domain" required>
                        <option value="null"></option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
            


        

                    <p>What level were you interested in?</p>

                    <select id="level" required>
                        <option value="null"></option>
                        <option value="1">Level 1</option>
                        <option value="2">Level 2</option>
                        <option value="3">Level 3</option>
                        <option value="4">Level 4</option>
                    </select>

                <input type="submit" value="submit">



        </form>










<footer>


    <div class="footer-main">



            <a href="contact.html">Contact</a>
                <a href="about.html">About</a>
                    <a href="p-history.html">Project History</a>
                        <a href="privacy.html">Privacy</a>
                            <a href="c-support.html">Customer Support</a>



    </div>



</footer>




<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>


</html>