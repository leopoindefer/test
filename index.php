<html>

	<head>
		
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="shop.css">		
		<title>Normel - Accueil</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/icône.png" />
		<meta name="description" content="" >
		
	</head>

<body>

<section id="slideshow">
		
	<div class="container">
		<div class="c_slider"></div>
		<div class="slider">
			<figure>
				<img src="images/électrique2.jpg" alt="" width="700px" height="310" />
				<figcaption>Plus de 70 ans d'expérience</br></br><font id="txt">Notre expérience et notre compétence font la force de notre société </font></figcaption>

			</figure><!--
			--><figure>
				<img src="images/bureau.jpg" alt="" width="700px" height="310" />
				<figcaption>Bureau d'étude intégré</figcaption>
			</figure><!--
			--><figure>
				<img src="images/électrique3.jpg" alt="" width="700px" height="310" />
				<figcaption>La réactivité est notre priorité</figcaption>

			</figure><!--
			--><figure>
				<img src="images/électrique1.jpg" alt="" width="700px" height="310" />
				<figcaption>Toujours à la recherche de la perfection</figcaption>
			</figure>
		</div>
	</div>
		
	<span id="timeline"></span>
</section>

<span id="sl_play" class="sl_command"></span>
<span id="sl_pause" class="sl_command"></span>
 
<span id="sl_i1" class="sl_command sl_i"></span>
<span id="sl_i2" class="sl_command sl_i"></span>
<span id="sl_i3" class="sl_command sl_i"></span>
<span id="sl_i4" class="sl_command sl_i"></span>

<a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
<a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>

<div class="c_slider"></div>

<ul class="dots_commands"><!--
	--><li><a title="Afficher la slide 1" href="#sl_i1">Slide 1</a></li><!--
	--><li><a title="Afficher la slide 2" href="#sl_i2">Slide 2</a></li><!--
	--><li><a title="Afficher la slide 3" href="#sl_i3">Slide 3</a></li><!--
	--><li><a title="Afficher la slide 4" href="#sl_i4">Slide 4</a></li>
</ul>

<div id="banner2">

<font id="titre" size="+2">Nos centres de compétences et de références</font></br>

<div id="hospitalier"><a href=""><img src="images/hopital"/><font id="hospitaliertxt" size="+2">Hospitalier</font></a></div>
<div id="industrialisation"><a href=""><img src="images/industrialisation.jpg"/><font id="industrialisationtxt" size="+2">Terciaire et </br>industrie</font></a></div>
<div id="habitat"><a href=""><img src="images/habitat.jpg"/><font id="habitattxt" size="+2">Habitation</font></a></div>

</div>

<div id="banner3"><hr id="trait2"></hr>

	<div id="normel">
	<font id="apropostxt" size="+2">Normel</font></br></br>
	<img src="images/geo.png" id="geo"/><font>        15 rue Georges Cuvier,</br> 76100 Rouen</font></br>
	<img src="images/tel.png" id="tel"/><font size="+1">       02 35 03 20 40</font>
	</div>

	<div id="apropos2">
		<font id="apropostxt" size="+2">A propos</font></br></br>
		<font><a href="" id="blue">Accueil</a></font></br>
		<font><a href="" id="blue">Contact</a></font></br>
		<font><a href="" id="blue">Mentions légales</a></font>
	</div>
	
	<div id="suiveznous">
		<font id="apropostxt" size="+2">Suivez-nous</font></br></br>
		<font><a>LinkedIn</a></font>
	</div>

</div>

<div id="banner">

    <img src="images/logonormel.jpg" id="logo"/>

    <div id="menu">
		<ul>
			<li class="menuaccueil" ><a><font id="blue">Accueil</font></a></li>
			<li class="menuactualite" ><a href="actualites.php">Actualités</a></li>
        	<li class="menuapropos" ><a href="apropos">A propos</a></li>
			<li class="menucontact" ><a href="contact">Contact</a></li>
		</ul>
	</div>
    <hr id="trait"></hr>
</div>

<footer>
</footer>

</body>

</html>

<style type="text/css">

