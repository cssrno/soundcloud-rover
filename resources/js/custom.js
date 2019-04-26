/**
 * @package      Theme pour le SoundCloud ROVER
 *
 * @version      0.1.0
 * @copyright    Copyright (C) 2019. All rights reserved.
 * @license      Apache-2.0
 * @author       Louison Chevalier
 **/
$(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-container');
$(document).pjax('[data-pjax-toggle] a, a[data-pjax-toggle]', '#pjax-container', {push : false});

$(document).ready(function () {
    $('#app').on('click', 'a.chanson', function (e) {
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
        window.location.href = "/recherche/"+e.target.elements[0].value;
    });

    //Test Ajax
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
    })

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

