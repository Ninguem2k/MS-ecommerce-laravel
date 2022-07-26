document.getElementById('var-value').value = 0;

//QUANTIDADE DE PRODUTOS
var btnUP = document.getElementById('btn-plus');
btnUP.addEventListener('click', function () {
    var valor = 1;
    Quantidadeditens(valor);
});

var btnDN = document.getElementById('btn-minus');
btnDN.addEventListener('click', function () {
    var valor = -1;
    Quantidadeditens(valor);
});

function Quantidadeditens(valor) {
    var quant = document.getElementById('var-value').value;
    var AUX_quant = parseFloat(quant) + parseFloat(valor);
    if (AUX_quant >= 0) {
        document.getElementById('var-value').value = AUX_quant;
    }
}
//!QUANTIDADE
