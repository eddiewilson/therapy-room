	<div name="section-four" id="five">
		<div class="container foot">
			<div class="row">
				<div class="twelvecol">
					<h2>Contact Us</h2>
				</div>
			</div>
		</div>
		<div class="container foot">
			<div class="row">
				<div class="threecol">
					<div class="address">	
						<h4>Address</h4>
							<ul>
								<li>The Therapy Room</li>
								<li>1 The Piazza</li>
								<li>Crockwell Street</li>
								<li>Bodmin</li>
								<li>Cornwall</li>
								<li>PL31 2DR</li>
							</ul>
					</div>
					
				</div>
				<div class="threecol hours">
					<h4>Hours</h4>
						<ul>
							<li>Mon: <span>9am-5pm</span></li>
							<li>Tues: <span>9am-5pm</span></li>
							<li>Wed: <span>9am-5pm</span></li>
							<li>Thur: <span>9am-5pm</span></li>
							<li>Fri: <span>9am-5pm</span></li>
							<li>Sat: <span>Closed</span></li>
							<li>Sun: <span>Closed</span></li>	
						</ul>
				</div>
				<div class="threecol last">
					<h4>Phone/Email</h4>
						<ul>
							<li>01208 760 09</li>
						</ul>
						<a href="mailto:thetherapyroombodmin@gmail.com">
				thetherapyroombodmin@gmail.com</a>
				<div id="footer_social">
					<h4>Social</h4>
						<ul>
							<li><a href="http://www.facebook.com/pages/The-therapy-room/183139525066263">Facebook</a></li>
						</ul>
					</div>
				</div>		
				</div>		
			</div>
		</div>
</body>

<!--Scroll Javascript-->
	
<script type="text/javascript">
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	}); 
</script>

<script src='./assets/moment.min.js'></script>
	<script src='./assets/fullcalendar.js'></script>
	<script src='./assets/gcal.js'></script>
			<!-- Google Calendar -->
			<script>

	$(document).ready(function() {
	
		$('#calendar').fullCalendar({
		
			// Therapy Room Calendar
			events: 'https://www.googleapis.com/calendar/v3/calendars/therapyroombodmin%40gmail.com/events?key=AIzaSyCtD7erbLTgfDInll7rME6V7tzQpsqJPow',
			
			eventClick: function(event) {
				// opens events in a popup window
				window.open(event.url, 'gcalevent', 'width=700,height=300');
				return false;
			},
			
			loading: function(bool) {
				$('#loading').toggle(bool);
			},
			
			hiddenDays: [ 0 ],
			
			defaultView: 'basicWeek',
			
			displayEventEnd: {
				month: false,
				basicWeek: true,
				'default': true
			},
			
			titleFormat: {
				month: 'MMMM', // September 2009
				week: "MMMM", // Sep 13 2009
				day: 'MMMM'  // September 8 2009
			},
			
			columnFormat: {
				month: 'dd',    // Mon
				week: 'ddd D', // Mon 9/7
				day: 'dd '      // Monday
			},
			
			timeFormat: 'h:mm',
			
			header: {
				left: 'title',
				center: '',
				right: ''
			}
			
		});
		
	});

</script>
	
	<!-- Google Maps -->
	
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<script type="text/javascript">
				function initialize() {
					var latlng = new google.maps.LatLng(50.471805,-4.718825);
					var settings = {
						zoom: 17,
						scrollwheel: false,
						center: latlng,
						mapTypeControl: false,
						mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
						navigationControl: false,
						navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
						mapTypeId: google.maps.MapTypeId.ROADMAP};
						
					var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
					
					
						
					var TherapyStyles = [ { featureType: "road.arterial", stylers: [ { hue: "#0800ff" }, { gamma: 0.77 }, { saturation: -99 }, { lightness: -19 } ] },{ featureType: "road.local", stylers: [ { hue: "#00ff77" }, { visibility: "on" }, { lightness: -44 }, { saturation: -98 }, { gamma: 3.51 } ] },{ featureType: "poi", stylers: [ { visibility: "off" } ] },{ featureType: "transit", stylers: [ { visibility: "off" } ] },{ featureType: "landscape.man_made", stylers: [ { visibility: "simplified" } ] },{ } ]									
					map.setOptions({styles: TherapyStyles});
										
					var companyLogo = new google.maps.MarkerImage('',
						new google.maps.Size(300,300),
						new google.maps.Point(0,0),
						new google.maps.Point(50,50)
					);
					var companyShadow = new google.maps.MarkerImage('',
						new google.maps.Size(300,300),
						new google.maps.Point(0,0),
						new google.maps.Point(31, 26)
					);
					var companyPos = new google.maps.LatLng(50.471805,-4.718825);
					var companyMarker = new google.maps.Marker({
						position: companyPos,
						map: map,
						icon: companyLogo,
						shadow: companyShadow,
						title:"Company Title"
					});
				}
			</script>
			
	

			
</html>