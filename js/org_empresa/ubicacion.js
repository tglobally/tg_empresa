function getAbsolutePath() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}
let url = getAbsolutePath();

let direcciones_js = url+'js/direcciones.js';

document.write('<script src="'+direcciones_js+'"></script>');



let session_id = getParameterByName('session_id');


let sl_local_dp_colonia_postal_id = $("#dp_colonia_postal_id");
let sl_dp_calle_pertenece_entre1_id = $("#dp_calle_pertenece_entre1_id");
let sl_dp_calle_pertenece_entre2_id = $("#dp_calle_pertenece_entre2_id");



sl_local_dp_colonia_postal_id.change(function(){
    dp_colonia_postal_id = $(this).val();
    let url = "index.php?seccion=dp_calle_pertenece&ws=1&accion=get_calle_pertenece&dp_colonia_postal_id="+dp_colonia_postal_id+"&session_id="+session_id;

    $.ajax({
        type: 'GET',
        url: url,
    }).done(function( data ) {  // Función que se ejecuta si todo ha ido bien
        sl_dp_calle_pertenece_entre1_id.empty();
        sl_dp_calle_pertenece_entre2_id.empty();

        integra_new_option("#dp_calle_pertenece_entre1_id",'Seleccione una calle','-1');
        integra_new_option("#dp_calle_pertenece_entre2_id",'Seleccione una calle','-1');
        $.each(data.registros, function( index, dp_calle_pertenece ) {
            integra_new_option("#dp_calle_pertenece_entre1_id",dp_calle_pertenece.dp_colonia_descripcion+' '+dp_calle_pertenece.dp_cp_descripcion+' '+dp_calle_pertenece.dp_calle_descripcion,dp_calle_pertenece.dp_calle_pertenece_id);
            integra_new_option("#dp_calle_pertenece_entre2_id",dp_calle_pertenece.dp_colonia_descripcion+' '+dp_calle_pertenece.dp_cp_descripcion+' '+dp_calle_pertenece.dp_calle_descripcion,dp_calle_pertenece.dp_calle_pertenece_id);
        });
        sl_dp_calle_pertenece_entre1_id.selectpicker('refresh');
        sl_dp_calle_pertenece_entre2_id.selectpicker('refresh');
    }).fail(function (jqXHR, textStatus, errorThrown){ // Función que se ejecuta si algo ha ido mal
        alert('Error al ejecutar');
        console.log(url);
    });
});

let fecha_inicio_operaciones = $("#fecha_inicio_operaciones");
let fecha_ultimo_cambio_sat = $("#fecha_ultimo_cambio_sat");

fecha_inicio_operaciones.change(function () {
    fecha_ultimo_cambio_sat.val(fecha_inicio_operaciones.val());
});

function deepEqual(object1, object2) {
    const keys1 = Object.keys(object1);
    const keys2 = Object.keys(object2);

    if (keys1.length !== keys2.length) {
        return false;
    }
    for (const key of keys1) {
        const val1 = object1[key];
        const val2 = object2[key];
        const areObjects = isObject(val1) && isObject(val2);
        if (
            areObjects && !deepEqual(val1, val2) ||
            !areObjects && val1 !== val2
        ) {
            return false;
        }
    }
    return true;
}

function isObject(object) {
    return object != null && typeof object === 'object';
}

let elementos = $('.form-control');

let old_values = {};
let new_values = {};

elementos.each(function () {
    old_values[ this.id ] = $(this).val();
});

const button = document.querySelector('.check-estado');

button.addEventListener('click', (event) => {

    let estado = false

    elementos.each(function () {
        new_values[ this.id ] = $(this).val();
    });

    if (!deepEqual(old_values, new_values))  {
        estado = confirm("Hay cambios sin guardar. ¿Desea continuar?");
        if (!estado) {
            event.preventDefault();
        }
    }
});
