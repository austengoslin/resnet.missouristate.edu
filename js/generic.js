var bannerTime = 5000;

function hideMenu() {
    $(this).find('ul').css({visibility: 'hidden'});
    if ($(this).hasClass('a')) {
        $(this).removeClass('a');
    }
    setTimeout("Cufon.replace('#main-menu > ul > li > a')", 100);
}

function showInputError(elem) {
    var err = $(elem).siblings('.error-message');
    if (err.length > 0) {
        var w = $(elem).outerWidth(),
            h = $(elem).outerHeight(),
            o = $(elem).offset(),
            eh = err.outerHeight();
            
        err.css({
            top: o.top + (h / 2) - (eh / 2) + 'px',
            left: o.left + w + 10 + 'px'
        }).fadeIn();
    }
}

function hideInputError(elem) {
    $(elem).siblings('.error-message:visible').fadeOut();
}

function bannerSlider() {
    if ($('#banner-1 .slider li').length > 0) {
        var curr = $('#banner-1 .slider li.active');
        if (curr.next().length > 0) {
            curr.next().first().click();
        } else {
            curr.parent().children().first().click();
        }
        setTimeout('bannerSlider();', bannerTime);
    }
}

function formSubmit() {
        $(this).find('input, textarea').blur();
        
        if ($(this).find('.error-message:visible').length <= 0) {
            $.post('mail.php', $(this).serialize(), function (data) {
                $('.form form').fadeOut(200);
                $('.form .confirm-message').html(data);
            });
        }
        
        return false;
    }

$(document).ready(function () {
    $('#main-menu > ul > li').hover(function () {
        $(this).addClass('a');

        Cufon.replace('#main-menu > ul > li > a');

        if ($(this).has('ul')) {
            var ul = $(this).find('ul').first();
            var h = $(this).innerHeight();
            
            ul.css({
                top: h + 'px',
                left: '0px',
                visibility: 'visible',
                display: 'none'
            }).slideDown(200);
        }
    }, hideMenu);
    
    $('#main-menu ul ul li.sub-item:has(ul)').hover(function () {
        var ul = $(this).find('ul').first();
        var w = $(this).outerWidth();
        var t = $(this).position().top;
        
        if ($.browser.msie == true && parseFloat($.browser.version) == 6) {
            t = 0;
        }
        
        ul.css({
            top: t + 'px',
            left: w + 'px',
            visibility: 'visible',
            display: 'none'
        }).slideDown(200);
    }, hideMenu);
    
    $('#banner-1 .slider li').click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        Cufon.replace('#banner-1 .slider a');
        $('#banner-1 .frame img').hide();
        $('#banner-1 #' + $(this).find('a').attr('rel')).fadeIn(200);
    });
    
    $('#content .slide .sliders div').click(function () {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');
        $(this).parent().parent().find('img').hide();
        $(this).parent().parent().find('#' + $(this).find('a').attr('rel')).fadeIn(200);
    });
    
    $('#footer .contact .mail').click(function () {
        window.location.href = $(this).find('a').attr('href');
    });
    
    $('li:has(a)').not('.toggle-1 li, .toggle-2 li, .tabs-1 li, .tabs-2 li').click(function () {
        var a = $(this).find('a').first();
        if (a.attr('href') != undefined) {
            window.location.href = a.attr('href');
        }
        
    });
    
    $('.toggle-1 li > span, .toggle-2 li > span').click(function () {
        if (!$(this).parent().hasClass('active')) {
            $(this).parent().siblings('.active').removeClass('active').children('div').slideUp();
            $(this).parent().addClass('active').children('div').slideDown();
        }
    });
    
    $('.tabs-1 > ul > li, .tabs-2 > ul > li').click(function () {
        if (!$(this).hasClass('active')) {
            $(this).siblings('.active').removeClass('active');
            $(this).addClass('active');
            $(this).parent().siblings('div').hide();
            $('#' + $(this).find('a').attr('rel')).show();
        }
    });
    
    $('#search input').focus(function () {
        if ($(this).val() == 'Search') {
            $(this).val('');
        }
    }).blur(function () {
        if ($(this).val() == '') {
            //$(this).val('Search');
        }
    });
    
    // validation
    $('.form .input input, .form .input textarea').blur(function () {
        var name = $(this).attr('name');
        if (name.indexOf('email') > -1) {
            // check for email
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if (reg.test($(this).val()) == false) {
                showInputError(this);
            } else {
                hideInputError(this);
            }
        } else if ($(this).val() == '') {
            showInputError(this);
        } else {
            hideInputError(this);
        }
    });
    
    //$('.form form .submit button').click(function (e) {
    //    $(this).parents('form').first().submit();
    //});
    //
    $('.form form').submit(formSubmit);
    
    setTimeout('bannerSlider();', bannerTime);
    
    
    $("a[rel^='prettyPhoto']").prettyPhoto();
    
    $('#footer .contact .mail').click(function () {
        window.location.href = $(this).find('a').attr('href');
    })
});