/**
 * Intro Video Controls
 * Adds Play/Pause functionality with button UI updates
 */

(function ($) {
    "use strict";

    $(document).ready(function () {
        var video = document.getElementById('hero-video');
        var playBtn = document.getElementById('play-pause-btn');

        if (video && playBtn) {
            var $container = $('.video-hero-container');
            var $btnIcon = $(playBtn).find('i');

            // Initialize state
            if (video.paused) {
                $container.addClass('is-paused');
                $btnIcon.removeClass('fa-pause').addClass('fa-play');
            } else {
                $container.removeClass('is-paused');
                $btnIcon.removeClass('fa-play').addClass('fa-pause');
            }

            // Toggle play/pause on button click
            playBtn.addEventListener('click', function (e) {
                e.preventDefault();
                if (video.paused) {
                    video.play();
                } else {
                    video.pause();
                }
            });

            // Handle video tag native events
            video.addEventListener('play', function () {
                $btnIcon.removeClass('fa-play').addClass('fa-pause');
                $container.removeClass('is-paused');
            });

            video.addEventListener('pause', function () {
                $btnIcon.removeClass('fa-pause').addClass('fa-play');
                $container.addClass('is-paused');
            });

            video.addEventListener('ended', function () {
                $btnIcon.removeClass('fa-pause').addClass('fa-play');
                $container.addClass('is-paused');
            });
        }
    });

})(jQuery);
