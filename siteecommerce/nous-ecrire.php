
<?php
if (isset($_post["envoi"])) {

$header="MIME-Version: 1.0\r\n";
$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="utf_8"'."\n";
$header.='Content-transfer-Encoding: 8bit';

$message='
	<html>
		<body>
			<div align="center">
				J\'ai envoiyé ce mail en php.
				</br>
				<img src="http://www.primfx.com/mailling/seperation.png"/>
			</div>
		</body>
	</html>
';

mail("mouwenlegan@gmail.com", "message", $message,$header);
	
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title>Nous écrire</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="/Site e-mbolo2_@/style/style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="/Site e-mbolo2_@/style/style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>

	

</head>
<body>
<div id="art-main">
<header class="art-header">


    <div class="art-shapes">

            </div>
<h1 class="art-headline" data-left="1.33%">
    <a href="#">Site IT-Service</a>
</h1>



<div class="art-textblock art-object227400126" data-left="97.5%">
    <form class="art-search" name="Search" action="javascript:void(0)">
    <input type="text" value="">
    <input type="submit" value="Search" name="search" class="art-search-button">
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
                                        <h2 class="art-postheader"><span class="art-postheadericon">Entrer vos coordonnées</span></h2>
                                    </div>
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><p><br></p></div>


</article>
                        <fieldset>
						<legend align="center"> <h2>
						
						 </h2> </legend>
						<form method="post" action="redirection.php">
							<table >
					
									<font size="+1"><p align="center"> Nous écrire : </p> </font>			
									<tr>
										<td> <font size="+1">  <label for="password">   Nom <span  style="color:#FF0000">*</span></label>  : </font></td>
										<td> <input class="champ" name="nom" placeholder="Entrez votre nom "  type="text" required/></td> 
									</tr>
									<tr>
										<td> <font size="+1">  <label for="email">  Courriel <span  style="color:#FF0000">*</span></label> : </font></td>
										<td> <input class="champ" name="email" placeholder="Entrez votre  email "  type="email" required/></td> 
									</tr>
									
							</table>			
													
						<div class="form-item form-item-warning" id="form-item-message">
							<label for="message" class="required">
								<font size="+1"><label for="message">  Message <span  style="color:#FF0000">*</span></label> </font>
								<span class="required"></span>
							</label>
<div class="field-wrapper">
						<textarea name="message" id="message" type="textarea" class="field-text" cols="52" rows="7" style="width:400px; height:150px;"></textarea>		
								
						<table>
						
						
						
							<tr>
								<td> <input class="bouton" type="submit" value="Envoyer" name="envoi" onClick="nous-ecrire.php" /></td>
						  	</tr>
						
						</table>				
							
						</form>
						
				 
					</fieldset>
					</div>
                    </div>
                </div>
            </div><footer class="art-footer">
<p><a href="#">E-Food</a> | <a href="#"><span style="color: rgb(234, 233, 153);">E-School<span style="color: #E2341D;"></span></span></a><a href="#"><span style="text-shadow: rgba(255, 255, 255, 0.792969) 1.4px 1.4px 0px, rgba(23, 23, 23, 0.496094) -1.4px -1.4px 0px; color: rgb(139, 143, 66);"></span></a></p>
<p>Copyright IT-Service © 2016. All Rights Reserved.</p>
</footer>
    


</body></html>