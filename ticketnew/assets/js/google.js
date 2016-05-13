var geocoder;
var map;

function initialize(address) {
   geocoder = new google.maps.Geocoder();

   geocoder.geocode( {'address': address },
	  function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			firstLoc = results[0].geometry.location;
			map = new google.maps.Map(document.getElementById("map"),
			{
				center: firstLoc,
				zoom: 14,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});

			marker = new google.maps.Marker({
				map: map,
				title: results[0]['formatted_address'],
				position: results[0].geometry.location,
				animation: google.maps.Animation.DROP
			});
		}
	  }
	);

	
}
