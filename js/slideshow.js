$(document).on('ready', function() {
  $('.carousel.lazy').find('.item img[data-src]').each(function() {
    item = $(this);
    item.attr("src", item.data("src"));
    item.removeAttr('data-src');
  })
});
