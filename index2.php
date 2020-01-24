<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>
        <h1>Ejercicios</h1></title>
</head>
<body>
    <h1>Ejercicios</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        Ejercicio 1
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio A Y B</h5>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ingrese un numero</label>
                            <input type="number" class="form-control" id="txtnum" onchange="validateDecimal()" aria-describedby="emailHelp">
                        </div>
                        <a href="#" class="btn btn-primary" onclick="calcular()">Calcular</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        Metodo Gauss A
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p id="p_resultadoG"></p>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">
                        Fraccion Irreducible B
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p id="p_resultadoI"></p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8"><div class="card">
                    <div class="card-header">
                        Ejercicio 1 Seccion C
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio C</h5>
                       

                      <label class="sr-only" for="inlineFormInputGroupUsername2">Alimento 1</label>
                      <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                      <div class="input-group-text">Si</div>
                      </div>
                      <input type="text" class="form-control" id="txtAlimento1" value="calabaza|ajo|papa" aria-describedby="emailHelp">
                        </div>

                        <label class="sr-only" for="inlineFormInputGroupUsername2">Alimento 2</label>
                      <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                      <div class="input-group-text">Si</div>
                      </div>
                      <input type="text" class="form-control" id="txtAlimento2"   value="tomate|cebolla|cilantro|carne" aria-describedby="emailHelp">
                          </div>

                        <label class="sr-only" for="inlineFormInputGroupUsername2">Alimento 3</label>
                      <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                      <div class="input-group-text">No</div>
                      </div>
                      <input type="text" class="form-control" id="txtAlimento3"  value="papa|ajo|tomate|cebolla"  aria-describedby="emailHelp">
                         </div>


                 

                          <div class="form-group">
                          <a href="#" class="btn btn-primary" onclick="consultar()">Consular</a>
                   </div>
                   <div class="form-group">
                   <p id="resulPlatillos"></p>
                          </div>
                       
                    </div>
                </div></div>
            <div class="col-sm-1"></div>

            </div>
            <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">  
            <div class="card">
  <div class="card-header">
    Ejercicio 3
  </div>
  <div class="card-body">
    <h5 class="card-title">Ejercicio 3</h5>
    <p class="card-text">
    
    <pre>try {
    $db->beginTransaction();
    $db->query('Update 1...');
    $db->query('Update 2...y');
    $db->commit();
} catch (Exception $e) {
    $db->rollback();
}</pre></p>
  </div>
</div>

  </div>
            </div>


      </div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>

</html>