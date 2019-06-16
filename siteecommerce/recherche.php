

    


<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>Recherche</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="./style/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="../style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>

	

</head>
<body>
	<!--La ou j'ai inséré la page de la fonction-->
 <?php

    include('functionSearch.php');
 ?>

<div id="art-main">
<header class="art-header">


    <div class="art-shapes">

            </div>
<h1 class="art-headline" data-left="1.33%">
    <a href="#">Site IT-Service</a>
</h1>



<div class="art-textblock art-object227400126" data-left="97.5%">
    <form class="art-search" method="post">
        <input type="text" name="Search" placeholder="Votre mot clé de recherche...">
        <input type="submit" value="Search" name="submit" class="art-search-button" placeholder="Votre">
    </form>
</div>

<!--Menu horizontal-->
<nav class="art-nav">
    <ul class="art-hmenu">
		<li><a href="acceuil.php" class="active">Acceuil</a></li>
		<li><a href="nos-produits.php">Boutique</a></li>
		<li><a href="nous-ecrire.php">Nous écrire</a></li>
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
		
		<!--Menu vertical-->
        <div class="art-vmenublockcontent">
			<ul class="art-vmenu">
				<li><a href="acceuil.php" class="active">Acceuil</a></li>
				<li><a href="nos-produits.php">Boutique</a></li>
				<li><a href="nous-ecrire.php">Nous écrire</a></li>
			</ul>  
        </div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">La nouvelle nike</h3>
        </div>
        <div class="art-blockcontent"><p><img width="170" height="170" alt="" class="art-lightbox" src="images/ch5.jpg"><br></p><p>
 
</p></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">ESCARPINS</h3>
        </div>
        <div class="art-blockcontent"><p><img width="173" height="119" alt="" class="art-lightbox" src="images/chaussurefemme.jpg"><br></p></div>
</div></div>
                        <div class="art-layout-cell art-content"><article class="art-post art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader"><span class="art-postheadericon">Résultat de recherche</span></h2>
                                    </div>

                                     <?php

							            try {

							                    $db=new PDO('mysql:host=localhost;dbname=_image','root','');
							                    
							                } catch (Exception $e) {

							                    echo '<center><h3 class="avertir"><link rel="stylesheet" type="text/css" href="../style/bootstrap.css">Une erreur est survenu</center></h3>';
							                    die();
							                }
									      if (isset($_POST['submit']) ){
									        
									        $Search=mysql_real_escape_string(htmlspecialchars(trim($_POST['Search'])));

									        if (empty($Search)) {
									            
									            echo "<ul class='phpDelapartieRecherche'><li>Remplire le champ de recherche!</li></ul>";
									        }
									        elseif (strlen($Search)==1) {
									            
									           echo "<ul class='phpDelapartieRecherche'><li>Mot de recherche trop court!</li></ul>";
									        }
									        else{

									            ?>
									            <!--HTML de inséré-->


									             <!--HTML de inséré-->

									            <?php
									            //results($Search);
									           results($Search);
									        }
									    }


   									 ?>
                                  

                    </div>
                </div>
            </div><footer class="art-footer">
<p><a href="#">E-Food</a> | <a href="#"><span style="color: rgb(234, 233, 153);">E-School<span style="color: #E2341D;"></span></span></a><a href="#"><span style="text-shadow: rgba(255, 255, 255, 0.792969) 1.4px 1.4px 0px, rgba(23, 23, 23, 0.496094) -1.4px -1.4px 0px; color: rgb(139, 143, 66);"></span></a></p>
<p>Copyright IT-Service © 2016. All Rights Reserved.</p>
</footer>
    


</body></html>