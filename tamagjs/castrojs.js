function pontclick(){
    let nome01 = document.querySelector("#nomeresp").value
    let cpf01 = document.querySelector("#cpfresp").value
    let nomeluno = document.querySelector("#nomealuno").value
    let cpfluno = document.querySelector("#cpfaluno").value
    let ender = document.querySelector("#endre").value
    let contato = document.querySelector("#cont").value
    let escola = document.querySelector("#escol").value
    let serie = document.querySelector("#peri").value
    let entrada = document.querySelector("#horaent").value
    let saida = document.querySelector("#horasaid").value
    let senha = document.querySelector("#senha").value
    let nomesenha = document.querySelector("#nomesenha").value
    let email = document.querySelector("#email").value
  
  
  
        if(nome01.length == 0 && cpf01.length == 0 &&nomeluno.length == 0 &&cpfluno.length == 0 &&ender.length == 0 &&contato.length == 0 &&escola.length == 0 &&serie.length == 0 && entrada.length == 0 && saida.length == 0 &&senha.length == 0 &&nomesenha.length == 0 &&email.length == 0){
            alert("Prencha todos os campos ")
        }else if( senha !== nomesenha){
            alert("sua senha nao esta igual")
        }
        else{
            location.href="../Login.html"
        }
}