<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<center>
<h1> Cadastrar Time </h1> 
<form method="POST" action="cadastrar_action.php">
  <div class="col-md-4">
    <label for="exampleInputEmail1" class="form-label">Nome: </label>
    <input type="text" name ="nome_time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    <br>
   
  </div>
  <div class="col-md-4">
    <label for="exampleInputPassword1" class="form-label">Nome do tecnico:</label>
    <input type="text" name ="nome_tecnico"   class="form-control" id="exampleInputPassword1">
  </div>
  <br>
  <div class="col-md-4">
    <label for="exampleInputPassword1" class="form-label">Capitão:</label>
    <input type="text" name ="capitao"  class="form-control" id="exampleInputPassword1">
  </div>
  <br>
  <br>
  <button type="submit" class="btn btn-primary"> Enviar </button>
</form> </center>