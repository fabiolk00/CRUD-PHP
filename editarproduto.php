<?php

    include 'conexao.php';



 $id = $_GET ['id'];



?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD</title>
        <link rel="stylesheet" href="./css/bootstrap.css">


        <style type="text/css">
          #containerpage{
            display: flex;
            justify-content: center;
          }

          form{
            margin-top: 9.5rem;
          }

        </style>
    </head>
    
    <body>
        <div id="containerpage">

          <form action="inserirproduto.php" method="POST">

          <?php

          $sql = "SELECT * from `produto ` where id_produto = $id";
          $busca = mysqli_query($conexao, $sql);


          while ($array = mysqli_fetch_array($busca)){
              
            $id_product = $array ['id_product'];
            $productname = $array ['productname'];
            $productnumber = $array ['productnumber'];
            $productprice = $array ['productprice'];
            $productregister = $array ['productregister'];

        

          ?>

            <div class="mb-3">
              <label>Nome produto</label>
                <input type="text" class="form-control" name="productname" placeholder="Insira o nome do produto" required autocomplete="off">
            </div>

            <div class="mb-3" >
              <label>Número do produto</label>
                <input type="number" class="form-control" name="productnumber" value="<?php echo $productnumber ?>">
            </div>

            <div class="mb-3">
                <label>Preço</label>
                  <input type="number" class="form-control" name ="productprice" placeholder="Insira o valor do produto" required autocomplete="off">
            </div>


            <div class="mb-3">
                <label>Data de cadastro</label>
                  <input type="date" class="form-control"  name ="productregister" placeholder="Data de cadastro" required autocomplete="off">
            </div>
            <button type="submit" class="btn btn-success" style="margin-left: 3rem;"> Cadastrar </button>
        <?php } ?>
          </form>                                
        </div>
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    </body>
</html>