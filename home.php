<?php

$keywords = "";
$title = "";
$description = "";
$image = "";

$headers = str_replace("%TITLE%", $title, $headers);
$headers = str_replace("%KEYWORDS%", $keywords, $headers);
$headers = str_replace("%DESCRIPTION%", $description, $headers);
$headers = str_replace("%IMAGE%", $image, $headers);

echo <<<EOF
    {$headers}
</head>
<body>
EOF;
include("menu.php");
?>
<div id="navigation" class="fade-delay-1">

    <div class="parallax-container">
        <div class="parallax"><img src="./images/header.png"></div>
    </div>

    <div class="section white">
        <div class="row container">
            <div class="textSection">
                <h2 class="header">Star Wars, The Force Awakens</h2>
                <p class="grey-text text-darken-3 lighten-3">Plus de 30 ans après la bataille d'Endor, la galaxie n'en a pas fini avec la tyrannie et l’oppression. Les membres de l'Alliance rebelle, devenus la « Résistance », combattent les vestiges de l'Empire réunis sous la bannière du « Premier Ordre ».</p>
                <p>Un mystérieux guerrier, Kylo Ren, semble vouer un culte à Dark Vador et pourchasse les ennemis du Premier Ordre à travers la galaxie. Au même moment, une jeune femme nommée Rey, pilleuse d'épaves sur la planète désertique Jakku, va faire la rencontre de Finn, un Stormtrooper en fuite, une rencontre qui bouleversera sa vie.</p>
                <p>Plus de 30 ans après la bataille d'Endor, la galaxie n'en a pas fini avec la tyrannie et l’oppression. Les membres de l'Alliance rebelle, devenus la « Résistance », combattent les vestiges de l'Empire réunis sous la bannière du « Premier Ordre ».</p>
                <p>Un mystérieux guerrier, Kylo Ren, semble vouer un culte à Dark Vador et pourchasse les ennemis du Premier Ordre à travers la galaxie. Au même moment, une jeune femme nommée Rey, pilleuse d'épaves sur la planète désertique Jakku, va faire la rencontre de Finn, un Stormtrooper en fuite, une rencontre qui bouleversera sa vie.</p>
                <p>Plus de 30 ans après la bataille d'Endor, la galaxie n'en a pas fini avec la tyrannie et l’oppression. Les membres de l'Alliance rebelle, devenus la « Résistance », combattent les vestiges de l'Empire réunis sous la bannière du « Premier Ordre ».</p>
                <p>Un mystérieux guerrier, Kylo Ren, semble vouer un culte à Dark Vador et pourchasse les ennemis du Premier Ordre à travers la galaxie. Au même moment, une jeune femme nommée Rey, pilleuse d'épaves sur la planète désertique Jakku, va faire la rencontre de Finn, un Stormtrooper en fuite, une rencontre qui bouleversera sa vie.</p>
            </div>
            <div class="imageSection">
                <img src="./images/ad.jpg">
            </div>
        </div>
    </div>

    <div class="parallax-container">
        <div class="parallax"><img src="./images/kiloren.jpg"></div>
    </div>

    <div class="section white">
        <div class="row container">
            <div class="firstSection">
                <h2 class="header">A long time ago, in a galaxy far, far away…</h2>
                <div class="imageSectionTwo">
                    <img src="./images/r2d2_c3p0.jpg" style="width: 100%">
                </div>
                <div class="textSectionTwo">
                    <p class="grey-text text-darken-3 lighten-3"><b>La Guerre des étoiles</b> (titre original <b>Star Wars</b>, soit littéralement Guerres Stellaires ) est une épopée cinématographique de science-fiction créée par George Lucas, considérée comme un élément phare du space opera. Prévue à la base pour être une suite de trois trilogies (triptyque), Lucas fut contraint, par manque de moyens techniques, de commencer par la seconde trilogie (<b>l'Épisode IV - Un nouvel espoir</b>) en 1977. La série connut un succès phénoménal partout dans le monde et engendra une très importante communauté de fans.
                        Sans prétendre expliquer le succès du premier film (s'il y avait une recette, cela se saurait), on peut, toutefois, noter que, malgré le manque de moyens (le budget était relativement modeste, les acteurs presque inconnus) :</p>
                </div>
            </div>
            <div class="secondSection">
                <div class="textSectionThree">
                    <p class="grey-text text-darken-3 lighten-3">- Il fait appel à des références connues et appréciées des jeunes de l'époque : films de cape et d'épée, westerns, péplums, contes de fées et même le Seigneur des Anneaux de J.R.R. Tolkien ; cette œuvre n'apparaît pas comme de la science-fiction au sens strict mais plutôt comme du space fantasy.</p>
                    <p>- Les effets spéciaux, supervisés par Ken Ralston, étaient réellement novateurs, avec notamment la participation de John Dykstra (qui a également participé au premier film de Star Trek), qui avait développé une nouvelle manière d'animer les maquettes des vaisseaux en coordonnant leurs mouvements par ordinateur (Dykstraflex).</p>
                    <p>- Le film a développé un univers cohérent, avec, comme préoccupation constante, autant la création d'une ambiance que l'action proprement dite.</p>
                    <p>- La musique, composée par John Williams, introduit des thèmes récurrents et des leitmotivs (procédé classique mais renforçant la cohérence).</p>
                </div>
            </div>
        </div>
    </div>

    <img src="./images/stormtroopers.jpg" style="width: 100%">
</div>
<script>
    loadjs.ready('mainScripts', function() {

        $('.parallax').parallax();

    });
</script>