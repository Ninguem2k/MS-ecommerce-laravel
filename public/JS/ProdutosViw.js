
Produtos();

function Produtos() {
    var Produtos = document.getElementsByClassName("card-produto");
    for (var i = 0; i < Produtos.length; i++) {
        var Produto = Produtos[i];
        Produto.addEventListener("click", function () {
            Removerclassnameactive();
            this.classList.add('active');
        });
    }
}
function Removerclassnameactive() {
    var ALL = document.getElementsByClassName("card-produto");
    for (var i = 0; i < ALL.length; i++) {
        ALL[i].classList.remove('active');
    }
}

  