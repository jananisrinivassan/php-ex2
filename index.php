<!DOCTYPE html>
<html>
<head>
    <title>House Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Classe avec attribut statique</h1>

<?php
// Include the House class
require_once 'House.php';

// Create houses
$house1 = new House(2021, 2, 80);
$house2 = new House(2022, 3, 100);
$house3 = new House(2023, 4 , 120);
?>

<table class="house-table">
    <tr>
        <th>#</th> 
        <th>Année</A></th> 
        <th>Nombre de chambres</th>
        <th>Surface</th>
    </tr>
    <tr>
        <td><?php echo $house1->getId(); ?></td>
        <td><?php echo $house1->getYearOfCreation(); ?></td>
        <td><?php echo $house1->getNumberOfBedrooms(); ?></td>
        <td><?php echo $house1->getSurfaceArea(); ?></td>
    </tr>
    <tr>
        <td><?php echo $house2->getId(); ?></td>
        <td><?php echo $house2->getYearOfCreation(); ?></td>
        <td><?php echo $house2->getNumberOfBedrooms(); ?></td>
        <td><?php echo $house2->getSurfaceArea(); ?></td>
    </tr>
    <tr>
        <td><?php echo $house3->getId(); ?></td>
        <td><?php echo $house3->getYearOfCreation(); ?></td>
        <td><?php echo $house3->getNumberOfBedrooms(); ?></td>
        <td><?php echo $house3->getSurfaceArea(); ?></td>
    </tr>
</table>

</body>
</html>