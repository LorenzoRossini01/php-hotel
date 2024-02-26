<?php 

include('./data.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Hotels</title>

    <!-- font awersome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h2>Filtri</h2>

        
        <form method="get">
            <div class="input-group">
            <input type="range" name="parking_filter" id="parking-filter" min="1" max="3" step="1" class="form-range" >
                <label for="parking-filter" class="form-label">Parcheggio - Si/No</label>
            </div>

            <div class="input-group">
                <input type="range" name="vote_filter" id="vote-filter" min="1" max="6" step="1" class="form-range" >
                <label for="vote-filter" class="form-label">Voti da 1 a 5 - sposta il cursore a sinitra per togliere il filtro</label>
            </div>
            <button  class="btn btn-primary">Filter</button>
        </form>


        <h2>Lista Hotel</h2>


        <table class="table table-striped table-hover ">
            <thead>
                <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto</th>
                <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($filter_hotels as $hotel):?>
                <tr>
                <th scope="row"><?= $hotel['name']?></th>
                <td><?= $hotel['description']?></td>
                <td><?= $hotel['parking']?'si':'no'?></td>
                <td><?= $hotel['vote']. ' '?><i class="fa-solid fa-star fa-sm"></i></td>
                <td><?= $hotel['distance_to_center']?>km</td>
                </tr>
                <?php endforeach;?>

            </tbody>
        </table>

    </div>
</body>
</html>