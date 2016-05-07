$(function () {
  $('.slider').each(function() {                      // For every slider
    var $this = $(this);                            // Get current slider
    var $group = $this.find('.slide-group');        // Get slide group
    var $slides = $this.find('.slide');             // jQuery object to hold all slides
    var buttonArray = [];                           // Create array to hold nav buttons
    var currentIndex = 0;                           // Index number of the current slide
    var timeout;                                    // Used to store timer

    function move(newIndex) {       // Creates the slide from old to new one
        var animateLeft, slideLeft;
        advance();

        // If the current slide is showing ot a slide is animating do nothing
        if ($group.is(':animated') || currentIndex === newIndex)
            return;

        buttonArray[currentIndex].removeClass('active');        // Remove class from item
        buttonArray[newIndex].addClass('active');               // Add class to new item

        if (newIndex > currentIndex) {              // If new item > current
            slideLeft = '100%';                     // Sit the new slide to the right
            animateLeft = '-100%';                  // Animate the current group to the left
        }
        else {                                      // Otherwise
            slideLeft = '-100%';                    // Sit the new slide to the left
            animateLeft = '100%';                   // Animate the current group to the right
        }

        // Position new slide to left (if less) or right (if greater) of current
        $slides.eq(newIndex).css({left: slideLeft, display: 'block'});
        $group.animate( {left: animateLeft}, function() {               // Animate slides and
            $slides.eq(currentIndex).css({display: 'none'});            // hide previous slide
            $slides.eq(newIndex).css({left: 0});                        // Set position of new item
            $group.css( {left: 0} );                                    // Set position of group of slides
            currentIndex = newIndex;
        });
    }

    function advance() {                // Sets a timer between slides
        clearTimeout(timeout);          // Clear timer stored in timeout
        timeout = setTimeout(function() {
            if (currentIndex < ($slides.length -1))      // If not the last slide
                move(currentIndex + 1);                 // Move to next slide
            else                                        // Otherwise
                move(0);                                // Move to first slide
        }, 4000);
    }

    $.each($slides, function(index) {
        // Create a button element for the button
        var $button = $('<button type="button" class="slide-btn">&bull;</button>');
        if (index === currentIndex)                 // If index is the current item
            $button.addClass('active');             // Add the active class
        $button.on('click', function() {            // Create event handler for the button
            move(index);                            // Call the move() function
        }).appendTo('.slide-buttons');              // Add to the buttons holder
        buttonArray.push($button);                  // Add it to the buttons array
    });

    advance();
  });

  var $slideButtons = $('.slide-btn');

  for (var i = 0; i < $slideButtons.length; i++)
  {
    $($slideButtons[i]).addClass('btn-' + (i+1));
    $($slideButtons[i]).html(i+1);
  }
});
