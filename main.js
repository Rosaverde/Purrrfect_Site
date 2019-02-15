var video = $("#BackVid");

var WindowWidth = $(window).width();

if (WindowWidth < 900) {
    //It is a small screen
    video.text("New 900");
} else {
    //It is a big screen or desktop
    video.text("Other!!!");
} 

