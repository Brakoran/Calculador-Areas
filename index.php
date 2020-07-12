<?php
    require('funciones/funcion.php');
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Calcula Pi!</title>
  </head>
  <body>

    <div class="container"><!--Creamos el contenedor fluid-->

        <div class="row"><!--Creamos nuestro primer (1) row------------->
        
            <div class="col-12 col-sm-12 my-5 d-flex justify-content-center"><!--Creamos nuestra primera (1) Columna-->

            <div class="card w-75 p-3"><!--Creamos la primer(1) card-->
                <div class="card-header">
                    Perimetro de un círculo.
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>La longitud de una circunferencia es igual a 2π por el radio.</p>

                        <img class="img ml-5 my-5" src="img/pc.png" alt="circulo">                            
                    
                    <form method="POST">
                        <div class="form-group row">
                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Radio:</label>
                            <div class="col-sm-10">
                                <input type="number" name="radioc" class="form-control w-50 p-3 form-control-lg" id="colFormLabelLg" placeholder="Ingrese el Radio">
                            </div>
                            <p>Perimetro:</p><p class="bg-success"><?php echo $perimetro;?></p> 
                            <p class="bg-warning"><?php  if(isset($_POST['submitc'])){echo $error;} ?></p> 

                        </div>
                        <div class="col-auto">
                            <button type="submit" name="submitc" class="btn btn-primary mb-2">Calcular</button>
                        </div>
                    </form>

                    <footer class="blockquote-footer">El valor de π (pi) nunca nunca cambia <cite title="Source Title">Recuerdalo!</cite></footer>
                    </blockquote>
                </div>
            </div><!--Cerramos la primer(1) card-->

            </div><!--Cerramos nuestra primera (1) Columna-->
        
        </div><!--Cerramos nuestro primer (1) row-->


        <div class="row"><!--Creamos nuestro segundo (2) row--------------->
        
        <div class="col-12 col-sm-12 my-5 d-flex justify-content-center"><!--Creamos nuestra segundo (2) Columna-->

        <div class="card w-75 p-3"><!--Creamos la segundo(2) card-->
            <div class="card-header">
                Area de un Rectangulo.
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p>El área del rectángulo es igual a la base por la altura.</p>

                    <img class="img ml-5 my-5" src="img/pr.png" alt="circulo">                            
                
                <form method="POST">
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Base:</label>
                        <div class="col-sm-10">
                            <input type="number" name="baser" class="form-control w-50 p-3 form-control-lg" id="colFormLabelLg" placeholder="Ingrese la base">
                        </div>
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Altura:</label>
                        <div class="col-sm-10">
                            <input type="number" name="alturar" class="form-control w-50 p-3 form-control-lg" id="colFormLabelLg" placeholder="Ingrese la altura">
                        </div>
                        <p>Area:</p><p class="bg-success"><?php echo $area;?></p> 
                        <p class="bg-warning"><?php  if(isset($_POST['submitr'])){echo $error;} ?></p> 

                    </div>
                    <div class="col-auto">
                        <button type="submit" name="submitr" class="btn btn-primary mb-2">Calcular</button>
                    </div>
                </form>

                <footer class="blockquote-footer">Que tiene uno o más ángulos rectos. <cite title="Source Title">Recuerdalo!</cite></footer>
                </blockquote>
            </div>
        </div><!--Cerramos la segundo(2) card-->

        </div><!--Cerramos nuestra segundo (2) Columna-->
    
    </div><!--Cerramos nuestro segundo (2) row-->


    <div class="row"><!--Creamos nuestro tercer (3) row--------------->
        
        <div class="col-12 col-sm-12 my-5 d-flex justify-content-center"><!--Creamos nuestra tercer (3) Columna-->

        <div class="card w-75 p-3"><!--Creamos la tercer(3) card-->
            <div class="card-header">
                Area de un Cuadrado.
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p>El área de un cuadrado es lado * lado</p>

                    <img class="img ml-5 my-5" src="img/pcua.png" alt="circulo">                            
                
                <form method="POST">
                    <div class="form-group row">
                        <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Lado:</label>
                        <div class="col-sm-10">
                            <input type="number" name="ladocu" class="form-control w-50 p-3 form-control-lg" id="colFormLabelLg" placeholder="Ingrese el lado">
                        </div>
                        <p>Area:</p><p class="bg-success"><?php echo $areac;?></p> 
                        <p class="bg-warning"><?php  if(isset($_POST['submitcu'])){echo $error;} ?></p> 

                    </div>
                    <div class="col-auto">
                        <button type="submit" name="submitcu" class="btn btn-primary mb-2">Calcular</button>
                    </div>
                </form>

                <footer class="blockquote-footer">Tiene los cuatro lados iguales<cite title="Source Title">Recuerdalo!</cite></footer>
                </blockquote>
            </div>
        </div><!--Cerramos la tercer(3) card-->

        </div><!--Cerramos nuestra tercer (3) Columna-->
    
    </div><!--Cerramos nuestro tercer (3) row-->


    </div><!--Cerramos el contenedor fluid-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>