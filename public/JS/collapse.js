
//===========IMG-PRODUTO============
show();
function show() {
    var Btns = document.getElementsByClassName('btn-show');
    var collapse = document.getElementsByClassName('collapse');
    for (var i = 0; i < Btns.length; i++) {
        var Btn = Btns[i];
        Btn.addEventListener("click", function () {
            Removerclassname();
            for (var j = 0; j < Btns.length; j++) {
                if (this === Btns[j]) {
                    var idx = j;
                }
            }
            collapse[idx].classList.add('show');
        });
    }
}
function Removerclassname() {
    var ALL = document.getElementsByClassName("collapse");
    for (var i = 0; i < ALL.length; i++) {
        ALL[i].classList.remove('show');
    }
}