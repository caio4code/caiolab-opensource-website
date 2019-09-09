<!DOCTYPE html>
<html lang="en">
<head>

    <script src="_scripts/main.js"></script>
    <script src="_scripts/darkmode.js"></script>
    <script src="_scripts/scroll.js"></script>
    <script src="https://kit.fontawesome.com/d08cffa8f3.js"></script>

    <link rel="stylesheet" href="_styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CaioLab">
    <meta name="description" content="CaioLab is an open source community for everyone.">
    <meta name="keywords" content="caiolab, web, open, source, development">
    <title>CaioLab</title>
</head>
<body id="body" onload="corpyright()">

        <div class="slide">
            <h1 id="slidetitle">We make open source applications for everyone</h1>
            <br/>
            <br/>
            <div id="slidebutton" onclick="scrolltoabout()">Learn More ></div>
        </div>

        <?php 
            include('_theme/header.php');
        ?>
        <section class="frist">
            <center>
            <br/>
            <br/>
            <br/>
          
          
            <h1 id="sectiontitle">We are CaioLab!</h1>
            <h2>Our mission is to make open source applications to make the future.</h2>
            <a id="button" href="https://community.caiolab.com">access our community</a>
            </center>
        </section>
        <section class="second">
            <center>
            <br/>
            <br/>
            <br/>
         
            <h1 id="sectiontitle">CaioLab and open source</h1>
            <h2>CaioLab has a github, for the community to help make open source applications, to make the future.</h2>
            <a id="button" href="https://github.com/caiolab">access our github</a>
            </center>
        </section>
        <section class="third">
            <center>
            <br/>
            <br/>
            <br/>
     
            <h1 id="sectiontitle">discover our technology</h1>
            <h2>we always seek to develop new technologies</h2>
            <a id="button" href="https://github.com/caiolab">access our github</a>
            <p></p>
            </center>
        </section>
    

        <?php
            include('_theme/footer.php');
        ?>

</body>
</html>
