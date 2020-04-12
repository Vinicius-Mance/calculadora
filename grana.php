<?php
$cent5=0;$cent10=0;$cent25=0;$cent50=0;$real1=0;
$real2=0;$real5=0;$real10=0;$real20=0;$real50=0;$real100=0;
function calcular_dinheiro($cent5=0,$cent10=0,$cent25=0,$cent50=0,$real1=0,$real2=0,$real5=0,$real10=0,$real20=0,$real50=0,$real100=0){
  if (empty($_POST["5_crs"]) and empty($_POST["10_crs"]) and empty($_POST["25_crs"]) and empty($_POST["50_crs"]) and empty($_POST["1_rs"]) and
   empty($_POST["2_rs"]) and empty($_POST["5_rs"]) and empty($_POST["10_rs"]) and empty($_POST["20_rs"]) and empty($_POST["50_rs"])
   and empty($_POST["100_rs"])){
      echo "Não há nada a ser calculado";
      exit;
    } else {
      if(empty($_POST["5_crs"])){$_POST["5_crs"] = 0;} if(empty($_POST["10_crs"])){$_POST["10_crs"] = 0;}
      if(empty($_POST["25_crs"])){$_POST["25_crs"] = 0;}  if(empty($_POST["50_crs"])){$_POST["50_crs"] = 0;}
      if(empty($_POST["1_rs"])){$_POST["1_rs"] = 0;} if(empty($_POST["2_rs"])){$_POST["2_rs"] = 0;}
      if(empty($_POST["5_rs"])){$_POST["5_rs"] = 0;} if(empty($_POST["10_rs"])){$_POST["10_rs"] = 0;}
      if(empty($_POST["20_rs"])){$_POST["20_rs"] = 0;} if(empty($_POST["50_rs"])){$_POST["50_rs"] = 0;}
      if(empty($_POST["100_rs"])){$_POST["100_rs"] = 0;}
      $cent5 = $_POST["5_crs"]; $cent10 = $_POST["10_crs"]; $cent25 = $_POST["25_crs"]; $cent50 = $_POST["50_crs"];
      $real1 = $_POST["1_rs"]; $real2 = $_POST["2_rs"]; $real5 = $_POST["5_rs"]; $real10 = $_POST["10_rs"];
      $real20 = $_POST["20_rs"]; $real50 = $_POST["50_rs"]; $real100 = $_POST["100_rs"];
      $total = ($cent5 * 5 + $cent10 * 10 + $cent25 * 25 + $cent50 * 50 + $real1 * 100 + $real2 * 200
      + $real5 * 500 + $real10 * 1000 + $real20 * 2000 + $real50 * 5000 + $real100 * 10000) / 100;
      echo "Você tem no total R$: ". number_format($total, 2, ',', '.');
    }
  }
?>
