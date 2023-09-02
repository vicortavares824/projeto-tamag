
function logar(){
    var login=document.getElementById('login').value;
    var senha=document.getElementById('senha').value;
    if (login == "deo" && senha == "123456@09"){
         location.href = "/pagina home/perfil.html"
    }else{
        alert('Usuario ou Senha incorreto')
    }
}