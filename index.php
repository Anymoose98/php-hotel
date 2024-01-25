<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
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
    <!-- Parte iniziale con titolo -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-3">
                <h1>Lista hotels</h1>
            </div>

            <!-- Inizio table con parti default -->
            <table class="table table-striped">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th class="text-center" scope="col">voto</th>
                        <th class="text-center" scope="col">Distanza dal centro</th>
                        <th class="text-center" scope="col">Parcheggio</th>
                    </tr>
                </thead>

                <!-- Inizio corpo centrale con for each su Hotels -->
               <tbody>
                <?php
                    foreach($hotels as $hotels){

                    // if & else per trasformare parking da true in si e false in no
                    if($hotels["parking"] === true){
                        $hotels["parking"] = "si";
                    }
                    else{
                        $hotels["parking"] = "no";
                    }

                    // struttura base per il foreach che riciclerà
                    echo
                    '<tr class="my-5">
                        <th scope="col">'.$hotels["name"].'</th>
                        <th scope="col">'.$hotels["description"].'</th>
                        <th class="text-center" scope="col">'.$hotels["vote"].'</th>
                        <th class="text-center" scope="col">'.$hotels["distance_to_center"].'km</th>
                        <th class="text-center" scope="col">'.$hotels["parking"].'</th>
                    </tr>';
                    }
                ?>
               </tbody>
            </table>
        </div>
    </div>
</body>
</html>