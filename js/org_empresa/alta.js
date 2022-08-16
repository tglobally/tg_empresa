let menu_barras_js = 'vendor/gamboa.martin/js_base/src/menu_barras.js';
document.write('<script src="'+menu_barras_js+'"></script>');





$('.form-control').click(function() {
    let telefono_txt = document.getElementById("telefono_1");
    let telefono_error = document.getElementById("label_alerta");
    let telefono = '';
    let telefono_regex = new RegExp('[1-9][0-9]{9}');


    telefono_error.removeClass("label-alerta-oculto");
    telefono_error.addClass("label-alerta");
})



let telefono_txt = document.getElementById("telefono_1");
let telefono_error = document.getElementById("label_alerta");
let telefono = '';

let telefono_regex = new RegExp('[1-9][0-9]{9}');



telefono_txt.keyup(function () {
    telefono = $(this).val();
    let valido = false;
    let regex_val = telefono_regex.test(telefono);
    let n_car = telefono.length;

    if(n_car<=10 && regex_val){
        valido = true;
    }

    if(!valido){
        telefono_error.removeClass("label-alerta");
        telefono_error.addClass("label-alerta-oculto");
    } else {
        telefono_error.removeClass("label-alerta-oculto");
        telefono_error.addClass("label-alerta");
    }

});