body {
	margin-left: 0;
	margin-top: 0;
	margin-right: 0;
	height: 100%;
}

#banner {
	display: block;
	width: 100%;
	position: fixed;
	background-color: white;
	margin-left: 0px;
	top: 0;
	overflow: hidden;
	height: 59px;
	float: left;
	font-family: Liberation sans;
	font-size: 20px;
}

#logo {
    position: fixed;
    margin-top: -15px;
    margin-left: -300px;
    float: left;
    height: 80px;
    width: 270px;
}

#menu {
	width: 100%;
	height: 20px;
 	color: white;
	display: inline;
	position: relative;
	background-color: white;
	overflow: hidden;
}

#menu ul {
	float: left; 
	left: 50%;
	position: relative;
	margin-top: 20px;
	margin-left: -300px;
}

#menu ul li {
	float: left;
	list-style-type : none;
	margin-left : 20px;
	left: -50%;
}

#menu ul li a {
	text-decoration: none;
	color: black;
	display: inline-block;
	height: 70px;
	width: 	120px;
	text-align: center; 
	background-color: white;
	padding-top: 0px;
}

#menu ul li a:hover {
	color: #008EC8;
	background-color: white;
}

#blue {
	color: #008EC8;
	text-decoration: none;
}

#trait {
    float: left;
    position: fixed;
    margin-top: 58px;
    margin-left: -10px;
    color: black;
    width: 100%; 
    border: 1px dashed :#000;
}

#slideshow {
	position: relative;
	width: 700px;
	height: 310px;
	padding: 0px;
	margin: 59 auto 2em;
	border: 1px solid #ddd;
	background: #FFF;
	/* CSS3 effects */
	background: linear-gradient(#FFF, #FFF 20%, #EEE 80%, #DDD);
	border-radius: 2px 2px 2px 2px;
	box-shadow: 0 0 3px rgba(0,0,0, 0.2);
}
 
/* avanced box-shadow
 * tutorial @
 * https://www.creativejuiz.fr/blog/les-tutoriels/ombre-avancees-avec-css3-et-box-shadow 
*/
#slideshow:before,
#slideshow:after {
	position: absolute;
	bottom:16px;
	z-index: -10;
	width: 700px;
	height: 20px;
	content: " ";
	background: rgba(0,0,0,0.1);
	border-radius: 50%;
	box-shadow: 0 0 3px rgba(0,0,0, 0.4), 0 20px 10px rgba(0,0,0, 0.7);
}
#slideshow:before {
	left:0;
	transform: rotate(-4deg);
}
#slideshow:after {
	right:0;
	transform: rotate(4deg);
}

#slideshow .container {
	position:relative;
	width: 100%;
	height: 310px;
	overflow: hidden;
}
	
/* on prévoit un petit espace gris pour la timeline */
#slideshow .container:after {
	position:absolute;
	bottom: 0; left:0;
	content: " ";
	width: 100%;
	height: 1px;
	background: #999;
}
/* 
   le conteneur des slides
   en largeur il fait 100% x le nombre de slides
*/
#slideshow .slider {
	position: absolute;
	left:0; top:0;
	width: 400%;
	height: 310px;
}

/* annulation des marges sur figure */
#slideshow figure {
	position:relative;
	display:inline-block;
	padding:0; margin:0;
}
/* petit effet de vignette sur les images */
#slideshow figure:after {
	position: absolute;
	display:block;
	content: " ";
	top:0; left:0;
	width: 100%; height: 100%;
	box-shadow: 0 0 65px rgba(0,0,0, 0.5) inset;
}

/* styles de nos légendes */
#slideshow figcaption {
	position:absolute;
	left:0; right:0; bottom: 150px; 
	padding: 20px;
	margin:0px;
	text-align:center;
	letter-spacing: 0.05em;
	word-spacing: 0.05em;
	font-family: Liberation sans;
	color: white;
	font-size: 25px; 
	font-weight: bold;
	text-shadow: 0.1em 0.1em 0.2em black;
}

/* fonction d'animation, n'oubliez pas de prefixer ! */
@keyframes slider {
	0%, 20%, 100%	{ left: 0 }
	25%, 45%		{ left: -100% }
	50%, 70%		{ left: -200% }
	75%, 95%		{ left: -300% }
}

