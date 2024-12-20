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

    $('#myAnchor-1').removeClass("active");
    $('#myAnchor-1').removeClass("show");
    $('#myAnchor-2').removeClass("active");
    $('#myAnchor-2').removeClass("show");
    $('#myAnchor-3').removeClass("active");
    $('#myAnchor-3').removeClass("show");
});
