$('td').on('mouseenter', function(e) {
  $(this).parent().children().addClass('active');
  var index = $(this).index();
  var $rows = $('tr');

  for (var i = 0; i < $rows.size(); i++)
    $($($rows[i]).children()[index]).addClass('active');

  var y = $(this).parent().index();
  var x = index;
  $('span.answer').stop().fadeIn().html(x + ' * ' + y + ' = ' + x*y);
});

$('td').on('mouseleave', function(e) {
  $(this).parent().children().removeClass('active');
  var index = $(this).index();
  var $rows = $('tr');

  for (var i = 0; i < $rows.size(); i++)
    $($($rows[i]).children()[index]).removeClass('active');
  $('span.answer').stop().fadeOut().stop().fadeIn().html('<br>');
});

$('th.y').on('mouseenter', function(e){
  $(this).parent().children().addClass('active');
});

$('th.y').on('mouseleave', function(e){
  $(this).parent().children().removeClass('active');
});

$('th.x').on('mouseenter', function(e){
  var index = $(this).index();
  var $rows = $('tr');

  for (var i = 0; i < $rows.size(); i++)
    $($($rows[i]).children()[index]).addClass('active');
});

$('th.x').on('mouseleave', function(e){
  var index = $(this).index();
  var $rows = $('tr');

  for (var i = 0; i < $rows.size(); i++)
    $($($rows[i]).children()[index]).removeClass('active');
});

$('select').on('change', function() {
  $('form').submit();
});
