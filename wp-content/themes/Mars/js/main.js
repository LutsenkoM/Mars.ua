$(document).ready(function () {

    //SLIDER
    var articleDiv= $('.article-div .item');

    $('.dots .item').on('click', function () {
        var dot = $(this).index();

        $(this).addClass('active');
        $(this).siblings().removeClass('active');

        articleDiv.hide();
        articleDiv.eq(dot).slideDown(600);
    });

    //SLIDER END

    //'SHOW MORE' BUTTON
    var spanText = $('#view-text span');

    $('#hover-div').hover(function() {
        spanText.fadeOut(200, function() {
            spanText.text('Show more').fadeIn(200);
        })
    }, function() {
        spanText.fadeOut(200, function() {
            spanText.text('Show less').fadeIn(200);
        })
    });
    //'SHOW MORE' BUTTON END


    //SHOW TEXT
    $('.click').on('click', function () {
        $(this).parent().find("h2").toggleClass("h-two");
        $(this).parent().find("p").slideToggle(500);
        // $(this).parent().find('h2').fadeOut(300).css('font-size','40px').fadeIn(300);
        // if ($('p').is(':visible')) {
        //     $(this).parent().find('h2').css('font-size','40px');
        // } else {
        //     $(this).parent().find('h2').css('font-size','50px');


    });
    //SHOW TEXT END

    //MENU
    $('#button-menu').on('click', function () {
        $('.menu').slideToggle(500).css('position' , 'fixed');
        // $(this).css('position' , 'fixed');
        // $(window).on('click'), function () {
        //     $('.menu').hide();
        // }
    })
    //MENU END

});
// READY END

$('.block').hover(function() {
    $('.text').text('show less');
}, function() {
    $('.text').text('show more');
});


// $('.owl-carousel').owlCarousel({
//     loop:true,
//     margin:0,
//     nav:false,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:1
//         },
//         1000:{
//             items:1
//         }
//     }
// })

// $('.hideComments').click(function () {
//     var comments = $('.comments');
//     if (!comments.is(':visible')) {
//         comments.slideDown('normal', function () {
//             $('.hideComments').text('Hide comments');
//         });
//     } else {
//         comments.slideUp('normal', function () {
//             $('.hideComments').text('Show comments');
//         });
//     }
// });