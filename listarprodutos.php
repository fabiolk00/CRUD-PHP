
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/f604ec769c.js" crossorigin="anonymous"></script>
  </head>
  <body>
      <div class="container" style="margin-top: 15rem;">
        <h3> Lista de produtos</h3>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Nome produto</th>
                <th scope="col">Número produto</th>
                <th scope="col">Preço</th>
                <th scope="col">Data de cadastro</th>
              </tr>
            </thead>
                <?php
                  include 'conexao.php';
                    $sql = "SELECT * from `produto`";
                    $busca = mysqli_query($conexao, $sql);

                    while ($array = mysqli_fetch_array($busca)){
                      
                     $id_product = $array ['id_product'];
                     $productname = $array ['productname'];
                     $productnumber = $array ['productnumber'];
                     $productprice = $array ['productprice'];
                     $productregister = $array ['productregister'];
                ?>
                <tr>
                    <td><?php echo $productname ?></td>
                    <td><?php echo $productnumber ?></td>
                    <td><?php echo $productprice ?></td>
                    <td><?php echo $productregister ?></td>

                      <?php } ?>

                </tr>
          
        </table>

      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    
  </body>
</html>