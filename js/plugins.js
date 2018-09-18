$(document).ready(
function(){
    $('.carousel').carousel({ //عشان يتحكم فى وقت تقليب الصور
        interval:5000
    });
    $('html').niceScroll();
    $('.tool-box .gear-check').click(
    function(){
        $('.tool-box .color-option').fadeToggle(); // دى عشان لو اتك عليها مرة تظهر ولو اتك مرة كمان تختفى
    });
    
    // change theme color on click
    
    $('.color-option ul li').eq(0).css('backgroundColor','#E41b17').end()
    .eq(1).css('backgroundColor','#17e4c9').end()
    .eq(2).css('backgroundColor','#009AFF').end()
    .eq(3).css('backgroundColor','#E426D5').end();
    
    $('.color-option ul li').click(function(){
        
        $('link[href*="theme"]').attr('href',$(this).attr('data-value'));
    });
});

// When Page IS Loading

$(window).load(function(){
    
    $('.cssload-fond').fadeOut(1600,function(){
        $('body').css("overflow","auto");
        $('.loading-overlay').fadeOut(function(){
            $(this).remove();
        });
    });
});

$(window).scroll(function(){
    if($(this).scrollTop()>=700){
        $('#scroll-top').show();
    }
    else{
        $('#scroll-top').hide();
    }
});

$('#scroll-top').click(function(){
        $('html,body').animate({scrollTop:0},600);
    });