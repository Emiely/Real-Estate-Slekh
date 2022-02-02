$(document).ready(function(){
    //navbar togglar
    $('.navbar-toggler').on('Click',function(){
        $('nav .one').toggleClass('top');
        $('nav .tow').toggleClass('botom');
        $('nav .three').toggleClass('hidden');

    })
    //smoth scroll
$('nav li a').on('click', function(){
    $('html, body').animate({
        
        scrollTop : $('#' + $(this).data('scroll')).offset().top})
      
    
})






})