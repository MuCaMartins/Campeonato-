<?php

    foreach ($dados as $d) {

        echo $d['nome'];
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <title>Página de cadastro</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <h1 class="page-header">Página de cadastro</h1>

                <form method="post" action="/salvar">

                    <div class="form-group">
                        <label for="nome">Estádio</label>
                        <input class="form-control" type="text" name="estadio" id="estadio" value="">
                    </div>

                    <div class="form-group">
                        <label for="patrocinador">Data</label>
                        <input class="form-control" type="date" name="date" value="">
                    </div>
                     <div class="form-group">
                    <label for="palavra">Time 1:</label>
                       <select name="time 1" id="time1">
                             <?php foreach($dados as $d) { ?>
                            <option value="<?=$d['id']?>"><?= $d['nome'] ?></option>
                             <?php } ?>
                          </select>
                          </div>
                            <div class="form-group">
                          <label for="palavra">Time 2:</label>
                         <select name="time2" id="time2">
                            <?php foreach($dados as $d) { ?>
                            <option value="<?=$d['id']?>"><?= $d['nome'] ?></option>
                            <?php } ?>

                            <div class="form-group">
                        <label for="gol1">Gols time 1</label>
                        <input class="form-control" type="text" name="gol1" value="">
                    </div>

                    <div class="form-group">
                        <label for="gol2">Gols time 2</label>
                        <input class="form-control" type="text" name="gol2" value="">
                    </div>

                          </select>
                          </div>
                    </form>





                    

                    <button class="btn btn-success btn-lg" type="">Enviar</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>