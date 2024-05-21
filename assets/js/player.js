// Check if it's playing the music
var play = false;

// Button's
var playBtn = $("#play");
var pauseBtn = $("#pause");

// Get current time
var getTime = $("#getTime");

// Player bar
var player_bar = $("#play-bar");

// Music ou audio of user
var audio = $('#myAudio');

// Show button
playBtn.show();

// Play control
$(playBtn).click(function(){
    pauseBtn.show(300);
    playBtn.hide(150);
    getTime.show(300);
    play = true;
    audio.get(0).play();
});

// Pause control
$(pauseBtn).click(function(){
    pauseBtn.hide(150);
    playBtn.show(300);
    getTime.hide(150);
    play = false;
    audio.get(0).pause();
});

// Get current second's of audio in real timer
function audioTracker(element){
    var tracker = Math.floor(element.duration) - Math.floor(element.currentTime);
    // Format seconds
    if(tracker < 10){
        getTime.text('00:0' + tracker);
    }else{
        getTime.text('00:' + tracker);
    }
}

// Show or hide player audio music using hover 
$(player_bar).hover(function(){
    $(this).css("opacity", 1);
}, function(){
    // If play == true the player will be visible
    if(play == true){
        $(this).css("opacity", 1);
    }else{
        $(this).css("opacity", 0);
    }
});