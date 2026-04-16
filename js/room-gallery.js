(function($) {
    "use strict";

    $(document).ready(function() {
        if ($.fn.magnificPopup) {
            
            // Define Image Sets for each Room Category
            var roomGalleries = {
                0: [ // Deluxe Single Room with Window
                    { src: 'img/gallery/Deluxe Single Room.jpg', title: 'Deluxe Single Room' },
                    { src: 'img/gallery/deluxe single room 2.jpg', title: 'Room View' },
                    { src: 'img/gallery/deluxe single room 3.jpg', title: 'Room Interior' },
                    { src: 'img/gallery/deluxe_single_room.jpg', title: 'Comfortable Stay' },
                    { src: 'img/gallery/deulxe_single_room2.jpg', title: 'Window View' },
                    { src: 'img/gallery/delux washroom.jpg', title: 'Attached Washroom' }
                ],
                1: [ // Standard Single Room
                    { src: 'img/gallery/deluxe single room 1.jpg', title: 'Standard Single Room' },
                    { src: 'img/gallery/standard_single_room_1.jpg', title: 'Single Room Interior' },
                    { src: 'img/gallery/standard_single_room_2.jpg', title: 'Room Setup' },
                    { src: 'img/gallery/deluxe bathroom.jpg', title: 'Bathroom' }
                ],
                2: [ // Deluxe Double Room with Window
                    { src: 'img/gallery/deluxe double room.jpg', title: 'Deluxe Double Room' },
                    { src: 'img/gallery/delux double room with window 2.jpg', title: 'Double Room Interior' },
                    { src: 'img/gallery/washroom pic 2.jpg', title: 'Washroom Interior' }
                ],
                3: [ // Standard Double Room
                    { src: 'img/gallery/double room 1.jpg', title: 'Standard Double Room' },
                    { src: 'img/gallery/double room 2.jpg', title: 'Room Interior' },
                    { src: 'img/gallery/doubl room bathroom.jpg', title: 'Attached Washroom' },
                    { src: 'img/gallery/deluxe double room 2.jpg', title: 'Standard Double Room View' }
                ]

            };

            var $roomCards = $('.blog-wrp-layout1');

            $roomCards.each(function(index) {
                var $img = $(this).find('.image-box img');
                
                $img.on('click', function() {
                    var items = roomGalleries[index];
                    
                    if (items && items.length > 0) {
                        $.magnificPopup.open({
                            items: items,
                            type: 'image',
                            gallery: {
                                enabled: true,
                                navigateByImgClick: true,
                                preload: [0, 1]
                            },
                            image: {
                                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                                titleSrc: function(item) {
                                    return item.title;
                                }
                            },
                            mainClass: 'mfp-fade mfp-img-mobile',
                            removalDelay: 300
                        }, 0); // Always start from the first image in the set
                    }
                });
            });
        }
    });

})(jQuery);

