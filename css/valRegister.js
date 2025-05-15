function verifNombre(){
    let usuario= document.getElementById("nombre").value;
    let errorUsuario= document.getElementById("errorUsu");

    if(usuario==null || usuario==""){
        errorUsuario.textContent= "El campo no puede estar vacio";
    }else if(usuario.length<3){
        errorUsuario.textContent= "El campo no puede ser menor de 3 caracteres";
    }else{
        errorUsuario.textContent="";
    }
}

function verifEmail(){
    let email= document.getElementById("correo").value;
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
    let contra1= document.getElementById("password").value;
    let contra2= document.getElementById("confirm-password").value;
    let errorContra1= document.getElementById("errorContra");
    let errorContra2= document.getElementById("errorContraConfirm");

    if(contra1==null || contra1==""){
        errorContra1.textContent= "El campo no puede estar vacio";
    }else if(contra1.length<8){
        errorContra1.textContent= "La contraseña no puede ser menor de 8 caracteres";
    }else if(!/\d/.test(contra1)){
            errorContra1.textContent= "La contraseña debe tener al menos un numero";
    }else if(!/[A-Z]/.test(contra1)){
            errorContra1.textContent= "La contraseña debe tener al menos una mayuscula";
    }else{
        errorContra1.textContent="";
    }
    if(contra1!=contra2){
        errorContra2.textContent= "Las contraseñas no coinciden";
    }else{
        errorContra2.textContent="";
    }
}