function pontclick(){
    let nome = document.querySelector("#nome").value
    let cpf = document.querySelector("#cpf").value
    let ender = document.querySelector("#endre").value
    let contato = document.querySelector("#cont").value
    let senha = document.querySelector("#senha").value
    let nomesenha = document.querySelector("#nomesenha").value
    let email = document.querySelector("#email").value
    let codigo = document.querySelector("#codi").value
    let vefificao = '1815-23' 
  
     if(nome.length == 0 &&cpf.length == 0 &&ender.length == 0 &&contato.length == 0 &&senha.length == 0 &&nomesenha.length == 0 &&email.length == 0 &&codigo.length == 0){
             alert("Prencha todos os campos ");
        }else if( senha !== nomesenha){
            alert("sua senha nao esta igual")
        }else if(codigo !== vefificao){
            alert("seu codigo esta errado")
        }
        else{
            location.href="../LoginADM.html"
        }
}