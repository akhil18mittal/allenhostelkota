/**
 * Room Gallery Image Zoom
 * Target: Images inside #rooms-section cards
 * Library: Magnific Popup
 */

(function($) {
    "use strict";

    $(document).ready(function() {
        // Only proceed if Magnific Popup is loaded
        if ($.fn.magnificPopup) {
            
            // Selector for the room images
            var $roomImages = $('.blog-wrp-layout1 .image-box img');


            $roomImages.on('click', function() {
                var items = [];
                var startIdx = 0;
                var clickedSrc = $(this).attr('src');
                
                // Collect all room images into a gallery
                $roomImages.each(function(idx) {
                    var src = $(this).attr('src');
                    var title = $(this).attr('alt') || 'Room Image';
                    
                    items.push({
                        src: src,
                        title: title
                    });

                    // Set starting index to the clicked image
                    if (src === clickedSrc) {
                        startIdx = idx;
                    }
                });
                
                // Open Magnific Popup
                $.magnificPopup.open({
                    items: items,
                    type: 'image',
                    gallery: {
                        enabled: true,
                        navigateByImgClick: true,
                        preload: [0, 1] // Preload nearby images
                    },
                    image: {
                        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                        titleSrc: function(item) {
                            return item.title;
                        }
                    },
                    mainClass: 'mfp-fade mfp-img-mobile',
                    removalDelay: 300, // Sync with CSS transition
                }, startIdx);
            });
        }
    });

})(jQuery);
