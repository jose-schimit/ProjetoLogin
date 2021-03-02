
let e_mail = 'teste@teste.com';
let password = 'teste123';

let msgErro = document.getElementById('msgErro');
let emailErro = document.getElementById('email');
let senhaErro = document.getElementById('senha');
let iconEmail = document.getElementById('iconEmail');
let iconCad = document.getElementById('iconCad');
let altenticado = false;

function altenticar(){
    let email = document.getElementById('email').value;
    let senha = document.getElementById('senha').value;
    
    if(emailErro.value == ""){
        msgErro.innerHTML = "Campo(s) obrigatório";
        msgErro.style.opacity = '100%';
        emailErro.style.border = '1px solid Red';
        iconEmail.style.border = '1px solid Red';
        iconEmail.style.borderRight = 'none';
    }else{
        emailErro.style.border = '1px solid #ddd';
        msgErro.style.opacity = '0%';
        iconEmail.style.border = '1px solid #ddd';
    }

    if(senhaErro.value == ""){
        msgErro.innerHTML = "Campo(s) obrigatório";
        msgErro.style.opacity = '100%';
        senhaErro.style.border = '1px solid Red';
        iconCad.style.border = '1px solid Red';
        iconCad.style.borderRight = 'none';
    }else{
        senhaErro.style.border = '1px solid #ddd';
        msgErro.style.opacity == '0%';
        iconCad.style.border = '1px solid #ddd';
    }

    if(emailErro.value != "" && senhaErro.value != ""){
        if(e_mail == email && senha == password){
            window.location.href = 'home.html';
        }else{
            msgErro.innerHTML = 'Email ou senha inválido(s)';
            msgErro.style.opacity = '100%';
        }
    }   
        
        /* if(email == e_mail && senha == password){
            window.location.href = 'home.html';
        }else{
            msgErro.style.opacity = '100%';
        } */
    
        //msgErro.style.opacity = '100%';
        //e.preventDefault();
    }


