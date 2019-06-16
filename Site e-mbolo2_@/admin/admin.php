<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.1.0.59861 -->
    <meta charset="utf-8">
    <title> e-SHOPGABON magasins</title>
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
		<li><a href="../nos-produits.php">Boutique</a></li>
		<li><a href="../nous-ecrire.php">Nous écrire</a></li>
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
		<li><a href="../nos-produits.php">Boutique</a></li>
		<li><a href="../nous-ecrire.php">Nous écrire</a></li>
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

session_start();//Appelleur de session.
?>


<link rel="stylesheet" type="text/css" href="/Site e-mbolo2_@/style/bootstrap.css">
		<center><h1>Bienvenue,<?php echo $_SESSION['username'];?></h1></center>
		<br/>
		<center>
			<ul class="actionAdmin">
				<li><a href="?action=add">Ajouter un produit</a></li>
				<li><a href="?action=modifyanddelate">Modifier/Supprimer un produit</a></li>
			</ul>
			<a  href="../index.php"><input type="submit" name="submit" value="Retour"></a>
		</center>




<?php

try {

	$con=new PDO('mysql:host=localhost;dbname=image','root','');
					
	} catch (Exception $e) {

		echo '<center><h3 class="avertir"><link rel="stylesheet" type="text/css" href="/Site e-mbolo2_@/style/bootstrap.css">Une erreur est survenu</center></h3>';
		die();
	}

if (isset($_SESSION['username'])){
	//Condition vérifiant si ya la session.
	
	if (isset($_GET['action'])){

		if ($_GET['action']=='add'){
			

			if (isset($_POST['submit']) ){

				$title=$_POST['title'];
				$description=$_POST['description'];
				$price=$_POST['price'];

				$image=addslashes($_FILES['image']['tmp_name']);
				$name=addslashes($_FILES['image']['name']);
				$image=file_get_contents($image);
				$image=base64_encode($image);
				
				
				
					
				if ( $title && $description && $price) {


						if (@getimagesize($_FILES['image']['tmp_name'])==FALSE) {


								echo '<center><h3 class="avertir"><link rel="stylesheet" type="text/css" href="/Site e-mbolo2_@/style/bootstrap.css">Veuillez entrer une image de type png,jpg ou jpeg.</center></h3>';

							}else{
								$image=false;
									echo '<center><h3 class="avertir"><link rel="stylesheet" type="text/css" href="../style/bootstrap.css">Veuillez entrer une image valide</center></h3>';
							}

							function saveimage($name,$image,$title,$description,$price){
							$con=mysql_connect("localhost","root","");
							mysql_select_db("image",$con);
							$qry="insert into images(name,image,title,description,price) values('$name','$image','$title','$description','$price')";
							$result=mysql_query($qry,$con);				
							header('Location:admin.php?action=add');
							if($result){
								echo "<br/>image uploaded<br/><br/>";
							}
							else{
								echo"<br/>aucune image n'a été téléchargé.";
								}
							}

							

			  }
			  saveimage($name,$image,$title,$description,$price);
			}	
			
		
		    
			
			?>

			<center>
				<form action="../nos-produits.php" method="post" enctype="multipart/form-data"> 
					<h3>Titre du produit:</h3><input type="text" name="title" required>
					<h3>Description du prouduit:</h3><textarea placeholder="Description de l'article" name="description" required></textarea>
					<h3>prix du produit:</h3><input type="text" name="price" required><br><br>
					<input type="file" name="image">
					<input type="submit" name="submit" value="Ajoutez!!!">
				</form>
			</center>
	<?php
		}
		elseif ($_GET['action']=='modifyanddelate') {
			$select=$con->prepare("SELECT * FROM images");
			$select->execute();

			while($s=$select->fetch(PDO::FETCH_OBJ)){

				echo $s->title.'<br>';
		?>
		<center>
			 <a href="?action=modify&amp;id=<?php echo $s->id; ?>">Modifier</a>
		     <a href="?action=delate&amp;id=<?php echo $s->id; ?>">Supprimer</a><br><br>
		</center>
		<?php
			}

			}
		

			elseif($_GET['action']=='modify'){


				$id=$_GET['id'];
				$select=$con->prepare("SELECT * FROM images WHERE id=$id");
			    $select->execute();

			    $data=$select->fetch(PDO::FETCH_OBJ);
				?>

				<center>
					<form action="" method="post"> 
						<h3>Titre du produit:</h3><input type="text" value="<?php echo $data->title;?>" name="title">
						<h3>Description du prouduit:</h3><textarea placeholder="Description de l'article" name="description"><?php echo $data->description;?></textarea>
						<h3>prix du produit:</h3><input type="text"  value="<?php echo $data->price;?>" name="price"><br>
						<input type="submit" name="submit" value="Modifiez!!!">
					</form>
				</center>

				<?php

				if(isset($_POST['submit'])){


				$title=$_POST['title'];
				$description=$_POST['description'];
				$price=$_POST['price'];

				$update=$con->prepare("UPDATE images SET title='$title',description='$description',price='$price' WHERE id='$id'");
				$update->execute();
				
				header('Location:admin.php?actionmodifyanddelate');
				}
			}
			elseif ($_GET['action']=='delate'){

				$id=$_GET['id'];

				$delate=$con->prepare("DELETE FROM images WHERE id=$id");
				$delate->execute();
			}else{echo "Une erreur s'est produite";}

			}
		}

		else{header('Location:../index.php');}	
?>


						  
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