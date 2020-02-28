<?php
@session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="en-US" />
    <meta name="google" content="notranslate" />
    <meta name="google-site-verification" content="isVNmfFRqoBeJFUj4dFGwUcp0hArbVD2Gfy-IBprXzo" />
    <?php
    ob_start();
    include("header.php");
    $headers=ob_get_contents();
    ob_end_clean();
    ?>

    <link href="js/font-awesome-pro/css/fontawesome-all.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="css/materialize.min.css" rel="stylesheet" type="text/css" />

    
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <script  src="js/jquery/jquery-1.11.0.min.js"></script>
    <script  src="js/loadjs/loadjs.min.js"></script>
    <script  src="js/materialize/materialize.min.js"></script>
    <script >
        loadjs([
            "js/lazyload/jquery.lazyload.min.js",
            "js/upload/jquery.form.min.js",
        ], 'mainScripts');
    </script>
</head>
<body>
    <?php
    if(isset($_GET["page"])) {
        $page = $_GET["page"];
    }
    else {
        $page = "home";
    }

    if($page == "home"){
        include("home.php");
    }

    elseif($page == "404"){
        include("404.php");
    }

    else {
        header("HTTP/1.0 404 Not Found");
    }
    //include("footer.php");
    ?>

    <script>
        loadjs.ready('mainScripts', function() {

            var isMobile = $(window).width() <= 750;

            resizeNavigation = function() {
                var menu_height = isMobile ? $('.menuDesktop').height() : $('.menuMobile').height();
                $('#navigation').css('min-height',$(window).height() - menu_height - 18);
            };
            resizeNavigation();

            $(window).resize(function(){
                isMobile = $(window).width() <= 750;
                resizeNavigation();
            });

        });
    </script>
    </body>
</html>