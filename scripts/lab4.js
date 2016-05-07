$(function () {
  $('header, div.footer').hide().fadeIn();
  $('div.container').hide().delay(250).fadeIn();

  $('button.button_panel').on('click', function(){
    var $this = $(this);
    var link = $this.attr('data-src');
    var $content = $('iframe#content');

    $('button.active').removeClass('active');
    $this.addClass('active');

    $content.fadeOut('fast').attr('src', link).fadeIn('slow');
  });
});
