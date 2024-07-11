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
    let element2 = document.querySelector('.senha2');
    let element = document.querySelector('.senha');
    let codigoname2 = document.querySelector('.codigo')
  
     if(nome.length == 0 &&cpf.length == 0 &&ender.length == 0 &&contato.length == 0 &&senha.length == 0 &&nomesenha.length == 0 &&email.length == 0 &&codigo.length == 0){
             alert("Prencha todos os campos ");
        }else if(senha !== nomesenha ){
            element.className += ' is-invalid';
            element2.className += ' is-invalid';
        }else if(senha == nomesenha){
            element2.className += ' is-valid';
            element.className += ' is-valid';
        }
        if(codigo !== vefificao){
            codigoname2.className += ' is-invalid';
        }else if(codigo == vefificao){
            codigoname2.className += ' is-valid';
            location.href="../LoginADM.php"
        }
}