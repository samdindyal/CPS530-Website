
$(function() {
  $("nav.navbar, div.footer").hide().fadeIn();
  $("div.container").hide().delay(250).fadeIn();

  $("button.btn.active").on('click', function(e){
    var link = $(this).attr('data-link');
    $('button.btn-primary').removeClass('btn-primary');
    $(this).addClass('btn-primary');
    $('div#content').fadeOut('fast').load(link + " div#content").fadeIn('fast');
    $('h1#title_text').parent().load(link + " h1#title_text");
    console.log(link);
  });

});
