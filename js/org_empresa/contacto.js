let menu_barras_js = 'vendor/gamboa.martin/js_base/src/menu_barras.js';
document.write('<script src="'+menu_barras_js+'"></script>');




$( document ).ready(function() {
    let telefono_txt_1 = $("input[name=telefono_1]");
    let telefono_txt_2 = $("input[name=telefono_2]");
    let telefono_txt_3 = $("input[name=telefono_3]");
    let telefono_error = $(".label-error");
    let telefono = '';
    let telefono_regex = new RegExp('[1-9][0-9]{9}');
    telefono_error.hide();
    telefono_txt_1.keyup(function () {
        telefono = $(this).val();
        let valido = false;
        let regex_val = telefono_regex.test(telefono);
        let n_car = telefono.length;

        if(n_car<=10 && regex_val){
            valido = true;
        }

        if(!valido){
            telefono_error.show();
        } else {
            telefono_error.hide();
        }

    });
    telefono_txt_2.keyup(function () {
        telefono = $(this).val();
        let valido = false;
        let regex_val = telefono_regex.test(telefono);
        let n_car = telefono.length;

        if(n_car<=10 && regex_val){
            valido = true;
        }

        if(!valido){
            telefono_error.show();
        } else {
            telefono_error.hide();
        }

    });
    telefono_txt_3.keyup(function () {
        telefono = $(this).val();
        let valido = false;
        let regex_val = telefono_regex.test(telefono);
        let n_car = telefono.length;

        if(n_car<=10 && regex_val){
            valido = true;
        }

        if(!valido){
            telefono_error.show();
        } else {
            telefono_error.hide();
        }

    });




});


