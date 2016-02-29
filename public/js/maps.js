
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(-0.9470295631477649,100.41926641750908),
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
