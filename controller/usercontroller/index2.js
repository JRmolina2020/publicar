$(document).ready(function() {
$('#formulariouser') .bootstrapValidator({
message: 'This value is not valid',
feedbackIcons: {
valid: 'glyphicon glyphicon-ok',
invalid: 'glyphicon glyphicon-remove',
validating: 'glyphicon glyphicon-refresh'
},
excluded: [':disabled'],
fields: {
nick: {
message: 'The username is not valid',
validators: {
notEmpty: {
message: 'El nick es obligatorio y no puede estar vacio.'
},
stringLength: {
min: 4,
max: 12,
message: 'Minimo 4 caracteres y Maximo 12 '
},
regexp: {
regexp: /^[a-zA-Z0-9_\.]+$/,
message: 'No se permiten espacios'
}
}
},
correo: {
validators: {
notEmpty: {
message: 'El correo es obligatorio y no puede estar vacio'
},
emailAddress: {
message: 'Verifique !!No es una dirección de correo electrónico válida'
}
}
},
pass: {
message: 'La contraseña no es valida',
validators: {
notEmpty: {
message: 'La contraseña es obligatoria y no puede estar vacia.'
},
stringLength: {
min: 4,
max: 12,
message: 'Minimo 4 caracteres y Maximo 12 '
},
regexp: {
regexp: /^[a-zA-Z0-9_\.]+$/,
message: 'No se permiten espacios'
}
}
},
nombre: {
message: 'El nombre no es valido',
validators: {
notEmpty: {
message: 'El nombre es obligatorio y no puede estar vacio.'
},
stringLength: {
min: 3,
max: 15,
message: 'Minimo 3 caracteres y Maximo 15 '
}
}
},

}
})
.on('success.form.bv', function(e) {
e.preventDefault();
var f = $(this);
var formData = new FormData(document.getElementById("formulariouser"));
formData.append("dato", "valor");
$.ajax({
url: "../../model/users/index.php",
type: "post",
dataType: "html",
data: formData,
cache: false,
contentType: false,
processData: false
})
.done(function(res){

// alerts guardado
swal({
title: 'BIEN HECHO',
text: "Tus datos han sido registrado correctamente, ya puede inciar",
type: 'success',
confirmButtonColor: '#2E86C1',
confirmButtonText: 'Aceptar',

}).then(function () {
window.location="../index.php";
})

});
});
});


