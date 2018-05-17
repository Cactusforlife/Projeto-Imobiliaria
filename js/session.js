$(document).ready(function() {

  /*MODALS PARA A SESSION_BOX*/
  $('#open-modal-login').click(function() {
    $('.modal-login').fadeIn(500).css({display: 'flex'});
  });

  $('#close-modal-login').click(function() {
    $('.modal-login').fadeOut(500).css({display: 'none'});
  });

  $('#open-modal-register').click(function() {
    $('.modal-register').fadeIn(500).css({display: 'flex'});
  });

  $('#close-modal-register').click(function() {
    $('.modal-register').fadeOut(500).css({display: 'none'});
  });
  /*FIM MODALS PARA A SESSION_BOX*/

});
