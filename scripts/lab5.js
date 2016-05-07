$(function() {
  $('a.nav-btn').on('click', function(e){
    e.preventDefault();
    $('a.current.nav-btn').removeClass('current');
    $(this).addClass('current');
    if (parseInt($(this).html().slice(-1)) == 1)
      $('div.container').fadeOut().load(this.href + ' div.content_window').fadeIn();
    else
      $('div.container').fadeOut().html('<iframe class="viewer" src="' + this.href + '"></iframe>').fadeIn();
  });

})
