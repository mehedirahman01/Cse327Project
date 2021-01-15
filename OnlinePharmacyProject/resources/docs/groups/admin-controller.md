# Admin Controller

Handle Admin authentication of the application.

## Admin Login


Handles admin login

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"data":"et"}'

```

```javascript
const url = new URL(
    "http://localhost/admin/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "data": "et"
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
    'http://localhost/admin/login',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'data' => 'et',
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

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="http://localhost/customAuth/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/customAuth/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                                                        <form method="POST" class="user" action="http://localhost/admin/login">
                                        <input type="hidden" name="_token" value="z0YEFnWK1D5I9QDy3oJdOABHYgC09vSERZhswbvV">                                        <div class="form-group">
                                            <input id="email" class="form-control form-control-user" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                                        </div>
                                        <div class="form-group">
                                            <input id="password" class="form-control form-control-user"
                                                            type="password"
                                                            name="password"
                                                            placeholder="Password"
                                                            required autocomplete="current-password" />
                                        </div>

                                         <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 btn btn-primary btn-user btn-block">
    Login
</button>
 
                                        <hr>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                                                          </div>
                                    <div class="text-center">
                                        <a class="small" href="">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost/js/sb-admin-2.min.js"></script>

</body>

</html>

```
<div id="execution-results-GETadmin-login" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-login"></code></pre>
</div>
<div id="execution-error-GETadmin-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-login"></code></pre>
</div>
<form id="form-GETadmin-login" data-method="GET" data-path="admin/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-login" onclick="tryItOut('GETadmin-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-login" onclick="cancelTryOut('GETadmin-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/login</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<details>
<summary>
<b><code>data</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<br>
Data from Login Form</summary>
<br>
<p>
<b><code>data.email</code></b>&nbsp;&nbsp;<small>email</small>  &nbsp;
<input type="text" name="data.email" data-endpoint="GETadmin-login" data-component="body" required  hidden>
<br>
Email of Admin</p>
<p>
<b><code>data.password</code></b>&nbsp;&nbsp;<small>password</small>  &nbsp;
<input type="text" name="data.password" data-endpoint="GETadmin-login" data-component="body" required  hidden>
<br>
Password of Admin</p>
</details>
</p>

</form>


## Admin Dashboard View

<small class="badge badge-darkred">requires authentication</small>

Returns the view of Admin dashboard

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/admin_dashboard" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/admin_dashboard"
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
    'http://localhost/admin/admin_dashboard',
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


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/admin/login'" />

        <title>Redirecting to http://localhost/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/admin/login">http://localhost/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-admin_dashboard" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-admin_dashboard"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-admin_dashboard"></code></pre>
</div>
<div id="execution-error-GETadmin-admin_dashboard" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-admin_dashboard"></code></pre>
</div>
<form id="form-GETadmin-admin_dashboard" data-method="GET" data-path="admin/admin_dashboard" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-admin_dashboard', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-admin_dashboard" onclick="tryItOut('GETadmin-admin_dashboard');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-admin_dashboard" onclick="cancelTryOut('GETadmin-admin_dashboard');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-admin_dashboard" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/admin_dashboard</code></b>
</p>
<p>
<label id="auth-GETadmin-admin_dashboard" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-admin_dashboard" data-component="header"></label>
</p>
</form>


## Admin Logout

<small class="badge badge-darkred">requires authentication</small>

Handles admin logout

Returns to admin login page

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/logout"
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
    'http://localhost/admin/logout',
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


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/admin/login'" />

        <title>Redirecting to http://localhost/admin/login</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/admin/login">http://localhost/admin/login</a>.
    </body>
</html>
```
<div id="execution-results-GETadmin-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-logout"></code></pre>
</div>
<div id="execution-error-GETadmin-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-logout"></code></pre>
</div>
<form id="form-GETadmin-logout" data-method="GET" data-path="admin/logout" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-logout" onclick="tryItOut('GETadmin-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-logout" onclick="cancelTryOut('GETadmin-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/logout</code></b>
</p>
<p>
<label id="auth-GETadmin-logout" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-logout" data-component="header"></label>
</p>
</form>



