# Index Controller

Handle Homepage functionalities

## Homepage View


Returns the view of homepage

> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"newMedicines":"mollitia"}'

```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "newMedicines": "mollitia"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'newMedicines' => 'mollitia',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online pharmacy</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <link id="callCss" rel="stylesheet" href="http://localhost/css/front.min.css" media="screen"/>
  <link href="http://localhost/css/base.css" rel="stylesheet" media="screen"/>
  <link href="http://localhost/js/google-code-prettify/prettify.css" rel="stylesheet"/>
  <!-- Front style responsive -->
  <link href="http://localhost/css/front-responsive.min.css" rel="stylesheet"/>
  <link href="http://localhost/css/font-awesome.css" rel="stylesheet" type="text/css">

  <style type="text/css" id="enject"></style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="http://localhost/js/jquery.js" type="text/javascript"></script>
  <script src="http://localhost/js/front.min.js" type="text/javascript"></script>
  <script src="http://localhost/js/google-code-prettify/prettify.js"></script>
  <script src="http://localhost/js/front.js"></script>
  <script src="http://localhost/js/jquery.lightbox-0.5.js"></script>
  </head>
  <style>

/* Remove the navbar's default rounded borders and increase the bottom margin */
.navbar {
    border-radius: 0;
    margin-bottom: 0px;
}



#searchbox{
    height: 30px;
}

#myNavbar{
    margin-top: 6px;
}

/* Remove the jumbotron's default bottom margin */
.jumbotron {
    margin-bottom: 0;
}


.dropdown {
    position: relative;
    display: inline-block;
 }


.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}



    /* Add a gray background color and some padding to the footer */
#footerSection {
    background-color: #f2f2f2;
    padding: 50px;
    margin-top: 27px;
    padding-top: 30px;
    padding-bottom: 18px;
}
</style>

<body>

  <nav class="navbar navbar-inverse" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Online Pharmacy</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="http://localhost/map">Nearby Pharmacy</a></li>
      </ul>

      <form class="navbar-form navbar-right" type="get" action="http://localhost/search">
  <div class="input-group">
  
    <input type="text" name="query" id="searchbox" class="form-control" placeholder="Search medicines">
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
      <input type="hidden" name="_token" value="z0YEFnWK1D5I9QDy3oJdOABHYgC09vSERZhswbvV">      <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a>
          <div class="dropdown-content" aria-label="submenu">
                                    <a href="http://localhost/registration-page">Register</a>
            <a href="http://localhost/login-page">Login</a>
                      </div>
        </li>
        <li><a href="#" onclick="return false";><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
			<div class="item active">
				<div class="container">
					<a href="#"><img style="width:100%" src="/images/med.jpg" alt="special offers"/></a>
					<div class="carousel-caption">
                        <h3>Get Vitamins at 25% discount</h3>
                        <p></p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="#"><img style="width:100%" src="/images/med2.jpg" alt=""/></a>
					<div class="carousel-caption">
                        <h3>get your daily need medicines at 10% discount</h3>
                        <p>Save Money</p>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="container">
					<a href="#"><img src="/images/doctor.jpg" alt=""/></a>
					<div class="carousel-caption">
                        <h3>Need Doctors? </h3>
                        <p>Coming soon..</p>
					</div>

				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	</div>
</div>

<div id="mainBody">
	<div class="container">
		<div class="row">
			<!-- Sidebar ================================================== -->

			<!-- Sidebar end=============================================== -->
			<div class="span9">

				<h4>Latest Medicines </h4>
				<ul class="thumbnails">
                    					<li class="span3">
						<div class="thumbnail">
							<a  href="#">
                                                                                                <img src="images/medicine_images/no_image.jpg" alt=""/>
                                                            </a>
							<div class="caption">
								<h5>Alatrol</h5>
								<p>
									Cetirizine Hydrochloride
								</p>

								<h4 style="text-align:center"><a class="btn" href="/medicine/2">View</a> <a class="btn" href="#">Add to Cart</i></a> <a class="btn btn-primary" href="#">40 Tk</a></h4>
							</div>
						</div>
					</li>
                				</ul>
			</div>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>



<br>
<br>




  <footer class="container-fluid text-center" id="footerSection">
    <p>Online Pharmacy Copyright</p>

  </footer>
</body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>newMedicines</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="newMedicines" data-endpoint="GET-" data-component="body" required  hidden>
<br>
Newly added medicine data from table</p>

</form>



