let menu_barras_js = 'vendor/gamboa.martin/js_base/src/menu_barras.js';
document.write('<script src="'+menu_barras_js+'"></script>');


let fecha_inicio_operaciones = $("#fecha_inicio_operaciones");
let fecha_ultimo_cambio_sat = $("#fecha_ultimo_cambio_sat");

fecha_inicio_operaciones.change(function () {
    fecha_ultimo_cambio_sat.val(fecha_inicio_operaciones.val());
});
