<?php

$apprenants = array(
    1 => array('prenom' => 'Rick', 'nom' => 'MOUWENDZI','age' =>25,'Profil :'=>'https://mlraleader.github.io/ecole241/profil/index.html'),
    2 => array('prenom' => 'Turn', 'nom' => 'BANAKIN', 'age' =>26, 'Profil :'),
    3 => array('prenom' => 'Falana', 'nom' => 'MAGUEDI', 'age' =>19,'Profil :'=>'https://falanafelicia.github.io/ecole241/profil/index.html'),
    4 => array('prenom' => 'Letitia', 'nom' => 'BITOME', 'age' =>24, 'Profil :'=>'https://nzebitome.github.io/ecole241/profil/'),
    5 => array('prenom' => 'Wilson', 'nom' => 'BOUMYS', 'age' =>28, 'Profil :'=>'https://jboumys.github.io/ecole241/profil/'),
    6 => array('prenom' => 'Axel', 'nom' => 'LEGANDZA', 'age' =>21, 'Profil :'=>'https://mlraleader.github.io/ecole241/profil/index.html'),
    7 => array('prenom' => 'Ivan', 'nom' => 'TCHITOMBI', 'age' =>23, 'Profil :'=>'https://iavich.github.io/ecole241/profil/'),
    8 => array('prenom' => 'Boris', 'nom' => 'BOUGNOU', 'age' =>30, 'Profil :'=>'https://ribelson.github.io/ecole241/profil/'),
    9 => array('prenom' => 'Billy', 'nom' => 'OBAME', 'age' =>29, 'Profil :'=>'https://light-int.github.io/ecole241/profil/index.html'),
    10 => array('prenom' => 'Ismael', 'nom' => 'NGOUA', 'age' =>25, 'Profil :'=>'https://ismael8.github.io/ecole241/profil/'),
    );



foreach( $apprenants as $firsKey => $firstValue) {
    echo "<hr>";
        echo "Apprenant n°:" . $firsKey . "<br>";

        foreach ( $firstValue as $secondKey=>$secondValue ) {
              echo $secondKey . "&nbsp;" . $secondValue ."<br>";
    }
}



?>
