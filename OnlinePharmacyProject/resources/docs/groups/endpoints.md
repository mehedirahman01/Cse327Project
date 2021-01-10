# Endpoints


## admin/admin_dashboard




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
<form id="form-GETadmin-admin_dashboard" data-method="GET" data-path="admin/admin_dashboard" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-admin_dashboard', this);">
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
</form>


## admin/logout




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
<form id="form-GETadmin-logout" data-method="GET" data-path="admin/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-logout', this);">
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
</form>


## admin/manufacturers




> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/manufacturers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/manufacturers"
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
    'http://localhost/admin/manufacturers',
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
<div id="execution-results-GETadmin-manufacturers" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-manufacturers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-manufacturers"></code></pre>
</div>
<div id="execution-error-GETadmin-manufacturers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-manufacturers"></code></pre>
</div>
<form id="form-GETadmin-manufacturers" data-method="GET" data-path="admin/manufacturers" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-manufacturers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-manufacturers" onclick="tryItOut('GETadmin-manufacturers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-manufacturers" onclick="cancelTryOut('GETadmin-manufacturers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-manufacturers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/manufacturers</code></b>
</p>
</form>



