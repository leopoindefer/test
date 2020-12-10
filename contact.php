<html>

	<head>
		
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="shop.css">		
		<title>Normel - Accueil</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/icône.png" />
		<meta name="description" content="" >
		
	</head>

<body>

<div id="banner2" class="Degrade">

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

    <img src="images/logo2.png" id="logo"/>

    <div id="menu">
		<ul>
			<li class="menuaccueil" ><a href="index">Accueil</a></li>
			<li class="menuactualite" ><a href="actualites.php">Actualités</a></li>
        	<li class="menuapropos" ><a href="apropos">A propos</a></li>
			<li class="menucontact" ><a><font id="blue">Contact</font></a></li>
		</ul>
	</div>
</div>

<footer>
</footer>

</body>

</html>

<style type="text/css">

html {
    background-image: url(images/fd.png);
	height: 100%
}

body {
	margin-left: 0;
	margin-top: 0;
	margin-right: 0;
	height: 100%;
}

#banner {
	display: block;
	width: 100%;
	position: absolute;
	margin-left: 0px;
	top: 0;
	overflow: hidden;
	height: 59px;
	float: left;
	font-family: Liberation sans;
	font-size: 20px;
}

#logo {
    position: absolute;
    margin-top: 10px;
    margin-left: -550px;
    float: left;
    height: 40px;
    width: 135px;
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
	margin-left: 0px;
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
	background-color: rgba(0, 0, 0, 0);
	padding-top: 0px;
}

#menu ul li a:hover {
	color: #008EC8;
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

#banner2 {
	background-color: rgba(0, 0, 0, 0.0);
	display: block;
	width: 100%;
	margin-left: 0px;
	margin-top: 200px;
	left: -2;
	height: 260px;
	float: left;
	font-family: Liberation sans;
}

.Degrade {
background-image:linear-gradient(rgba(0, 0, 0, 0), #EFF0F6);
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
	text-shadow: 0.1em 0.1em 0.1em white;
}

#banner3 {
	position: relative;
	float: left;
	width: 100%;
	height: 150px;
	margin-top: 0px;
	left: 0px;
	background-color: #EFF0F6;
}

#normel {
	text-align: left;
	font-family: Liberation sans;
	margin-left: 100px;
    color: black;
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
    color: black;
}

#apropostxt {
	text-decoration: underline;
	color: black;
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