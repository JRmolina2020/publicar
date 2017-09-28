$(document).ready(function() {
$('#formularioasunto') .bootstrapValidator({
message: 'This value is not valid',
feedbackIcons: {
valid: 'glyphicon glyphicon-ok',
invalid: 'glyphicon glyphicon-remove',
validating: 'glyphicon glyphicon-refresh'
},
excluded: [':disabled'],
fields: {

asunto: {
message: 'La publicacion no es valida',
validators: {
notEmpty: {
message: 'la publicacion parece estar vacia'
},
stringLength: {
min: 10,
max: 70,
message: 'Minimo 10 caracteres y Maximo 70  caracteres de texto'
}
}
},

}
})
.on('success.form.bv', function(e) {
e.preventDefault();
var f = $(this);
var formData = new FormData(document.getElementById("formularioasunto"));
formData.append("dato", "valor");
$.ajax({
url: "../../model/post/index.php",
type: "post",
dataType: "html",
data: formData,
cache: false,
contentType: false,
processData: false
})
.done(function(res){
readRecordsPost();
$("#modalasunto .close").click()

$('#formularioasunto')[0].reset();
$('#formularioasunto').bootstrapValidator("resetForm",true); 
});
});

$('#modalasunto')
.on('shown.bs.modal', function () {
$('#formularioasunto').find('[name="asunto"]').focus();
})
});

function readRecordsPost() {
$.get("lista.php", {}, function (data, status) {
$(".lista_post").html(data);
});
}

// delete from individual
function DeleteAsunto(id) {
swal({
title: 'Deseas Eliminar el Registro?',
text: "Recueda,Una vez eliminado no se puede Recuperar",
type: 'warning',
showCancelButton: true,
confirmButtonColor: '#3085d6',
cancelButtonColor: '#d33',
confirmButtonText: 'Si,Eliminarlo!'
}).then(function () {
$.post("../../model/post/delete.php", {
id: id
},
function (data, status) {
 readRecordsPost();
}
);
})
}
// end delete


$(document).ready(function () {
readRecordsPost(); 
});
