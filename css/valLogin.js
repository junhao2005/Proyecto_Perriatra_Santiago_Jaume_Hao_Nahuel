function verifEmail(){
    let email= document.getElementById("login-email").value;
    let errorEmail= document.getElementById("errorEmail");

    if(email==null || email==""){
        errorEmail.textContent= "El campo no puede estar vacio";
    }else if(!(/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/.test(email))){
        errorEmail.textContent= "El formato de email no es valido";
    }else{
        errorEmail.textContent="";
    }
}

function verifContra(){
    let contra= document.getElementById("login-password").value;
    let errorContra= document.getElementById("errorContra");

    if(contra.lenght==0 || contra=="" || contra==null){
        errorContra.innerHTML= "Este campo no puede estar vacio, por favor ingrese su contraseña";
    }else{
        errorContra.innerHTML="";
    }
}