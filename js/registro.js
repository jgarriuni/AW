/*Función que se encarga de validar el nombre usuario. Comprueba que no sea vacío,
que sólo contenga caracteres alfanuméricos y que la longitud sea menor que 17.
*/
function validarUsuario() {
    "use strict";

    var reg_usuario = /^[a-z0-9].{1,15}$/i,
        usuario = document.getElementById("ID_Usuario"),
        usuario_val = usuario.value;

    if (usuario_val === "") {
        document.getElementById("ID_Error_Usuario").style.display = "block";
        document.getElementById("ID_Error_Usuario").innerHTML = "Debes introducir un nombre de usuario";
        return false;
    } else if (!reg_usuario.test(usuario_val)) {
        document.getElementById("ID_Error_Usuario").style.display = "block";
        document.getElementById("ID_Error_Usuario").innerHTML = "El usuario sólo puede contener números y letras y debe tener una longitud menor a 17";
        return false;
    } else {
        document.getElementById("ID_Error_Usuario").style.display = "none";
        return true;
    }
}

//Función que se encarga de validar que el formato del correo sea válido.
function validarCorreo() {
    "use strict";

    var reg_correo = /^[a-zA-Z0-9._\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,4}$/,
        correo = document.getElementById("ID_Correo"),
        correo_val = correo.value;

    if (correo_val === "") {
        document.getElementById("ID_Error_Correo").style.display = "block";
        document.getElementById("ID_Error_Correo").innerHTML = "Debes introducir un correo";
        return false;
    } else if (!reg_correo.test(correo_val)) {
        document.getElementById("ID_Error_Correo").style.display = "block";
        document.getElementById("ID_Error_Correo").innerHTML = "El formato del correo es erróneo";
        return false;
    } else {
        document.getElementById("ID_Error_Correo").style.display = "none";
        return true;
    }
}

/*
Función que se encarga de validar la contraseña. Comprueba que no sea vacía,
que contenga al menos una mayúscula y una minúscula. Y que su longitud esté entre 5 y 15.
*/
function validarContrasenya() {
    "use strict";

    var reg_correo = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,15}$/,
        pass = document.getElementById("ID_Pass"),
        pass_val = pass.value;

    if (pass_val === "") {
        document.getElementById("ID_Error_Pass").style.display = "block";
        document.getElementById("ID_Error_Pass").innerHTML = "Debes introducir una contraseña";
        return false;
    } else if (!reg_correo.test(pass_val)) {
        document.getElementById("ID_Error_Pass").style.display = "block";
        document.getElementById("ID_Error_Pass").innerHTML = "La contraseña debe tener una longitud entre 5 y 15, al menos una mayúscula, una minúscula y un número";
        return false;
    } else {
        document.getElementById("ID_Error_Pass").style.display = "none";
        return true;
    }
}

//Función que comprueba que las contraseña coincidan.
function validarReContrasenya() {
    "use strict";

    var pass = document.getElementById("ID_Pass"),
        pass_val = pass.value,
        pass1 = document.getElementById("ID_Pass1"),
        pass1_val = pass1.value,
        ret = true;

    if (pass1_val === "") {
        document.getElementById("ID_Error_Pass1").style.display = "block";
        document.getElementById("ID_Error_Pass1").innerHTML = "Debes volver a introducir la contraseña";
        ret = false;
    } else {
        if (pass_val !== pass1_val && (pass_val !== "" && pass1_val !== "")) {
            document.getElementById("ID_Error_Pass1").style.display = "block";
            document.getElementById("ID_Error_Pass1").innerHTML = "Las contraseñas no coinciden";
            ret = false;
        } else {
            document.getElementById("ID_Error_Pass1").style.display = "none";
        }
    }

    return ret;
}

//Función que comprueba que el usuario ha completado el captcha.
function validarCaptcha() {
    "use strict";

    var captcha_response = grecaptcha.getResponse();
    if (captcha_response.length === 0) {
        document.getElementById("ID_Error_Captcha").style.display = "block";
        document.getElementById("ID_Error_Captcha").innerHTML = "El captcha es obligatorio";
        return false;
    } else {
        document.getElementById("ID_Error_Captcha").style.display = "none";
        return true;
    }
}

//Función que valida el registro entero con ayuda de las funciones anteriores.
function validarRegistro() {
    "use strict";
    
    var ret = (validarUsuario() & validarCorreo() & validarContrasenya() & validarReContrasenya() & validarCaptcha());
    
    if (ret === 0) {
        return false;
    } else {
        return true;
    }
}