<?php include('calculo.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../css/grana.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de dinheiro</title>
  </head>
  <body>
    <form class="container">
      <div class="main">
        <label for="grana"><h1>Calcule seu dinheiro físico</h1></label><br>
      </div>
      <div class="moedas">
        <label for="5_crs">R$:0,05
          <input id="cent5" class="dinheiro" type="number" name="5_crs" placeholder="0,05"><br>
        </label>
        <label for="10_crs">R$:0,10
          <input id="cent10" class="dinheiro" type="number" name="10_crs" placeholder="0,10"><br>
        </label>
        <label for="25_crs">R$:0,25
          <input id="cent25" class="dinheiro" type="number" name="25_crs" placeholder="0,25"><br>
        </label>
        <label for="50_crs">R$:0,50
          <input id="cent50" class="dinheiro" type="number" name="50_crs" placeholder="0,50"><br>
        </label>
        <label for="1_rs">R$:1,00
          <input id="real1" class="dinheiro" type="number" name="1_rs" placeholder="1,00"><br>
        </label>
        <label for="2_rs">R$:2,00
          <input id="real2" class="dinheiro" type="number" name="2_rs" placeholder="2,00"><br>
        </label>
        <label for="5_rs">R$:5,00
          <input id="real5" class="dinheiro" type="number" name="5_rs" placeholder="5,00"><br>
        </label>
        <label for="10_rs">R$:10,00
          <input id="real10" class="dinheiro" type="number" name="10_rs" placeholder="10,00"><br>
        </label>
        <label for="20_rs">R$:20,00
          <input id="real20" class="dinheiro" type="number" name="20_rs"  placeholder="20,00"><br>
        </label>
        <label for="50_rs">R$:50,00
          <input id="real50" class="dinheiro" type="number" name="50_rs" placeholder="50,00"><br>
        </label>
        <label for="100_rs">R$:100,00
          <input id="real100" class="dinheiro" type="number" name="100_rs" placeholder="100,00"><br>
        </label>
        <label for="200_rs">R$:200,00
          <input id="real200" class="dinheiro" type="number" name="200_rs" placeholder="200,00"><br>
        </label>
        <div class="calcular">
          <button id="somar" class="somar" type="submit" name="somar">Somar</button><br>
        <p id="resultado"><?php echo calcular_dinheiro();?></p>
      </div>
      </div>
    </form>
  </body>
</html>
