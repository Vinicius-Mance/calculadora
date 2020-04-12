<?php include'grana.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/grana.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de dinheiro</title>
  </head>
  <body>
    <form class="container" action="granaform.php" method="post">
      <div class="main">
        <label for="grana"><h1>Calcule seu dinheiro físico</h1></label><br>
      </div>
      <div class="moedas">
        <h2>Moedas</h2>
        <label for="5_crs">Moedas de 5 centavos (R$:0,05)</label><br>
          <input class="dinheiro" type="number" name="5_crs" placeholder="0,05"><br>
        <label for="10_crs">Moedas de 10 centavos (R$:0,10)</label><br>
          <input class="dinheiro" type="number" name="10_crs" placeholder="0,10"><br>
        <label for="25_crs">Moedas de 25 centavos (R$:0,25)</label><br>
          <input class="dinheiro" type="number" name="25_crs" placeholder="0,25"><br>
        <label for="50_crs">Moedas de 50 centavos (R$:0,50)</label><br>
          <input class="dinheiro" type="number" name="50_crs" placeholder="0,50"><br>
        <label for="1_rs">Moedas de 1 real (R$:1,00)</label><br>
          <input class="dinheiro" type="number" name="1_rs" placeholder="1,00"><br>
        </div>
        <div class="notas">
          <h2>Notas</h2>
        <label for="2_rs">Notas de 2 reais (R$:2,00)</label><br>
          <input class="dinheiro" type="number" name="2_rs" placeholder="2,00"><br>
        <label for="5_rs">Notas de 5 reais (R$:5,00)</label><br>
          <input class="dinheiro" type="number" name="5_rs" placeholder="5,00"><br>
        <label for="10_rs">Notas de 10 reais (R$:10,00)</label><br>
          <input class="dinheiro" type="number" name="10_rs" placeholder="10,00"><br>
        <label for="20_rs">Notas de 20 reais (R$:20,00)</label><br>
          <input class="dinheiro" type="number" name="20_rs"  placeholder="20,00"><br>
        <label for="50_rs">Notas de 50 reais (R$:50,00)</label><br>
          <input class="dinheiro" type="number" name="50_rs" placeholder="50,00"><br>
        <label for="100_rs">Notas de 100 reais (R$:100,00)</label><br>
          <input class="dinheiro" type="number" name="100_rs" placeholder="100,00"><br>
        </div>
        <div class="calcular">
          <button class="somar" type="submit" name="somar">Somar</button><br>
        <p id="resultado"><?php calcular_dinheiro($cent5,$cent10,$cent25,$cent50,$real1,$real2,$real5,$real10,$real20,$real50,$real100);?></p>
      </div>
    </form>
  </body>
</html>
