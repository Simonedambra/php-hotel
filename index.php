<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

// foreach ($hotels as $hotellist) {

//     foreach ($hotellist as $key => $hotel) {
//         echo $key;
//         echo ' ';
//         echo $hotel;
//         echo '<br>';
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <table class="table">
        <thead>
            <tr>
                <?php foreach ($hotels[0] as $key => $value) {
                    echo '<th scope="row">';
                    echo $key;
                    echo '</th>';
                } ?>
            </tr>
        </thead>
        <tbody class="table-group-divider">

            <?php foreach ($hotels as $key => $value) {
                echo '<tr>';
                echo '<td>';
                echo ($value['name']);
                echo '</td>';
                echo '<td>';
                echo ($value['description']);
                echo '</td>';
                echo '<td>';
                echo ($value['parking']);
                echo '</td>';
                echo '<td>';
                echo ($value['vote']);
                echo '</td>';
                echo '<td>';
                echo ($value['distance_to_center']);
                echo '</td>';

                echo '</tr>';
            } ?>


</body>

</html>