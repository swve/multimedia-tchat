// Interactive Tchat 
// Ver 1.00
//fully created by Badr BENNASRI
// Mdr wallah c moi qui l'a fait de 0 
$(document).ready(function () {

    $('.navbar a').click(function (e) {


        e.preventDefault();

        var offset = $($(this).attr('href')).offset().top
        var padding = parseInt($($(this).attr('href')).css('paddingTop').replace('px',''));
        // On anime la scrollbar jusqu'a la div cible - le padding haut

        $('html, body').animate({
            'scrollTop': offset - padding 
        });



    });
});