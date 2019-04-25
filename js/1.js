$(document).ready(function() {
    new WOW().init();
    // viết  cho hiệu ứng filter danh mục
    $('.sanpham ').isotope({
        itemSelector: '.khoi_sp'
    });
    $('.danhmuc ul li a').click(function(e) {
        e.preventDefault();
        var danhmuc = $(this).data('danhmuc');
        var ten = $(this).text();
        console.log(danhmuc);
        if (danhmuc == 'all') {
            $('.sanpham').isotope({
                filter: '*'
            })
        } else {
            $('h1.td_sp').text(ten);
            $('.sanpham').isotope({
                filter: danhmuc
            })
        }

    });
    // viết cho hiệu ứng nút like 
    $('.khoi_ic li a.icon').click(function(e) {
        e.preventDefault();
        $(this).toggleClass('active');
    });
    //  viết cho hiệu ứng scrollspy
    $('body,html').scrollspy({
        target: '.header'
    });
    $('.croll').click(function(e) {
        e.preventDefault();
        console.log('çlick chua');
        var vitri = $(this).attr('href');
        var toado = $(vitri).offset().top;
        $('body,html').animate({
            scrollTop: toado
        }, 2000, "easeInOutBack")
    });

    // het hieu ung scrollspy
    // viet hieu ung cho thanh header   
    $('.header').slideUp();
    $(window).scroll(function() {
        var truot = $('body,html').scrollTop();

        if (truot > 0) {
            $('.header').slideDown();
            $('.header').addClass('bienhinh');
        } else {

            $('.header').removeClass('bienhinh');
        }
    });
    // viet hieu ung truot cho nut back
    $(window).scroll(function() {

        var vt = $('body,html').scrollTop();
        if (vt > 600) {
            $('a.nutback').addClass('hienra');
        } else {
            $('a.nutback').removeClass('hienra');
        }

    });
    $('a.nutback').on('click', function(e) {
        e.preventDefault();
        $('body,html').animate({ scrollTop: 0 }, 2000, "easeInOutBack");

    });

});