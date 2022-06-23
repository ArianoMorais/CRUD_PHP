
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



<?php 

require 'config.php';

$lista = [  ]; 
$sql = $pdo -> query (" SELECT * FROM times_copa ");

if ($sql-> rowCount() > 0 ) {

    $lista = $sql -> fetchAll(PDO::FETCH_ASSOC);
} 

?> 
<center> <h1> Listagem de times </h1> </center> 










<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Lista de Times</h2>
					</div>
                    <div class="col-sm-6">
						<a href="cadastrar.php" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Adicionar novo time</span></a>				
					</div>
					<div class="col-sm-6">
						
										
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Time</th>
						<th>Tecnico</th>
                        <th>Capitão</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    				
					<tr>
                                    <?php 

                                        foreach($lista as $times): ?> 
                                        <tr>
                                            <td> <?= $times ['id']; ?> </td>
                                            <td> <?= $times ['nome_time']; ?> </td>
                                            <td> <?= $times ['nome_tecnico']; ?> </td>
                                            <td> <?= $times ['capitao']; ?> </td>
                                            <td>
                                            <a href="editar.php?id=<?=$times['id'];?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                            <a href="excluir.php?id=<?=$times['id'];?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                            </td>

                                        <?php endforeach; ?>
                    </tr> 
                </tbody>
            </table>                                                                                            
			
        </div>
    </div>
	
</body>
</html>