$( document ).ready(function() {
    $(".info").fadeTo(7500, 500).slideUp(500, function(){
        $(".info").slideUp(500);
    });
});


$('.open-overlay').click(function() {
    var overlay_navigation = $('.overlay-navigation'),
        nav_item_1 = $('nav li:nth-of-type(1)'),
        nav_item_2 = $('nav li:nth-of-type(2)'),
        nav_item_3 = $('nav li:nth-of-type(3)'),
        nav_item_4 = $('nav li:nth-of-type(4)'),
        nav_item_5 = $('nav li:nth-of-type(5)'),
        top_bar = $('.bar-top'),
        middle_bar = $('.bar-middle'),
        bottom_bar = $('.bar-bottom');

    overlay_navigation.toggleClass('overlay-active');
    if (overlay_navigation.hasClass('overlay-active')) {

        top_bar.removeClass('animate-out-top-bar').addClass('animate-top-bar');
        middle_bar.removeClass('animate-out-middle-bar').addClass('animate-middle-bar');
        bottom_bar.removeClass('animate-out-bottom-bar').addClass('animate-bottom-bar');
        overlay_navigation.removeClass('overlay-slide-up').addClass('overlay-slide-down')
        nav_item_1.removeClass('slide-in-nav-item-reverse').addClass('slide-in-nav-item');
        nav_item_2.removeClass('slide-in-nav-item-delay-1-reverse').addClass('slide-in-nav-item-delay-1');
        nav_item_3.removeClass('slide-in-nav-item-delay-2-reverse').addClass('slide-in-nav-item-delay-2');
        nav_item_4.removeClass('slide-in-nav-item-delay-3-reverse').addClass('slide-in-nav-item-delay-3');
        nav_item_5.removeClass('slide-in-nav-item-delay-4-reverse').addClass('slide-in-nav-item-delay-4');
    } else {
        top_bar.removeClass('animate-top-bar').addClass('animate-out-top-bar');
        middle_bar.removeClass('animate-middle-bar').addClass('animate-out-middle-bar');
        bottom_bar.removeClass('animate-bottom-bar').addClass('animate-out-bottom-bar');
        overlay_navigation.removeClass('overlay-slide-down').addClass('overlay-slide-up')
        nav_item_1.removeClass('slide-in-nav-item').addClass('slide-in-nav-item-reverse');
        nav_item_2.removeClass('slide-in-nav-item-delay-1').addClass('slide-in-nav-item-delay-1-reverse');
        nav_item_3.removeClass('slide-in-nav-item-delay-2').addClass('slide-in-nav-item-delay-2-reverse');
        nav_item_4.removeClass('slide-in-nav-item-delay-3').addClass('slide-in-nav-item-delay-3-reverse');
        nav_item_5.removeClass('slide-in-nav-item-delay-4').addClass('slide-in-nav-item-delay-4-reverse');
    }
})




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
