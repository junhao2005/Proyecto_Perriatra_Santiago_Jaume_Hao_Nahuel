// Validaciones comunes
function verifEmail(){
    let email= document.getElementById("login-email").value;
    let errorEmail= document.getElementById("errorEmail");

    if(email==null || email==""){
        errorEmail.textContent= "El campo no puede estar vacío";
        return false;
    }else if(!(/^[\w.-]+@[\w.-]+\.\w{2,10}$/.test(email))){
        errorEmail.textContent= "El formato de email no es válido";
        return false;
    }else{
        errorEmail.textContent="";
        return true;
    }
}

function verifNombre(){
    let usuario= document.getElementById("nombre").value;
    let errorUsuario= document.getElementById("errorUsuario");

    if(usuario==null || usuario==""){
        errorUsuario.textContent= "El campo no puede estar vacío";
        return false;
    }else if(usuario.length<3){
        errorUsuario.textContent= "El campo no puede tener menos de 3 caracteres";
        return false;
    }else{
        errorUsuario.textContent="";
        return true;
    }
}

function verifApellido1(){
    let apellido1= document.getElementById("apellido1").value;
    let errorApellido1= document.getElementById("errorApellido1");

    if(apellido1==null || apellido1==""){
        errorApellido1.textContent= "El campo no puede estar vacío";
        return false;
    }else if(apellido1.length<3){
        errorApellido1.textContent= "El campo no puede tener menos de 3 caracteres";
        return false;
    }else{
        errorApellido1.textContent="";
        return true;
    }
}

function verifApellido2(){
    let apellido2= document.getElementById("apellido2").value;
    let errorApellido2= document.getElementById("errorApellido2");

    if(apellido2==null || apellido2==""){
        errorApellido2.textContent= "El campo no puede estar vacío";
        return false;
    }else if(apellido2.length<3){
        errorApellido2.textContent= "El campo no puede tener menos de 3 caracteres";
        return false;
    }else{
        errorApellido2.textContent="";
        return true;
    }
}

// Validación Login
function verifContraLogin(){
    let contra= document.getElementById("login-password").value;
    let errorContra= document.getElementById("errorContra");

    if(contra.length==0 || contra=="" || contra==null){
        errorContra.innerHTML= "Este campo no puede estar vacío, por favor ingrese su contraseña";
        return false;
    }else{
        errorContra.innerHTML="";
        return true;
    }
}

// Validación Register
function verifContraRegister(){
    let contra1= document.getElementById("password").value;
    let contra2= document.getElementById("confirm-password").value;
    let errorContra1= document.getElementById("errorContra");
    let errorContra2= document.getElementById("errorContraConfirm");

    if(contra1==null || contra1==""){
        errorContra1.textContent= "El campo no puede estar vacío";
        return false;
    }else if(contra1.length<8){
        errorContra1.textContent= "La contraseña no puede tener menos de 8 caracteres";
        return false;
    }else if(!/\d/.test(contra1)){
        errorContra1.textContent= "La contraseña debe tener al menos un número";
        return false;
    }else if(!/[A-Z]/.test(contra1)){
        errorContra1.textContent= "La contraseña debe tener al menos una mayúscula";
        return false;
    }else{
        errorContra1.textContent="";
    }

    if(contra1!=contra2){
        errorContra2.textContent= "Las contraseñas no coinciden";
        return false;
    }else{
        errorContra2.textContent="";
        return true;
    }
}

// Validación Propietario
function verifTelefono(){
    let telefono= document.getElementById("telefono").value;
    let errorTelefono= document.getElementById("errorTelefono");

    if(telefono==null || telefono==""){
        errorTelefono.textContent= "El campo no puede estar vacío";
        return false;
    }else if(!(/^\d{8}$/.test(telefono))){
        errorTelefono.textContent= "El formato de teléfono no es válido";
        return false;
    }else{
        errorTelefono.textContent="";
        return true;
    }
}

function verifDireccion(){
    let direccion= document.getElementById("direccion").value;
    let errorDireccion= document.getElementById("errorDireccion");

    if(direccion==null || direccion==""){
        errorDireccion.textContent= "El campo no puede estar vacío";
        return false;
    }else if(direccion.length<3){
        errorDireccion.textContent= "El campo no puede tener menos de 3 caracteres";
        return false;
    }else{
        errorDireccion.textContent="";
        return true;
    }
}

// Validación Mascota
function verifChip(){
    let chip= document.getElementById("chip").value;
    let errorChip= document.getElementById("errorChip");

    if(chip==null || chip==""){
        errorChip.textContent= "El campo no puede estar vacío";
        return false;
    }else if(chip.length!=15){
        errorChip.textContent= "El número de chip debe tener exactamente 15 caracteres";
        return false;
    }else{
        errorChip.textContent="";
        return true;
    }
}

function verifSexo(){
    let sexo= document.getElementById("sexo").value;
    let errorSexo= document.getElementById("errorSexo");

    if (sexo === "") {
      errorSexo.textContent = "Por favor, selecciona un sexo válido.";
      return false;
    } else {
      errorSexo.textContent = "";
      return true;
    }
}

function verifFecha() {
  let fecha = document.getElementById("fecha_nacimiento").value;
  let errorFecha = document.getElementById("errorFecha");

  if (fecha === "") {
    errorFecha.textContent = "Por favor selecciona una fecha.";
    return false;
  }

  let fechaIngresada = new Date(fecha);
  let hoy = new Date();

  if (fechaIngresada > hoy) {
    errorFecha.textContent = "La fecha no puede ser posterior a hoy.";
    return false;
  }

  errorFecha.textContent = "";
  return true;
}

function verifPeso() {
  let peso = document.getElementById("peso").value;
  let errorPeso = document.getElementById("errorPeso");

  if (peso === "") {
    errorPeso.textContent = "El campo no puede estar vacío";
    return false;
  }

  if (peso <= 0) {
    errorPeso.textContent = "El peso debe ser mayor que cero.";
    return false;
  }

  errorPeso.textContent = "";
  return true;
}

function verifVacunado() {
  let vacunado = document.getElementById("vacunado").value;
  let errorVacunado = document.getElementById("errorVacunado");

  if (vacunado === "") {
    errorVacunado.textContent = "Por favor, indica si está vacunado.";
    return false;
  }

  errorVacunado.textContent = "";
  return true;
}

function verifIdEspecie() {
    let numeroIdEspecie= document.getElementById("id_especie").value;
    let errorIdEspecie= document.getElementById("errorIdEspecie");

    if(numeroIdEspecie==null || numeroIdEspecie==""){
        errorIdEspecie.textContent= "El campo no puede estar vacío";
        return false;
    }else if(numeroIdEspecie!=isNaN){
        errorIdEspecie.textConetent="El campo solo puede contener numeros";
        return false;
    }
}

function verifIdEspecie() {
    let numeroIdPropietario= document.getElementById("id_propietario").value;
    let errorIdPropietario= document.getElementById("errorIdPropietario");

        if(numeroIdPropietario==null || numeroIdEspecie==""){
        errorIdPropietario.textContent= "El campo no puede estar vacío";
        return false;
    }else if(numeroIdPropietario!=isNaN){
        errorIdPropietario.textConetent="El campo solo puede contener numeros";
        return false;
    }
}