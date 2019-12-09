
$(window).on('resize load', function() {
    //Extra Small
    if($(window).width() < 576) {
        $('#services-blockThree-containerLeft').removeClass('services-blockThree-containerLeft');
        $('#services-blockThree-containerLeft').addClass('services-blockThree-containerMargin');

        $('#services-blockThree-containerMiddle').removeClass('services-blockThree-containerMiddle');
        $('#services-blockThree-containerMiddle').addClass('services-blockThree-containerMargin');

        $('#services-blockThree-containerRight').removeClass('services-blockThree-containerRight');
        $('#services-blockThree-containerRight').addClass('services-blockThree-containerMargin');

        $('#site-navigation').addClass('menu-noFloat');
    }
    //Small
    if(($(window).width() >= 576) && ($(window).width() < 768)) {
        $('#services-blockThree-containerLeft').removeClass('services-blockThree-containerLeft');
        $('#services-blockThree-containerLeft').addClass('services-blockThree-containerMargin');

        $('#services-blockThree-containerMiddle').removeClass('services-blockThree-containerMiddle');
        $('#services-blockThree-containerMiddle').addClass('services-blockThree-containerMargin');

        $('#services-blockThree-containerRight').removeClass('services-blockThree-containerRight');
        $('#services-blockThree-containerRight').addClass('services-blockThree-containerMargin');

        $('#site-navigation').addClass('menu-noFloat');
    }
    //Medium
    if(($(window).width() >= 768) && ($(window).width() < 992)) {
        $('#services-blockThree-containerLeft').removeClass('services-blockThree-containerLeft');
        $('#services-blockThree-containerLeft').addClass('services-blockThree-containerMargin');

        $('#services-blockThree-containerMiddle').removeClass('services-blockThree-containerMiddle');
        $('#services-blockThree-containerMiddle').addClass('services-blockThree-containerMargin');

        $('#services-blockThree-containerRight').removeClass('services-blockThree-containerRight');
        $('#services-blockThree-containerRight').addClass('services-blockThree-containerMargin');

        $('#site-navigation').removeClass('menu-noFloat');
    }
    //Large
    if(($(window).width() >= 992) && ($(window).width() < 1200)) {
        $('#services-blockThree-containerLeft').removeClass('services-blockThree-containerMargin');
        $('#services-blockThree-containerLeft').addClass('services-blockThree-containerLeft');

        $('#services-blockThree-containerMiddle').removeClass('services-blockThree-containerMargin');
        $('#services-blockThree-containerMiddle').addClass('services-blockThree-containerMiddle');

        $('#services-blockThree-containerRight').removeClass('services-blockThree-containerMargin');
        $('#services-blockThree-containerRight').addClass('services-blockThree-containerRight');

        $('#site-navigation').removeClass('menu-noFloat');
    }
    //Extra Large
    if($(window).width() >= 1200){
        $('#services-blockThree-containerLeft').removeClass('services-blockThree-containerMargin');
        $('#services-blockThree-containerLeft').addClass('services-blockThree-containerLeft');

        $('#services-blockThree-containerMiddle').removeClass('services-blockThree-containerMargin');
        $('#services-blockThree-containerMiddle').addClass('services-blockThree-containerMiddle');

        $('#services-blockThree-containerRight').removeClass('services-blockThree-containerMargin');
        $('#services-blockThree-containerRight').addClass('services-blockThree-containerRight');

        $('#site-navigation').removeClass('menu-noFloat');
    }
})