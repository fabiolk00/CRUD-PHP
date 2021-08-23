<?php
    include 'conexao.php';


   
    $productname = $_POST['productname'];
    $productnumber = $_POST['productnumber'];
    $productprice = $_POST ['productprice'];
    $productregister = $_POST ['productregister'];

    $productregister = "'".date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $_POST['productregister'])))."'";

 
    $sql = "INSERT INTO `produto`(`productname`, `productnumber`, `productprice`, `productregister`) VALUES ('$productname',$productnumber,$productprice,$productregister)";


    $inserir = mysqli_query($conexao,$sql);
?>

<link rel="stylesheet" href="./css/bootstrap.css">

<div class="container" style="width: 500px; margin-top: 20rem">
<center>
<h4> Produto adicionado com sucesso! </h4>
</center>

<center>
<a href="index.html" role="button" class="btn btn-sm btn-primary" style="margin-top: 20px;">Cadastrar novo produto</a>
</center>

</div>