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
    include('data.php');
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
                <td><?php echo $apprenant['age']; ?> ans</td>
                <td><a href="<?php echo $apprenant['Profil']; ?>" target="_blank" style="text-decoration:none">Consulter</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        <!--Fin corps du tableau-->
    </table>
    <!--Fin tableau-->
</body>

</html> 