/* complétez le sélecteur : */
#slideshow .slider {
	/* ... avec la propriété animation */
	animation: slider 32s infinite;
}

#timeline {
	position: absolute;
	background: #999;
	bottom: 25px;
	left: 15px;
	height: 1px;
	background: rgb(214,98,13);
	background: rgba(214,98,13,.8);
	width: 0;
	/* fonction d'animation */
	animation: timeliner 32s infinite;
}

@keyframes timeliner {
	0%, 25%, 50%, 75%, 100%	{ width: 0;		}
	20%, 45%, 70%, 90%		{ width: 640px;	}
}

/* ajouter à l'élément : */
#slideshow figcaption {
	/* ... la propriété animation */
	animation: figcaptionner 32s infinite;
}

.play_commands {
	/* positionnement en haut à droite */ 
	position: absolute;
	top: 25px; right: 25px;
	z-index: 10;
	/* dimensionnement des icônes */
	width: 22px;
	height: 22px;
	text-indent: -9999px;
	border:0 none;
	/* placez l'opacité à 1 si vous souhaitez voir les commandes */
	opacity: 0;
	/* préparation de transition sur opacicty et right */
	transition: opacity 1s, right 1s;
}
/* on décale play légèrement sur la gauche */
.play { right: 55px; cursor: default; }
 
/* création de l'icône pause avec 2 pseudos éléments */
.pause:after,
.pause:before {
	position: absolute;
	display: block;
	content: " ";
	top:0;
	width:38%;
	height: 22px;
	background: #fff;
	background: rgba(255,255,255,0.5);
}
.pause:after { right:0; }
.pause:before {	left:0; }
 
/* création de l'icône play avec des bordures */
.play {
	width: 1px; 
	height: 1px; 
	/* les transparentes forment la flèche */
	border-top: 10px solid transparent;
	border-bottom: 10px solid transparent;
	border-left: 20px solid #fff; 
	border-left: 20px solid rgba(255,255,255,0.5); 
	/* renseignez 1 pour voir l'icône de suite */
	opacity: 0;
}
 
/* apparition du bouton pause au survole */
/* apparition des boutons au focus */
#slideshow:hover .pause,
.play_commands:focus {
	opacity: 1;
	outline: none;
}

/* stopper les animation */
.sl_command:target ~ #slideshow .slider,
.sl_command:target ~ #slideshow figcaption,
.sl_command:target ~ #slideshow #timeline,
.sl_command:target ~ #slideshow .dots_commands li:first-child a:after {
	animation-play-state: paused;
}
 
/* redémarrer les animations */
#sl_play:target ~ #slideshow .slider,
#sl_play:target ~ #slideshow figcaption,
#sl_play:target ~ #slideshow #timeline,
#sl_play:target ~ #slideshow .dots_commands li:first-child a:after {
	animation-play-state: running;
}
 
/* switch entre les boutons */
.sl_command:target ~ #slideshow .pause 		{ opacity:0; }
#sl_play:target ~ #slideshow:hover .pause,
#sl_play:target ~ #slideshow .pause:focus 	{ opacity:1; }
.sl_command:target ~ #slideshow .play 		{ opacity:1; right: 25px; cursor: pointer; }
#sl_play:target ~ #slideshow .play 			{ opacity:0; right: 55px; cursor: default; }

<a class="commands prev commands1" href="#sl_i4" title="Aller à la dernière slide">&lt;</a>
<a class="commands next commands1" href="#sl_i2" title="Aller à la 2ème slide">&gt;</a>
<a class="commands prev commands2" href="#sl_i1" title="Aller à la 1ère slide">&lt;</a>
<a class="commands next commands2" href="#sl_i3" title="Aller à la 3ème slide">&gt;</a>
<a class="commands prev commands3" href="#sl_i2" title="Aller à la 2ème slide">&lt;</a>
<a class="commands next commands3" href="#sl_i4" title="Aller à la 4ème slide">&gt;</a>
<a class="commands prev commands4" href="#sl_i3" title="Aller à la 3ème slide">&lt;</a>
<a class="commands next commands4" href="#sl_i1" title="Aller à la 1ère slide">&gt;</a>

