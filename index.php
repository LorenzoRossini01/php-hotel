<?php 
include(__DIR__.'/main/init.php');
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

        <div class="card p-3">
            <form method="get">
                <div class="form-check mb-3">
                <input type="checkbox" name="parking_filter" id="parking-filter"  class="form-check-input" 
                <?= $parking_filter ?'checked':''?>
                >
                    <label for="parking-filter" class="form-check-label">Con parcheggio </label>
                </div>

                <div class="input-group mb-3">
                    <input type="range" name="vote_filter" id="vote-filter" min="0" max="5" step="1" value="<?= $vote_filter? $vote_filter:0?>" class="form-range" >
                    <label for="vote-filter" class="form-label">Voti da 1 a 5 - sposta il cursore a sinitra per togliere il filtro</label>
                </div>
                <button  class="btn btn-primary">Filter</button>
            </form>
        </div>


        <h2>Lista Hotel</h2>

        <div class="card p-3">
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
                    <?php foreach($hotels as $hotel):?>
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

    </div>
</body>
</html>