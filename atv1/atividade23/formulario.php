<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../atividade23/css/form.css">
</head>
<body>





<form action="../atividade23/list.php" method="POST">
<div class="num1">
  <label id="label" class="col-sm-2 col-form-label">Digite o seu nome completo : </label>
  <div class="col-sm-10">
    <input type="name" name="nome">
  </div>
</div>


<div>
  <label id="label" class="col-sm-2 col-form-label">Digite a sua idade : </label>
  <div class="col-sm-10">
    <input type="number" name="idade">
  </div>
</div>
 

 <div>
  <label id="label" class="col-sm-2 col-form-label">email: </label>
  <div class="col-sm-10">
    <input type="text" name="email">
  </div>
</div>


<div>
  <label id="label" class="col-sm-2 col-form-label">Telefone : </label>
  <div class="col-sm-10">
    <input type="number" name="telefone">
  </div>
</div>
 



<div class="num5">
  <label id="label" class="col-sm-2 col-form-label">Cidade: </label>
  <div class="col-sm-10">
    <input type="" id="input"  name="cidade">
  </div>
</div>
 <button type="submit">Enviar</button> 


</form>






    
</body>
</html>