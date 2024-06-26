
<?php

session_start();

if(! isset ($_SESSION['usuario'])){

    echo'
        <script>
            alert("Por favor debes iniciar sesion");
            window.location = "index.php";
        </script>

    
    ';
 
    session_destroy();
    die();
    
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <title>CRUD</title>
    <style>
        body{
            background-color: #f7f6f6;
        }
        table thead{
            background-color: #0a4f70;
            color: white;
        }
    </style>
  </head>
  <body>

    <div class="container mt-4 shadow-lg p-3 mb-5 bg-body rounded">
        <button id = "btnCrear" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalArticulo">Crear</button>
        <table id="tablaArticulos" class="table mt-2 table-bordered table-striped">
                <thead>
                    <tr class="text-center">
                        <th>ID</th>
                        <th>Descripcion</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    
                </tbody>
        </table>
    </div>
   
    
   

    
   
    
    <div id="modalArticulo" class="modal fade"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="exampleModalLabel">Articulo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="descripcion" class="col-form-label"> Descripcion:</label>
                <input for="descripcion" type="text" class="form-control" autofocus>
              </div>
              <div class="mb-3">
                <label for="precio" class="col-form-label">Precio:</label>
                <input id="precio" type="number" class="form-control">
              </div>

              <div class="mb-3">
                <label for="stock" class="col-form-label">Stock:</label>
                <input id="stock" type="number" class="form-control">
              </div>
            
          </div>
          <div class="modal-footer">
            <button  id = "close"type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
        </div>
      </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
    <!-- JavaScript -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    </script>
   
    <script src="code.js"></script>
  </body>
</html>