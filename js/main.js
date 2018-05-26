let map;
let gMapsLoaded = false;
window.loadGoogleMaps = function() {
  if (gMapsLoaded) return window.gMapsCallback();

   let script_tag = $('<script></script>');
   script_tag.attr('type', 'text/javascript');
   script_tag.attr('src', "http://maps.google.com/maps/api/js?key=AIzaSyCxeGbO1IDl9mhaMo6vEy1IUDgDE3ABd2E&callback=gMapsCallback");
   $('head').append(script_tag);

}

window.gMapsCallback = function() {
    gMapsLoaded = true;
    $(window).trigger('gmaps-script-loaded');
}

  function initialize() {
    var mapOptions = {
      zoom: 7.4,
      center: new google.maps.LatLng(38.2883982, -28.2467441),
      mapTypeId: 'satellite'
    };
    map = new google.maps.Map($('#map').get(0), mapOptions);
  }

  /*
  Evento  que  chama  a  função  initialize()  e  que é desencadeado  dentro  da  função chamada pelo script após o seu carregamento
  */
  $(window).bind('gmaps-script-loaded', initialize);
  /*
  Chamadaà função para carregar o script do google maps.
  */
  window.loadGoogleMaps();
