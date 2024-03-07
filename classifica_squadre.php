<?php

// Squadra 1

$validate = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {




    $squadra1 = htmlentities($_POST['squadra1'], ENT_QUOTES, 'UTF-8');

    if (!is_string($squadra1) || strlen($squadra1) < 3) {

        $validate = "Errore ";
    }

    $vinte1 = filter_input(INPUT_POST, 'vinte1', FILTER_VALIDATE_INT);


    if ($vinte1 === false) {

        $validate = "Errore";
    }

    $pareggiate1 =  filter_input(INPUT_POST, 'pareggiate1', FILTER_VALIDATE_INT);

    if ($pareggiate1 === false) {

        $validate = "Errore";
    }


    $perse1 = filter_input(INPUT_POST, 'perse1', FILTER_VALIDATE_INT);

    if ($perse1 === false) {

        $validate = "Errore";
    }

    // Squadra 2


    $squadra2 = htmlentities($_POST['squadra2'], ENT_QUOTES, 'UTF-8');

    if (!is_string($squadra2) || strlen($squadra2) < 3) {

        $validate = "Errore";
    }

    $vinte2 = filter_input(INPUT_POST, 'vinte2', FILTER_VALIDATE_INT);

    if ($vinte2 === false) {

        $validate = "Errore";
    }

    $pareggiate2 = filter_input(INPUT_POST, 'pareggiate2', FILTER_VALIDATE_INT);

    if ($pareggiate2 === false) {

        $validate = "Errore";
    }

    $perse2 = filter_input(INPUT_POST, 'perse2', FILTER_VALIDATE_INT);


    if ($perse2 === false) {

        $validate = "Errore ";
    }
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Algoritmo Classifica Squadre Di Calcio</title>
</head>

<body>



    <div class="row">
        <div class="col-12">
            <p class="fst-italic fw-normal text-center">

                Legenda:<br>

                Le partite vinte valgono <b>3</b> punti<br>


                Le partite pareggiate valgono <b>1</b> punto
            </p>

        </div>
    </div>
    <div class="container">



        <h3 class="text-center">Classifica Squadre</h3>

        <form method="POST">
            <div class="row gy-4 mb-4 text-start justify-content-center">
                <div class="col-10 col-md-5 mt-5">



                    <!-- PRIMO INPUT Roma -->

                    <h4>Squadra 1</h4>

                    <label for="squadra1" class="mb-2">Nome Squadra </label>
                    <input type="text" class="mb-2 form-control" name="squadra1" value="<?= $squadra1 ?? '' ?>"> <br>


                    <!-- LE VINTE VALGONO 3 -->

                    <label for="vinte1" class="mb-2">Numero di partite vinte</label>
                    <input type="number" class="mb-2 form-control" name="vinte1"> <br>


                    <!-- LE PAREGGIATE VALGONO 1 -->

                    <label for="pareggiate1" class="mb-2">Numero di partite pareggiate</label>
                    <input type="number" class="mb-2 form-control" name="pareggiate1"> <br>



                    <label for="perse1" class="mb-2">Numero di partite perse </label>
                    <input type="number" class="mb-2 form-control" name="perse1"> <br>





                </div>


                <div class="col-10 col-md-5 mt-5">


                    <h4>Squadra 2</h4>


                    <label for="squadra2" class="mb-2">Nome Squadra </label>
                    <input type="text" class="mb-2 form-control" name="squadra2"> <br>


                    <label for="vinte2" class="mb-2">Numero di partite vinte</label>
                    <input type="number" class="mb-2 form-control" name="vinte2"> <br>


                    <label for="pareggiate2" class="mb-2">Numero di partite pareggiate</label>
                    <input type="number" class="mb-2 form-control" name="pareggiate2"> <br>



                    <label for="perse2" class="mb-2">Numero di partite perse </label>
                    <input type="number" class="mb-2 form-control" name="perse2"> <br>





                </div>


                <p class="text-danger mt-1 text-center"><?= $validate ?></p>


                <button type="submit" class="col-4 btn btn-primary">INVIA</button>



            </div>


        </form>
    </div>


    <hr>



</body>

</html>

<?php

if ($validate == '' && $_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($squadra1 === $squadra1 || $squadra2 === $squadra2) {



        $vinte1 = $vinte1;


        $result1 = $vinte1 * 3 + $pareggiate1;


        $vinte2 = $vinte2;


        $result2 = $vinte2 * 3 + $pareggiate2;


        if ($vinte1 != $vinte2 || $pareggiate1 != $pareggiate2) {
            $numeroPartiteSquadre = "Le squadre hanno giocato un numero di partite diverso !";
        }



?>
        <div class="d-flex justify-content-center">
            <div class="border col-2 col pt-3 pb-3">
                <h6>Nome Squadra 1 : "<?= $squadra1 ?>"</h6>
                <h6>Partite Vinte : "<?= $vinte1 ?>"</h6>
                <h6>Partite Pareggiate : "<?= $pareggiate1 ?>"</h6>


            </div>

            <div class="border col-2 col pt-3 pb-3">
                <h6>Nome Squadra 2 : "<?= $squadra2 ?>"</h6>
                <h6>Partite Vinte : "<?= $vinte2 ?>"</h6>
                <h6>Partite Pareggiate : "<?= $pareggiate2 ?>"</h6>
            </div>


            <div style="border: 1px solid red;" class="col-2 col">

                <h6 class="border border-danger px-3">Output</h6>


                <div class="px-3">
                    <h6>Classifica</h6>
                </div>

                <div class="px-3 d-flex">
                    <h6> <?= $squadra1 ?> = </h6> <span class="px-2"> <b><?= $result1 ?> </b> </span>
                </div>

                <div class="px-3 d-flex">
                    <h6> <?= $squadra2 ?> = </h6> <span class="px-2"><b> <?= $result2 ?></b> </span>
                </div>

                <div class="px-3 d-flex">
                    <h6> <?= $numeroPartiteSquadre ?></span>
                </div>

            </div>


        </div>


<?php



    }
}
?>