<!-- array di hotel -->
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- /bootstrap -->
</head>

<body>
    <!-- header -->
    <header>
        <h1 class="text-center mt-5 text-secondary">PHP Hotel</h1>
    </header>
    <!-- /header -->
    <!-- main -->
    <main class="col-12 col-md-8 mx-auto mt-4">
        <div class="hotel border border-5 rounded-3">
            <!-- tabella -->
            <table class="table table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <?php foreach ($hotels[0] as $key => $info) {
                            echo "<th scope='col'>$key</th>";
                        }; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($hotels as $hotel) {
                        // tr
                        echo "<tr>";
                        // conversione valore booleano in stringa
                        if ($hotel["parking"] === true) { //se parcheggio è true
                            $hotel["parking"] = "Yes"; //stampa la stringa yes
                        } else {
                            $hotel["parking"] = "No"; //stampa la stringa No
                        };
                        foreach ($hotel as $info) {
                            // td
                            echo "<td>$info</td>";
                            // td
                        };
                        echo "</tr>";
                        // tr
                    };
                    ?>
                </tbody>
            </table>
            <!-- /tabella -->
        </div>
    </main>
    <!-- /main -->
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- /bootstrap -->
</body>

</html>