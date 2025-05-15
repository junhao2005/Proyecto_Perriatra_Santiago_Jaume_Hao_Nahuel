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