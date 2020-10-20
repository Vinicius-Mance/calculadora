let resultado = 0;
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
  resultado = cent5 * 0.05 + cent10 * 0.1 + cent25 * 0.25 +
  cent50 * 0.5 + real1 * 1 + real2 * 2 + real5 * 5 +
  real10 * 10 + real20 * 20 + real50 * 50 +
  real100 * 100 + real200 * 200;
  if (resultado != 0) {
    document.getElementById("resultado").innerHTML = "Você tem no total "+
    resultado.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});
  } else {
    document.getElementById("resultado").innerHTML = 'Não há nada a ser calculado';
  }
}
////////////////////////////////////////////////////////////////////////////////
const exibirMoedas = () => {
    let cambio = document.getElementById('cambio');
    if (resultado != 0) {
    cambio.style.display="block";
    let section = document.getElementById('outrasCotacoes');
        section.innerHTML = '';
        for (const local in cotacoes.rates) {
          if (local != cotacoes.base){
            let moeda = document.createElement('article');
            let link = document.createElement('A');
            let pais = document.createElement('h2');
            let valor = document.createElement('span');
            let numero = (cotacoes.rates[local] * resultado).toFixed(2);
              valor.innerHTML = new Intl.NumberFormat().format(numero);
              pais.innerHTML = local;
              moeda.appendChild(pais);
              moeda.appendChild(valor);
              section.appendChild(moeda);
          }
      }
    } else {
      cambio.style.display="none";
    }
}
const carregarMoedas = (moedaBase)=> {
    const fonte = "https://api.exchangeratesapi.io/latest?base=BRL";
     fetch(fonte).then(
       res => {return res.json()}
     ).then(
        dados => {
           cotacoes = dados;
            soma();
            exibirMoedas();
        }
     )
}
