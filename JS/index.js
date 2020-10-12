console.log("conectado");
function soma(){
  let cent5  = document.getElementById("cent5").value;
  let cent10  = document.getElementById("cent10").value;
  let cent25  = document.getElementById("cent25").value;
  let cent50  = document.getElementById("cent50").value;
  let real1  = document.getElementById("real1").value;
  let real2  = document.getElementById("real2").value;
  let real5  = document.getElementById("real5").value;
  let real10  = document.getElementById("real10").value;
  let real20  = document.getElementById("real20").value;
  let real50  = document.getElementById("real50").value;
  let real100  = document.getElementById("real100").value;
  let real200  = document.getElementById("real200").value;
  let resultado = (cent5 * 5 + cent10 * 10 + cent25 * 25 +
  cent50 * 50 + real1 * 100 + real2 * 200 + real5 * 500 +
  real10 * 1000 + real20 * 2000 + real50 * 5000 +
  real100 * 10000 + real200 * 20000) / 100;
  if (resultado != 0) {
    document.getElementById("resultado").innerHTML = "Você tem no total "+
    resultado.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
  }
}
