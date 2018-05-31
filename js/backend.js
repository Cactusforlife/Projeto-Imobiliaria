$(document).ready(function() {

  $('.btn-requests-ftr').click(function() {
    $('.requests-feature').slideToggle(500);
  });

  $('.open-manager-register').click(function() {
    $('.manager-register').slideToggle(500);
  });

  $('.btns-tab').click(function() {
    let tab_class = $(this).attr('data-tab');

    $('.btns-tab').removeClass('current');
    $('.immobiles-tabcontent').removeClass('current');

    $(this).addClass('current');
    $("#" + tab_class).addClass('current');

  });
});
