<?php
if (!$_GET) {
  $cent5 = "";
  $cent10 = "";
  $cent25 = "";
  $cent50 = "";
  $real1 = "";
  $real2 = "";
  $real5 = "";
  $real10 = "";
  $real20 = "";
  $real50 = "";
  $real100 = "";
  $real200 = "";
}
//Dando valores aos campos vazios para realizar o cálculo
      if(empty($_GET["5_crs"])){$_GET["5_crs"] = 0;}
      if(empty($_GET["10_crs"])){$_GET["10_crs"] = 0;}
      if(empty($_GET["25_crs"])){$_GET["25_crs"] = 0;}
      if(empty($_GET["50_crs"])){$_GET["50_crs"] = 0;}
      if(empty($_GET["1_rs"])){$_GET["1_rs"] = 0;}
      if(empty($_GET["2_rs"])){$_GET["2_rs"] = 0;}
      if(empty($_GET["5_rs"])){$_GET["5_rs"] = 0;}
      if(empty($_GET["10_rs"])){$_GET["10_rs"] = 0;}
      if(empty($_GET["20_rs"])){$_GET["20_rs"] = 0;}
      if(empty($_GET["50_rs"])){$_GET["50_rs"] = 0;}
      if(empty($_GET["100_rs"])){$_GET["100_rs"] = 0;}
      if(empty($_GET["200_rs"])){$_GET["200_rs"] = 0;}
// Variáveis para salvar o valor e
// não apagar o campo preenchido pelo o usuário
      $cent5 = $_GET["5_crs"];
      $cent10 = $_GET["10_crs"];
      $cent25 = $_GET["25_crs"];
      $cent50 = $_GET["50_crs"];
      $real1 = $_GET["1_rs"];
      $real2 = $_GET["2_rs"];
      $real5 = $_GET["5_rs"];
      $real10 = $_GET["10_rs"];
      $real20 = $_GET["20_rs"];
      $real50 = $_GET["50_rs"];
      $real100 = $_GET["100_rs"];
      $real200 = $_GET["200_rs"];

function calcular_dinheiro(){

       $total =
       $_GET["5_crs"] * 0.05 +
       $_GET["10_crs"] * 0.1 +
       $_GET["25_crs"] * 0.25 +
       $_GET["50_crs"] * 0.50 +
       $_GET["1_rs"] * 1 +
       $_GET["2_rs"]* 2+
       $_GET["5_rs"] * 5 +
       $_GET["10_rs"] * 10 +
       $_GET["20_rs"] * 20 +
       $_GET["50_rs"] * 50 +
       $_GET["100_rs"] * 100 +
       $_GET["200_rs"] * 200;

        if ($total != 0) {
         return "Você tem no total R$: ". number_format($total, 2, ',', '.');
        } else {
         return "Não há nada a calcular";
        }
}
?>