#slideshow .commands {
	position: absolute;
	top: 45%;
	padding: 5px 13px;
	border-bottom:0;
	font-size: 1.3em;
	color: #aaa;
	text-decoration:none;
	background-color: #eee;
	background-image: linear-gradient(#fff,#ddd);
	text-shadow: 0 0 1px #aaa;
	border-radius: 50%;
	box-shadow: 1px 1px 2px rgba(0,0,0,0.2);
}
 
#slideshow .prev { left: -48px; }
#slideshow .next { right: -48px; }
 
#slideshow .commands { display:none; }
#slideshow .commands1 {	display: block; }

#slideshow .c_slider {
	position: absolute;
	left:0; top:0;
	width: 400%;
	height: 310px;
	/* multiple background */
	background: url(img/dummy-640x310-1.jpg) 0 0 no-repeat,
	            url(img/dummy-640x310-2.jpg) 640px 0 no-repeat,
	            url(img/dummy-640x310-3.jpg) 1280px 0 no-repeat,
	            url(img/dummy-640x310-4.jpg) 1920px 0 no-repeat;
	transition: background 1s;
}

/* on cache le slider */
.sl_i:target ~ #slideshow .slider									{ visibility: hidden }
/* on planque la 1ère pastille (cf. bonux suivant) */
.sl_i:target ~ #slideshow .dots_commands li:first-child a:after		{ display:none; }
/* pour afficher la 2ème pastille (cf. bonux suivant) */
.sl_i:target ~ #slideshow .dots_commands li:first-child a:before	{ display:block; }
 
/* lorsque on cible le premier slider */
/* on cache tous les "précédent" et "suivant" */
#sl_i1:target ~ #slideshow .commands								{ display: none; }
/* on affiche seulement deux flèches */
#sl_i1:target ~ #slideshow .commands1								{ display: block; }
/* correspond au décalage des images */
#sl_i1:target ~ #slideshow .c_slider								{ background-position: 0 0, 640px 0, 1280px 0, 1920px 0; }
/* on place la pastille tout à gauche */
#sl_i1:target ~ #slideshow .dots_commands li:first-child a:before	{ left:0; }
 
/* même procédé lorsqu'on cible le second slide */
#sl_i2:target ~ #slideshow .commands								{ display: none; }
#sl_i2:target ~ #slideshow .commands2								{ display: block; }
#sl_i2:target ~ #slideshow .c_slider								{ background-position: -640px 0, 0 0, 640px 0, 1280px 0; }
#sl_i2:target ~ #slideshow .dots_commands li:first-child a:before	{ left:18px; }
 
/* puis le 3ème */
#sl_i3:target ~ #slideshow .commands								{ display: none; }
#sl_i3:target ~ #slideshow .commands3								{ display: block; }
#sl_i3:target ~ #slideshow .c_slider								{ background-position: -1280px 0, -640px 0, 0 0, 640px 0; }
#sl_i3:target ~ #slideshow .dots_commands li:first-child a:before	{ left:36px; }
 
/* et enfin le 4ème */
#sl_i4:target ~ #slideshow .commands								{ display: none; }
#sl_i4:target ~ #slideshow .commands4								{ display: block; }
#sl_i4:target ~ #slideshow .c_slider								{ background-position: -1920px 0, -1280px 0, -640px 0, 0 0; }
#sl_i4:target ~ #slideshow .dots_commands li:first-child a:before	{ left:54px; }

.dots_commands  {
	padding:0;
	margin:32px 0 0;
	text-align: center;
}
.dots_commands li {
	display: inline;
	padding:0; margin:0;
}
.dots_commands a {
	position: relative;
	display: inline-block;
	height:8px; width: 8px;
	margin: -50 5px;
	text-indent: -9999px;
	background: #fff;
 
	border-radius: 50%;
	box-shadow: 0 1px 2px rgba(0,0,0,0.55) inset;

}
/* quelques styles au focus */
.dots_commands a:focus { 
	outline: none;
	background: orange;
}
.dots_commands li:first-child a { z-index: 25; }

