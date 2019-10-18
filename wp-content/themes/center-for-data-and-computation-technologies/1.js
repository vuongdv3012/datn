$(function() {
    if ($(window).width() < 576 ) {
        $('.menu-top ul li ul').slideUp();
    }

    $('.menu-top .navbar-light .navbar-nav > li').bind('touchstart', function() {
        $(this).children('ul').slideToggle();
    });

    $('ul.tdtab li b').click(function(){
        $('ul.tdtab li b').removeClass('active');
        $(this).addClass('active');

       chiso = $(this).parent().index() + 1;
       $('ul.ndtab li .divsanpham').removeClass('xuathien');
       $('ul.ndtab li:nth-child(' + chiso + ') .divsanpham').addClass('xuathien');
    });

    //hieu ung cuon chuot
    new WOW().init();
})