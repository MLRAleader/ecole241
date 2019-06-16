<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title> e-SHOPGABON magasins</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/eCom/style/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="/Site e-mbolo2_@/style/style.responsive.css" media="all">


   	<script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>


</head>
<body>
<div id="art-main">
<header class="art-header">


    <div class="art-shapes">            </div>
<h1 class="art-headline" data-left="1.33%">
    <a href="#">Site IT-Service</a></h1>



<div class="art-textblock art-object227400126" data-left="97.5%">
    <form class="art-search" name="Search" action="javascript:void(0)">
    <input type="text" value="">
    <input type="submit" value="Search" name="search" class="art-search-button">
</form>
</div>
<nav class="art-nav">
    <ul class="art-hmenu">
		<li><a href="../acceuil.php" class="active">Acceuil</a></li>
		<li><a href="../magasins.php">Magasins</a></li>
		<li><a href="../nos-produits.php">Nos produits</a></li>
		<li><a href="../nous-ecrire.php">Nous &eacute;crire</a></li>
	</ul> 
    </nav>
</header>
<div class="art-sheet clearfix">
            <div class="art-layout-wrapper">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1"><div class="art-vmenublock clearfix">
        <div class="art-vmenublockheader">
            <h3 class="t">e-SHOPGABON</h3>
        </div>
        <div class="art-vmenublockcontent">
	<ul class="art-vmenu">
		<li><a href="../acceuil.php" class="active">Acceuil</a></li>
		<li><a href="../magasins.php">Magasins</a></li>
		<li><a href="../nos-produits.php">Nos produits</a></li>
		<li><a href="../nous-ecrire.php">Nous &eacute;crire</a></li>
	</ul>

                
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">La nouvelle nike</h3>
        </div>
        <div class="art-blockcontent"><p><img width="170" height="170" alt="" class="art-lightbox" src="../images/ch5.jpg"><br></p><p>
 
</p></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">ESCARPINS</h3>
        </div>
        <div class="art-blockcontent"><p><img width="173" height="119" alt="" class="art-lightbox" src="../images/chaussurefemme.jpg"><br></p></div>
		
		
</div></div>			
							
						<!--Zone Image homme premiere ligne-->
						<?php

session_start();
//Teste pour savoir si on a cliquer sur le bouton "Entrez!!!"
	
	$user='rick';
	$passworddeladmin='000';
	
	if (isset($_POST['submit'])) {
		
		$username=$_POST['username'];
		$password=$_POST['password'];

		if ($username && $password) {
			
		if($username==$user && $password==$passworddeladmin){

			$_SESSION['username']=$username;
			header('Location:admin.php');
			
		}else{
			echo '<center><h3 class="avertir"><link rel="stylesheet" type="text/css" href="../style/bootstrap.css">Vous n\'&ecirc;tes pas autoris&eacute</center></h3>';
		}

		}else{

			echo '<center><h3 class="avertir"><link rel="stylesheet" type="text/css" href="../style/bootstrap.css">Veuillez remplir tout les champs</center></h3>';
		}
	}
?>



<link rel="stylesheet" type="text/css" href="../style/bootstrap.css">
<center><h1>Zone reserv&eacute; &agrave; l'administrateur</h1></center>
<center>
	<form action="" method="post"> 

		<h3>Pseudo:</h3><input type="text" name="username"/><br>
		<h3>Mot de passe:</h3><input type="text" name="password"/><br>
		<input type="submit" value="Entrez!!!" name="submit"/><br>
	</form>
</center>

						  
						<!--Zone Image fin-->
					
                        <div class="art-layout-cell art-content">
						
						
						
                   	  </div>
                </div>
            </div><footer class="art-footer">
<p><a href="#">E-Food</a> | <a href="#"><span style="color: rgb(234, 233, 153);">E-School<span style="color: #E2341D;"></span></span></a><a href="#"><span style="text-shadow: rgba(255, 255, 255, 0.792969) 1.4px 1.4px 0px, rgba(23, 23, 23, 0.496094) -1.4px -1.4px 0px; color: rgb(139, 143, 66);"></span></a></p>
<p>Copyright IT-Service &copy; 2016. All Rights Reserved.</p>
</footer>
</body>
</html>