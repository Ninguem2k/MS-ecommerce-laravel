//QUANTIDADE DE PRODUTOS
document.getElementById('var-value').value = 0;
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

//===========IMG-PRODUTO============
Imgproduto();
function Imgproduto() {
    var IMGs = document.getElementsByClassName('P-IMG');
    var IMGPrinc = document.getElementsByClassName('CAP-IMG');
    URL = IMGs[0].src;
    for (var i = 0; i < IMGs.length; i++) {
        var IMG = IMGs[i];
        if (URL === IMGs[0].src) {
            IMGPrinc[0].setAttribute("src", URL);
        }
        IMG.addEventListener("click", function () {
            URL = this.src;
            IMGPrinc[0].setAttribute("src", URL);
        });
    }
}

show();
function show() {
    var Prev = document.getElementsByClassName('bxs-left-arrow');
    var Next = document.getElementsByClassName('bxs-right-arrow');
    Prev[0].addEventListener("click", function () {
        Removerclassname();
        Addclassname(-3);
    });
    Next[0].addEventListener("click", function () {
        Removerclassname();
        Addclassname(+3);
    });
}

var v = 0;
function Addclassname(n) {
    var collapse = document.getElementsByClassName('collapse');
    if (v + n > 0 && v + n <= QnIMG(collapse.length)) {
        v = v + n;
    } else {
        v = 3;
    }

    for (var i = v - 3; i < v; i++) {
        if (typeof collapse[i] !== 'undefined') {
            collapse[i].classList.add('show');
        }
    }

}

function QnIMG(n) {
    var v = n;
    if (n % 3 === 0) {
        return v;
    } else if (n % 3 === 1) {
        return (v + 2);
    } else if (n % 3 === 2) {
        return (v + 1);
    }
}

function Removerclassname() {
    var ALL = document.getElementsByClassName("collapse");
    for (var i = 0; i < ALL.length; i++) {
        ALL[i].classList.remove('show');
    }
}