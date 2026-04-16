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
            var $container = $('.video-hero-container');

            // Initialize state
            if (video.paused) {
                $container.addClass('is-paused');
                btnIcon.removeClass('fa-pause').addClass('fa-play');
            } else {
                $container.removeClass('is-paused');
                btnIcon.removeClass('fa-play').addClass('fa-pause');
            }
            
            // Toggle play/pause on button click
            playBtn.addEventListener('click', function() {
                if (video.paused) {
                    video.play();
                } else {
                    video.pause();
                }
            });

            // Handle video tag native events (in case user uses right click or browser controls)
            video.addEventListener('play', function() {
                btnIcon.removeClass('fa-play').addClass('fa-pause');
                $container.removeClass('is-paused');
            });

            video.addEventListener('pause', function() {
                btnIcon.removeClass('fa-pause').addClass('fa-play');
                $container.addClass('is-paused');
            });
        }
    });

})(jQuery);
