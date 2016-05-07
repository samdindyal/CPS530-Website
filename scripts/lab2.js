$('a.navbar-element').on('click', function(e) {
  e.preventDefault();
  var $this = $(this);
  $('a.navbar-element.current').removeClass('current');
  $this.addClass('current');
  $('div.content-viewer').fadeOut('fast', function() {

    if($this.attr('href') === '../../img/lab2img.jpg')
      $('div.content-viewer').html('<img src="' + $this.attr('href') + '"/>');
    else
      $('div.content-viewer').html('<iframe id="viewer" src="' + $this.attr('href') + '"></iframe>');
    $('div.content-viewer').fadeIn('fast');
  });
});

$('tr.task').on('mouseenter', function() {
  var children = $(this).children();
  $(children[0]).css({
    "color": "#0086ed"
  });
  $(children[1]).css({
    "color": "#ade5ff"
  });
});

$('tr.task').on('mouseleave', function() {
  var children = $(this).children();
  $(children[0]).css({
    "color": "#ade5ff"
  });
  $(children[1]).css({
    "color": "white"
  });
});
