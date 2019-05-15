/**
 * @package      Theme pour le SoundCloud ROVER
 *
 * @version      0.1.0
 * @copyright    Copyright (C) 2019. All rights reserved.
 * @license      Apache-2.0
 * @author       Louison Chevalier
 **/

$.pjax.defaults.timeout = 3000;
$(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-container', {timeout : 3000});
$(document).pjax('[data-pjax-toggle] a, a[data-pjax-toggle]', '#pjax-container', {push : false, timeout : 3000});

//Form ajax
$(document).on('submit', 'form[data-pjax]', function(event) {
    $.pjax.submit(event, '#pjax-container')
})


$(document).ready(function () {
    $('body').on('click', 'a.chanson', function (e) {
        e.preventDefault();
        var f = $(this).attr('data-file');
        //console.log(f);

        var audio = $('#audio');
        audio.attr('src', f);
        audio[0].load();
        audio[0].play();
    });

    $('#search').submit(function (e) {
        e.preventDefault();
        if ($.support.pjax)
            $.pjax({url: "/recherche/" + e.target.elements[0].value, container: '#pjax-container'})
        else
            window.location.href = "/recherche/" + e.target.elements[0].value;
    });

    /*Test Ajax
    $("#testajax").click(function (e) {

        e.preventDefault();
        $.ajax({
            type: "GET",
            url: "/testajax",
            success: function (data, textStatus, jqXHR) {
                $("#aremplir").html(data);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                //Erreur
            }
        })
    })*/


    //Navigation
    var lastScrollTop = 0;
    $(window).scroll(function(event){
        if($(window).scrollTop() < 100) {
            $('.navbar-hero').removeClass('active');
        }
        else {
            $('.navbar-hero').addClass('active');
        }
    });


});

var swiper = new Swiper('.swiper-container', {
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});


toastr.options = {
    "closeButton": false,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-bottom-right",
    "preventDuplicates": false,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}