/* on style after et before, on utilisera les deux */
.dots_commands li:first-child a:after,
.dots_commands li:first-child a:before {
	position: absolute;
	top: -0; left: 0;
	content: " ";
	width: 8px; height: 8px;
	background: #bd9b83;
	z-index:20;

	border-radius: 50%;
	box-shadow: 0 1px 2px rgba(0,0,0,0.55) inset;
}
/* on anime "after" */
.dots_commands li:first-child a:after {
	animation: dotser 32s infinite;
}
/* on cache "before", on l'utilise uniquement au clic (cf. bonux précédent) */
.dots_commands li:first-child a:before { display:none; }
 
/* c'est parti pour l'animation ! */
@keyframes dotser {
	0%, 100% 	{ opacity: 1; left: 0; 		}
 		
	20%			{ opacity: 1; left: 0;		}
	22%			{ opacity: 0; left: 0;		}
	23%			{ opacity: 0; left: 18px;	}
	25%			{ opacity: 1; left: 18px;	}
 		
	45%			{ opacity: 1; left: 18px;	}
	47%			{ opacity: 0; left: 18px;	}
	48%			{ opacity: 0; left: 36px;	}
	50%			{ opacity: 1; left: 36px;	}
 		
	70%			{ opacity: 1; left: 36px;	}
	72%			{ opacity: 0; left: 36px;	}
	73%			{ opacity: 0; left: 54px;	}
	75%			{ opacity: 1; left: 54px;	}
 		
	95%			{ opacity: 1; left: 54px;	}
	97%			{ opacity: 0; left: 54px;	}
	98%			{ opacity: 0; left: 0;	}
}

#banner2 {
	background-color: white;
	display: block;
	width: 100%;
	margin-left: 0px;
	top: 370px;
	left: -2;
	height: 230px;
	float: left;
	font-family: Liberation sans;
}

#hospitalier {
	float: left;
	margin-top: 50px;
	margin-left: 10%;
}

#hospitaliertxt {
	position: absolute;
	margin-top: 50px;
	margin-left: -160px;
	color: white;
	text-decoration: none;
	text-shadow: 0.1em 0.1em 0.2em black;
	font-weight: bold;
}

#industrialisation {
	float: left;
	margin-top: 50px;
	margin-left: 15%;
}

#industrialisationtxt {
	position: absolute;
	margin-top: 50px;
	margin-left: -170px;
	color: white;
	text-decoration: none;
	text-shadow: 0.1em 0.1em 0.2em black;
	font-weight: bold;
}

#habitat {
	float: left;
	margin-top: -150px;
	margin-left: 70%;
}

#habitattxt {
	position: absolute;
	margin-top: 50px;
	margin-left: -160px;
	text-decoration: none;
	color: white; text-shadow: black 0.1em 0.1em 0.2em;
	font-weight: bold;
}

#titre {
	float: left;
	margin-top: 10px;
	margin-left: 30%;
	color: black;
	position: absolute;
	text-decoration: bold;
	font-weight: bold;
}

#banner3 {
	background-color: white;
	width: 100%;
	height: 150px;
	margin-top: 300px;
	left: 0px;
	background-color: #EFF0F6;
}

#normel {
	text-align: left;
	font-family: Liberation sans;
	margin-left: 100px;
}

#apropos2 {
	text-align: left;
	font-family: Liberation sans;
	margin-left: 600px;
	margin-top: -100px;
}

#suiveznous {
	float: right;
	text-align: left;
	font-family: Liberation sans;
	margin-right: 100px;
	margin-top: -100px;
}

#apropostxt {
	text-decoration: underline;
	color: #008EC8;
}

#trait2 {
	float: left;
    margin-top: 0px;
	margin-left: -3px;
    color: black;
    width: 100%; 
    border: 1px dashed :#000;
}

#geo {
	height: 15px;
	width: 15px;
}

#tel {
	height: 15px;
	width: 15px;
}

#txt {
	font-size: 15px;
	font-family: Liberation sans;
}

</style>