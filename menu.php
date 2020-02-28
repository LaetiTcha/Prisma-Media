<?php
$page = isset($_GET["page"]) ? $_GET["page"] : "";
?>
<div class="menu">
	<div class="menuDesktop">
        <li>le coté lumineux</li>
        <li>le coté obscur</li>
        <li>l'empire</li>
        <li>les droïdes</li>
        <li>les ewoks</li>
        <li>jabba le hutt</li>
    </div>
    <div class="menuMobile">
        <div class="burgerMenu">
            <span class="burger"><img src="./images/menu.png"></span>
            <span class="close"><img src="./images/close.png"></span>
        </div>
        <div class="menuContent">
            <ul>
                <li>le coté lumineux</li>
                <li>le coté obscur</li>
                <li>l'empire</li>
                <li>les droïdes</li>
                <li>les ewoks</li>
                <li>jabba le hutt</li>
            </ul>
        </div>
    </div>
</div>

<script>
    loadjs.ready('mainScripts', function() {

        $(".close").hide();
        $( ".menuContent" ).hide();

        $( ".burger" ).click(function() {
            $( ".menuContent" ).slideToggle( "fast", function() {
                $( ".burger" ).hide();
                $( ".close" ).show();
                $(".menuContent").fadeIn();
            });
        });

        $( ".close" ).click(function() {
            $( ".menuContent" ).slideToggle( "fast", function() {
                $( ".close" ).hide();
                $( ".burger" ).show();
                $(".menuContent").fadeOut();
            });
        });

    });
</script>
