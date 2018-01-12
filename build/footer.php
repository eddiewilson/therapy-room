<footer id="five container-fluid">
<div class="content-wrapper">
	<div class="row">
		<div class="col-12 col-md-4"><h4>Address</h4>
							<ul>
								<li>The Therapy Room</li>
								<li>1 The Piazza</li>
								<li>Crockwell Street</li>
								<li>Bodmin</li>
								<li>Cornwall</li>
								<li>PL31 2DR</li>
							</ul></div>
		<div class="col-12 col-md-4"><h4>Hours</h4>
						<ul>
							<li>Mon: <span>9am-5pm</span></li>
							<li>Tues: <span>9am-5pm</span></li>
							<li>Wed: <span>9am-5pm</span></li>
							<li>Thur: <span>9am-5pm</span></li>
							<li>Fri: <span>9am-5pm</span></li>
							<li>Sat: <span>Closed</span></li>
							<li>Sun: <span>Closed</span></li>	
						</ul></div>
		<div class="col-12 col-md-4"><h4>Phone/Email</h4>
						<ul>
							<li>01208 760 09</li>
						</ul>
						<a href="mailto:thetherapyroombodmin@gmail.com">
				thetherapyroombodmin@gmail.com</a>
			
					<h4>Social</h4>
						<ul>
							<li><a href="http://www.facebook.com/pages/The-therapy-room/183139525066263">Facebook</a></li>
						</ul></div>
						
</div>
		
					
				
			
					
					
</body>

<!-- Javascript-->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js"></script>
<script>
	AOS.init({
  duration: 800,
})
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxLqahGvb0e5awiKlcfNEv4LzAAcRbFrw&callback=initMap" async defer></script>

<script type="text/javascript">
	// var map; 
	function initMap(){
		
			var mapOptions = {
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				mapTypeControl: false,
				zoom: 16,
				zoomControl: false,
				streetViewControl: false,
				scaleControl: false,
				center: new google.maps.LatLng(50.471573, -4.71870100000001)
			};
			
			map = new google.maps.Map(document.getElementById('map'),
				mapOptions);
			
			var mapStyles = [
				{
					"featureType": "administrative",
					"elementType": "all",
					"stylers": [
						{
							"hue": "#e1dfd9"
						},
						{
							"lightness": -100
						},
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "geometry",
					"stylers": [
						{
							"hue": "#e1dfd9"
						},
						{
							"saturation": -100
						},
						{
							"lightness": -3
						},
						{
							"visibility": "on"
						}
					]
				},
				{
					"featureType": "landscape",
					"elementType": "labels",
					"stylers": [
						{
							"hue": "#000000"
						},
						{
							"saturation": -100
						},
						{
							"lightness": -100
						},
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "poi",
					"elementType": "all",
					"stylers": [
						{
							"hue": "#000000"
						},
						{
							"saturation": -100
						},
						{
							"lightness": -100
						},
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "road",
					"elementType": "geometry",
					"stylers": [
						{
							"hue": "#bbbbbb"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 26
						},
						{
							"visibility": "on"
						}
					]
				},
				{
					"featureType": "road",
					"elementType": "labels",
					"stylers": [
						{
							"hue": "#ffffff"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 100
						},
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "road.arterial",
					"elementType": "labels.text.fill",
					"stylers": [
						{
							"color": "#69ad9c"
						},
						{
							"visibility": "on"
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "all",
					"stylers": [
						{
							"hue": "#ff0000"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 100
						},
						{
							"visibility": "on"
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "labels",
					"stylers": [
						{
							"visibility": "simplified"
						}
					]
				},
				{
					"featureType": "road.local",
					"elementType": "labels.text",
					"stylers": [
						{
							"color": "#00AD84"
						}
					]
				},
				{
					"featureType": "transit",
					"elementType": "labels",
					"stylers": [
						{
							"hue": "#000000"
						},
						{
							"lightness": -100
						},
						{
							"visibility": "off"
						}
					]
				},
				{
					"featureType": "water",
					"elementType": "geometry",
					"stylers": [
						{
							"hue": "#ffffff"
						},
						{
							"saturation": -100
						},
						{
							"lightness": 100
						},
						{
							"visibility": "on"
						}
					]
				},
				{
					"featureType": "water",
					"elementType": "labels",
					"stylers": [
						{
							"hue": "#000000"
						},
						{
							"saturation": -100
						},
						{
							"lightness": -100
						},
						{
							"visibility": "off"
						}
					]
				}
			];
			
			map.setOptions({styles: mapStyles});
			
			var infoContent = '<div class="window-content"><h4>Info Window</h4><p>add your contents here</p></div>';
			
			var infowindow = new google.maps.InfoWindow({
				content: infoContent
			});
			
			var icon = {
				path: 'M16.5,33c-9.0818,0-16.5-7.119-16.5-16.327,0-9.2082,7.3873-16.673,16.5-16.673,9.113,0,16.5,7.4648,16.5,16.673,0,9.208-7.418,16.327-16.5,16.327zm0-9.462c3.7523,0,6.7941-3.0737,6.7941-6.8654,0-3.7916-3.0418-6.8654-6.7941-6.8654s-6.7941,3.0737-6.7941,6.8654c0,3.7916,3.0418,6.8654,6.7941,6.8654z',
				anchor: new google.maps.Point(16.5, 16.5),
				fillColor: '#00AD84',
				fillOpacity: 0.55,
				strokeWeight: 0,
				scale: 1.33
			};
			
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(50.471573, -4.71870100000001),
				map: map,
				icon: icon,
				title: 'marker'
			});
			
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			});
		}   
		function checkResize(){
			var center = map.getCenter();
			google.maps.event.trigger(map, 'resize');
			map.setCenter(center);
		}
		
		window.onresize = checkResize;
		// google.maps.event.addDomListener(window, 'load', initMap);

</script>
<script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
<script src="./dist/all.min.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyBqEkM2CyPBu2RqfrumvUEkCMz0AsKxkrU",
    authDomain: "gothic-depth-602.firebaseapp.com",
    databaseURL: "https://gothic-depth-602.firebaseio.com",
    projectId: "gothic-depth-602",
    storageBucket: "gothic-depth-602.appspot.com",
    messagingSenderId: "1064656998370"
  };
  firebase.initializeApp(config);
</script>


</html>