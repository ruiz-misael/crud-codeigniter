<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen, print" href="http://localhost/codeigniter/assets//css/bootstrap.css">
    <title>Flujo de Trabajo</title>

    <div class="container" id="app">
    <center class="my-3"><h3>Flujo de Trabajo</h3></center> 
    <hr>
  
    <div class="d-flex justify-content-between">  
    <div class="col-lg-3"><label>Objetivo</label></div>
            <div class="col-lg-3"><label>Detalle</label></div>
            <div class="col-lg-2"><label>Fecha</label></div>
            <div class="col-lg-2"><label>Estatus</label></div>
            <div class="col-lg-2"><label>Opciones</label></div>
    </div>         
  
    
    </div>

    
</head>
<body>
<hr>
<br>
<script src="http://localhost/codeigniter/assets/js/jquery.js"></script>
<script>
    $(document).ready(function(){  
        $("#app").append(`
        <div class="d-flex justify-content-between">  
    <div class="col-lg-3"><label>Objetivo</label></div>
            <div class="col-lg-3"><label>Detalle</label></div>
            <div class="col-lg-2"><label>Fecha</label></div>
            <div class="col-lg-2"><label>Estatus</label></div>
            <div class="col-lg-2"><label>Opciones</label></div>
    </div>   
        
        
        `);



      });
</script>
</body>
</html>