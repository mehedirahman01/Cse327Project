# Maps Controller

Handle Homepage functionalities

## Maps View


Returns the view of map

> Example request:

```bash
curl -X GET \
    -G "http://localhost/map" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/map"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/map',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Locate the user</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
<script src="https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.css" rel="stylesheet" />
<style>
	body { margin: 0; padding: 0; }
	#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>
</head>
<body>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
    <link
    rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css"
    type="text/css"
    />
    <!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
<div id="map"></div>
<script>

	//mapboxgl.accessToken = 'sk.eyJ1IjoibWVoZWRpMDEiLCJhIjoiY2tqdjhxNG04MDZpNDJ3b2FpYXE2YmxqaiJ9.CfzO5t8rZd-w_NoOCSSswQ';
	mapboxgl.accessToken='pk.eyJ1IjoibWVoZWRpMDEiLCJhIjoiY2tqdjd2ZHp0MnllZzJ5cW5ndjlrMjhnbSJ9.2-45lm_cXiPkhoD48g-Kxg';
	var map = new mapboxgl.Map({
		container: 'map', // container id
		style: 'mapbox://styles/mapbox/streets-v11',
		center: [0, 0], // starting position
		zoom: 12 // starting zoom
	});

	// Add geolocate control to the map.
	var geolocate = new mapboxgl.GeolocateControl({
		positionOptions: {
			enableHighAccuracy: true
		},
		trackUserLocation: false
	});
	// Add the control to the map.
	map.addControl(geolocate);
	map.on('load', function() {
		geolocate.trigger();
		geolocate.on('geolocate', function(position) {
  	console.log(`latitude: ${position.coords.latitude}, longitude: ${position.coords.longitude}`);
  	var marker = new mapboxgl.Marker() // initialize a new marker
    	.setLngLat([position.coords.longitude, position.coords.latitude]) // Marker [lng, lat] coordinates
    	.addTo(map);
    var geocoder = new MapboxGeocoder({ // Initialize the geocoder
    	accessToken: 'pk.eyJ1IjoibWVoZWRpMDEiLCJhIjoiY2tqdjd2ZHp0MnllZzJ5cW5ndjlrMjhnbSJ9.2-45lm_cXiPkhoD48g-Kxg', // Set the access token
     	//placeholder: 'Search for pharmacies',
    	mapboxgl: mapboxgl, // Set the mapbox-gl instance
    	marker: false, // Do not use the default marker style
      	placeholder: 'Search for pharmacies', // Placeholder text for the search bar
      	bbox: [position.coords.longitude-0.2, position.coords.latitude-0.2, position.coords.longitude+0.2, position.coords.latitude+0.2], // Boundary for Berkeley
      	proximity: {
        	longitude: position.coords.longitude,
        	latitude: position.coords.latitude
      	}
	});

    // Add the geocoder to the map
    map.addControl(geocoder);

    map.addSource('single-point', {
        type: 'geojson',
        data: {
          type: 'FeatureCollection',
          features: []
        }
});

	map.addLayer({
  		id: 'point',
  		source: 'single-point',
  		type: 'circle',
  		paint: {
    		'circle-radius': 10,
    		'circle-color': '#448ee4'
  		}
});

	geocoder.on('result', function(e) {
    map.getSource('single-point').setData(e.result.geometry);
});
});
});
</script>

</body>
</html>

```
<div id="execution-results-GETmap" hidden>
    <blockquote>Received response<span id="execution-response-status-GETmap"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETmap"></code></pre>
</div>
<div id="execution-error-GETmap" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETmap"></code></pre>
</div>
<form id="form-GETmap" data-method="GET" data-path="map" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETmap', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETmap" onclick="tryItOut('GETmap');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETmap" onclick="cancelTryOut('GETmap');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETmap" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>map</code></b>
</p>
</form>



