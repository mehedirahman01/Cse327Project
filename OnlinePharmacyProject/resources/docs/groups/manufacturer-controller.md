# Manufacturer Controller

Handle Manufacturers of the application.

## Manufacturer View

<small class="badge badge-darkred">requires authentication</small>

Returns the view of manufacturer

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/manufacturers" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \

    -d '{"manufacturers":"in"}'


```

```javascript
const url = new URL(
    "http://localhost/admin/manufacturers"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {

    "manufacturers": "in"

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
    'http://localhost/admin/manufacturers',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [

            'manufacturers' => 'in',

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
<form id="form-GETadmin-manufacturers" data-method="GET" data-path="admin/manufacturers" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-manufacturers', this);">
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
<p>
<label id="auth-GETadmin-manufacturers" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-manufacturers" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>manufacturers</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="manufacturers" data-endpoint="GETadmin-manufacturers" data-component="body" required  hidden>
<br>
All manufacturer data from table</p>

</form>



