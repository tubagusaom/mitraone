var player1 = videojs("hls-example-1");
var player2 = videojs("hls-example-2");
var player3 = videojs("hls-example-3");
var player4 = videojs("hls-example-4");

$('#myAnchor-1').click(function(){
    // var buttonhref = $('#myAnchor-1').attr('href');
    // alert(buttonhref);
    
    // player1.play();
    player2.pause();
    player3.pause();
    player4.pause();
    
    $("#frame-1").attr("src","");
    $("#frame-2").attr("src","");
    $("#frame-3").attr("src","");

    $('#myAnchor-2').removeClass("active");
    $('#myAnchor-2').removeClass("show");
    $('#myAnchor-3').removeClass("active");
    $('#myAnchor-3').removeClass("show");
    $('#myAnchor-4').removeClass("active");
    $('#myAnchor-4').removeClass("show");
    
});

$('#myAnchor-2').click(function(){

    player1.pause();
    // player2.play();
    player3.pause();
    player4.pause();
    
    $("#frame-1").attr("src","");
    $("#frame-2").attr("src","");
    $("#frame-3").attr("src","");

    // player2.addClass("video-bg");
    player2.removeClass('video-bg');

    $('#myAnchor-1').removeClass("active");
    $('#myAnchor-1').removeClass("show");
    $('#myAnchor-3').removeClass("active");
    $('#myAnchor-3').removeClass("show");
    $('#myAnchor-4').removeClass("active");
    $('#myAnchor-4').removeClass("show");
});

$('#myAnchor-3').click(function(){
    
    player1.pause();
    player2.pause();
    // player3.play();
    player4.pause();
    
    $("#frame-1").attr("src","");
    $("#frame-2").attr("src","");
    $("#frame-3").attr("src","");

    // player3.addClass("video-bg");
    player3.removeClass('video-bg');

    $('#myAnchor-1').removeClass("active");
    $('#myAnchor-1').removeClass("show");
    $('#myAnchor-2').removeClass("active");
    $('#myAnchor-2').removeClass("show");
    $('#myAnchor-4').removeClass("active");
    $('#myAnchor-4').removeClass("show");
});

$('#myAnchor-4').click(function(){

    player1.pause();
    player2.pause();
    player3.pause();
    // player4.play();
    
    $("#frame-1").attr("src","");
    $("#frame-2").attr("src","");
    $("#frame-3").attr("src","");

    // player4.addClass("video-bg");
    player4.removeClass('video-bg');

    $('#myAnchor-1').removeClass("active");
    $('#myAnchor-1').removeClass("show");
    $('#myAnchor-2').removeClass("active");
    $('#myAnchor-2').removeClass("show");
    $('#myAnchor-3').removeClass("active");
    $('#myAnchor-3').removeClass("show");
});

$('#corner-1').click(function(){
    player1.pause();
    player2.pause();
    player3.pause();
    player4.pause();
    
    $("#frame-1").attr("src","https://www.youtube.com/embed/xI0N1WUk840?si=I0YrWc9VnTA4iu0e");
    $("#frame-2").attr("src","");
    $("#frame-3").attr("src","");

    $('#tabs-2-5').addClass("active");
    $('#tabs-2-5').addClass("show");

    $('#tabs-2-1').removeClass("active");
    $('#tabs-2-1').removeClass("show");
    $('#tabs-2-2').removeClass("active");
    $('#tabs-2-2').removeClass("show");
    $('#tabs-2-3').removeClass("active");
    $('#tabs-2-3').removeClass("show");
    $('#tabs-2-4').removeClass("active");
    $('#tabs-2-4').removeClass("show");
    $('#tabs-2-6').removeClass("active");
    $('#tabs-2-6').removeClass("show");
    $('#tabs-2-7').removeClass("active");
    $('#tabs-2-7').removeClass("show");
});
$('#corner-2').click(function(){
    player1.pause();
    player2.pause();
    player3.pause();
    player4.pause();
    
    $("#frame-1").attr("src","");
    $("#frame-2").attr("src","https://www.youtube.com/embed/nT6XENs5cA8?si=T_eK7M1rHoi_9YCg");
    $("#frame-3").attr("src","");

    $('#tabs-2-6').addClass("active");
    $('#tabs-2-6').addClass("show");

    $('#tabs-2-1').removeClass("active");
    $('#tabs-2-1').removeClass("show");
    $('#tabs-2-2').removeClass("active");
    $('#tabs-2-2').removeClass("show");
    $('#tabs-2-3').removeClass("active");
    $('#tabs-2-3').removeClass("show");
    $('#tabs-2-4').removeClass("active");
    $('#tabs-2-4').removeClass("show");
    $('#tabs-2-5').removeClass("active");
    $('#tabs-2-5').removeClass("show");
    $('#tabs-2-7').removeClass("active");
    $('#tabs-2-7').removeClass("show");
});
$('#corner-3').click(function(){
    player1.pause();
    player2.pause();
    player3.pause();
    player4.pause();
    
    $("#frame-1").attr("src","");
    $("#frame-2").attr("src","");
    $("#frame-3").attr("src","https://www.youtube.com/embed/xT-2XUfwX7E?si=hqVJCYeHG5I2eoh_");

    $('#tabs-2-7').addClass("active");
    $('#tabs-2-7').addClass("show");

    $('#tabs-2-1').removeClass("active");
    $('#tabs-2-1').removeClass("show");
    $('#tabs-2-2').removeClass("active");
    $('#tabs-2-2').removeClass("show");
    $('#tabs-2-3').removeClass("active");
    $('#tabs-2-3').removeClass("show");
    $('#tabs-2-4').removeClass("active");
    $('#tabs-2-4').removeClass("show");
    $('#tabs-2-5').removeClass("active");
    $('#tabs-2-5').removeClass("show");
    $('#tabs-2-6').removeClass("active");
    $('#tabs-2-6').removeClass("show");
});

// $("#corner-1").click($("#slider-tb").css(":display","block"));
