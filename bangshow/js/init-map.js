function initMap() {
	var uluru = {lat: 53.9050563, lng: 27.5371577};
	var map = new google.maps.Map(document.getElementById('map'), {
	  zoom: 16,
	  center: uluru,
	  scrollwheel: false,
	  styles: [{"featureType":"all","elementType":"geometry","stylers":[{"color":"#e5ce63"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"gamma":0.01},{"lightness":20}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"saturation":-31},{"lightness":-33},{"weight":2},{"gamma":0.8}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"lightness":30},{"saturation":30}]},{"featureType":"poi","elementType":"geometry","stylers":[{"saturation":20}]},{"featureType":"poi.attraction","elementType":"labels.text.stroke","stylers":[{"saturation":"49"},{"visibility":"simplified"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"lightness":20},{"saturation":-20}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":10},{"saturation":-30}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"saturation":25},{"lightness":25}]},{"featureType":"water","elementType":"all","stylers":[{"lightness":-20}]}]
	});
	var marker = new google.maps.Marker({
	  position: uluru,
	  map: map,
	  icon: '../img/map-marker.png'
	});
}