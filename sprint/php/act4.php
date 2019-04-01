<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oka Liste</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .link-style {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <?php
    $apprenants = array(
        1 => array('prenom' => 'Rick', 'nom' => 'MOUWENDZI', 'age' => 25, 'Profil' => 'https://mlraleader.github.io/ecole241/profil/index.html'),
        2 => array('prenom' => 'Turn', 'nom' => 'BANAKIN', 'age' => 26, 'Profil'),
        3 => array('prenom' => 'Falana', 'nom' => 'MAGUEDI', 'age' => 19, 'Profil' => 'https://falanafelicia.github.io/ecole241/profil/index.html'),
        4 => array('prenom' => 'Letitia', 'nom' => 'BITOME', 'age' => 24, 'Profil' => 'https://nzebitome.github.io/ecole241/profil/'),
        5 => array('prenom' => 'Wilson', 'nom' => 'BOUMYS', 'age' => 28, 'Profil' => 'https://jboumys.github.io/ecole241/profil/'),
        6 => array('prenom' => 'Axel', 'nom' => 'LEGANDZA', 'age' => 21, 'Profil' => 'https://mlraleader.github.io/ecole241/profil/index.html'),
        7 => array('prenom' => 'Ivan', 'nom' => 'TCHITOMBI', 'age' => 23, 'Profil' => 'https://iavich.github.io/ecole241/profil/'),
        8 => array('prenom' => 'Boris', 'nom' => 'BOUGNOU', 'age' => 30, 'Profil' => 'https://ribelson.github.io/ecole241/profil/'),
        9 => array('prenom' => 'Billy', 'nom' => 'OBAME', 'age' => 29, 'Profil' => 'https://light-int.github.io/ecole241/profil/index.html'),
        10 => array('prenom' => 'Ismael', 'nom' => 'NGOUA', 'age' => 25, 'Profil' => 'https://ismael8.github.io/ecole241/profil/'),
    );
    ?>
    <table class="table table-bordered">
        <!--Début tableau-->
        <thead>
            <caption>
                <h3>Liste des apprenants de la cohorte des développeurs</h3>
            </caption>
            <tr class="alert alert-primary">
                <th scope="col">#</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Profil</th>
            </tr>
        </thead>
        <tbody>
            <!--Corp de mon tablea-->
            <?php foreach ($apprenants as $key => $apprenant) : ?>
            <tr>
                <td><?php echo $key ?></td>
                <td><?php echo $apprenant['prenom']; ?></td>
                <td><?php echo $apprenant['nom']; ?></td>
                <td><?php echo $apprenant['age']; ?></td>
                <td><a href="<?php echo $apprenant['Profil']; ?>" target="_blank" style="text-decoration:none">Consulter</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <!--Fin corps du tableau-->

    </table>
    <!--Fin tableau-->
</body>

</html> 
