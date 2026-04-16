/**
 * Intro Video Controls
 * Adds Play/Pause functionality with button UI updates
 */

(function($) {
    "use strict";

    $(document).ready(function() {
        var video = document.getElementById('hero-video');
        var playBtn = document.getElementById('play-pause-btn');
        var btnIcon = $('#play-pause-btn i');

        if (video && playBtn) {
            
            // Toggle play/pause on button click
            playBtn.addEventListener('click', function() {
                if (video.paused) {
                    video.play();
                    btnIcon.removeClass('fa-play').addClass('fa-pause');
                } else {
                    video.pause();
                    btnIcon.removeClass('fa-pause').addClass('fa-play');
                }
            });

            // Handle video tag native events (in case user uses right click or browser controls)
            video.addEventListener('play', function() {
                btnIcon.removeClass('fa-play').addClass('fa-pause');
            });

            video.addEventListener('pause', function() {
                btnIcon.removeClass('fa-pause').addClass('fa-play');
            });
        }
    });

})(jQuery);
