/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//SCROOLL TEMPLATE
$(window).scroll(function () {
    var windowTop = $(this).scrollTop();
    $('.animeTop').each(function () {
        if (windowTop > $(this).offset().top - 500) {
            $(this).addClass('anime-init');
        } else {
            $(this).removeClass('anime-init');
        }
    });
    
    var windowTop = $(this).scrollTop();
    $('.animeLeft').each(function () {
        if (windowTop > $(this).offset().top - 500) {
            $(this).addClass('anime-init');
        } else {
            $(this).removeClass('anime-init');
        }
    });
    
    var windowTop = $(this).scrollTop();
    $('.animeRight').each(function () {
        if (windowTop > $(this).offset().top - 500) {
            $(this).addClass('anime-init');
        } else {
            $(this).removeClass('anime-init');
        }
    });
});

