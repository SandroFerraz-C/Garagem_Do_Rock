jQuery.ready(function() {

    container = $('.container');
	cover = $('.cover');
	play = $('#play');
	pause = $('#pause');
	mute = $('#mute');
	muted = $('#muted');
	close = $('#close');
	song = new Audio('Queen - Flash.ogg','Queen - Flash.mp3');
	duration = song.duration;

    myFunc();

    


});
play.live('click', function(e) {
    e.preventDefault();
    song.play();

    $(this).replaceWith('<a class="button gradient" id="pause" href="" title=""></a>');
    container.addClass('containerLarge');
    cover.addClass('coverLarge');
    $('#close').fadeIn(300);
    $('#seek').attr('max',song.duration);
});

pause.live('click', function(e) {
    e.preventDefault();
    song.pause();
    $(this).replaceWith('<a class="button gradient" id="play" href="" title=""></a>');

});