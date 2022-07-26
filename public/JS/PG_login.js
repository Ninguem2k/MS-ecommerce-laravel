function PG_LOGIN() {
    document.getElementById("login").style.cssText = 'display:block;';
    document.getElementById("cadastro").style.cssText = 'display:none;';
    document.getElementById("forgetsenha").style.cssText = 'display:none;';
}
function PG_CADASTRO() {
    document.getElementById("login").style.cssText = 'display:none;';
    document.getElementById("cadastro").style.cssText = 'display:block;';
    document.getElementById("forgetsenha").style.cssText = 'display:none;';
}
function PG_FORGETSENHA() {
    document.getElementById("login").style.cssText = 'display:none;';
    document.getElementById("cadastro").style.cssText = 'display:none;';
    document.getElementById("forgetsenha").style.cssText = 'display:block;';
}