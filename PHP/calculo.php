<?php
  $cent5="";
  $cent10="";
  $cent25="";
  $cent50="";
  $real1="";
  $real2="";
  $real5="";
  $real10="";
  $real20="";
  $real50="";
  $real100="";
  $real200="";

   function calcular_dinheiro(
    $cent5=0,$cent10=0,$cent25=0,
    $cent50=0,$real1=0,$real2=0,
    $real5=0,$real10=0,$real20=0,
    $real50=0,$real100=0,$real200=0){
       if(empty($_POST["5_crs"])){$_POST["5_crs"] = 0;}
       if(empty($_POST["10_crs"])){$_POST["10_crs"] = 0;}
       if(empty($_POST["25_crs"])){$_POST["25_crs"] = 0;}
       if(empty($_POST["50_crs"])){$_POST["50_crs"] = 0;}
       if(empty($_POST["1_rs"])){$_POST["1_rs"] = 0;}
       if(empty($_POST["2_rs"])){$_POST["2_rs"] = 0;}
       if(empty($_POST["5_rs"])){$_POST["5_rs"] = 0;}
       if(empty($_POST["10_rs"])){$_POST["10_rs"] = 0;}
       if(empty($_POST["20_rs"])){$_POST["20_rs"] = 0;}
       if(empty($_POST["50_rs"])){$_POST["50_rs"] = 0;}
       if(empty($_POST["100_rs"])){$_POST["100_rs"] = 0;}
       if(empty($_POST["200_rs"])){$_POST["200_rs"] = 0;}

       $cent5 = $_POST["5_crs"];
       $cent10 = $_POST["10_crs"];
       $cent25 = $_POST["25_crs"];
       $cent50 = $_POST["50_crs"];
       $real1 = $_POST["1_rs"];
       $real2 = $_POST["2_rs"];
       $real5 = $_POST["5_rs"];
       $real10 = $_POST["10_rs"];
       $real20 = $_POST["20_rs"];
       $real50 = $_POST["50_rs"];
       $real100 = $_POST["100_rs"];
       $real200 = $_POST["200_rs"];

       $total =
       $cent5 * 0.05 +
       $cent10 * 0.1 +
       $cent25 * 0.25 +
       $cent50 * 0.50 +
       $real1 * 1 +
       $real2 * 2+
       $real5 * 5 +
       $real10 * 10 +
       $real20 * 20 +
       $real50 * 50 +
       $real100 * 100 +
       $real200 * 200;

        if ($total != 0) {
         return "Você tem no total R$: ". number_format($total, 2, ',', '.');
        } else {
         return "Não há nada a calcular";
        }
   }
?>
