<?php

function results($Search){


try {

   	$db=new PDO('mysql:host=localhost;dbname=image','root','');
                    
    } catch (Exception $e) {

     echo '<center><h3 class="avertir"><link rel="stylesheet" type="text/css" href="../style/bootstrap.css">Une erreur est survenu</center></h3>';
     die();
    }


	$where='';
	    

	$Search=preg_split('/[\s\-]/', $Search);

	$count_keywords=count($Search);

	foreach ($Search as $key => $value) {

		$where.="title LIKE '%$value%'";
		if ($key!=($count_keywords-1)) {
			
			$where .="AND"; 	
		}

	}


							
$select=$db->prepare("SELECT * FROM images");
$select->execute();

$s=$select->fetch(PDO::FETCH_OBJ);

	echo'<span id="ancre"><table class="zoom">
												<tr>
													<td>
														<a href="?img1"><img height="150" width="150" src="data:image;base64,'.$s->image.'"></a>
													</td>
												</tr>
												<tr>
													<td>
														<h4>'.$s->title.'</h4>
													</td>
												</tr>
												</tr>
													<td>
												       <h3>'.$s->description.'</h3>
												     </td>
												</tr>
												</tr>
													<td>
												       <h2>'.$s->price. ' Fcfa</h2>
												     </td>
												</tr>
											</table></span>';
			
		




	


	
	
	}			
									
	//else{
	  // echo "<ul class='phpDelapartieRecherche'><li>Pas de résultat trouvé!</li></ul>";
	//}



?>