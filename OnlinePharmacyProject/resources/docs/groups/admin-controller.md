# Admin Controller

Handle Medicine Stock for the application.

## Medicine View

<small class="badge badge-darkred">requires authentication</small>

This returns the view of medicine

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/medicines" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/admin/medicines"
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
    'http://localhost/admin/medicines',
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
<div id="execution-results-GETadmin-medicines" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-medicines"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-medicines"></code></pre>
</div>
<div id="execution-error-GETadmin-medicines" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-medicines"></code></pre>
</div>
<form id="form-GETadmin-medicines" data-method="GET" data-path="admin/medicines" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-medicines', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-medicines" onclick="tryItOut('GETadmin-medicines');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-medicines" onclick="cancelTryOut('GETadmin-medicines');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-medicines" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/medicines</code></b>
</p>
<p>
<label id="auth-GETadmin-medicines" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-medicines" data-component="header"></label>
</p>
</form>


## Add or Edit Medicine

<small class="badge badge-darkred">requires authentication</small>

Can add or edit or delete medicine

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/add-edit-medicine/necessitatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"manufacturerId":1,"medicineName":"Alatrol","generic":"Cetirizine Hydrochloride","type":"Tablet","quantity":10,"dose":"2.5 mg","medicinePrice":35,"stock":100}'

```

```javascript
const url = new URL(
    "http://localhost/admin/add-edit-medicine/necessitatibus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "manufacturerId": 1,
    "medicineName": "Alatrol",
    "generic": "Cetirizine Hydrochloride",
    "type": "Tablet",
    "quantity": 10,
    "dose": "2.5 mg",
    "medicinePrice": 35,
    "stock": 100
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
    'http://localhost/admin/add-edit-medicine/necessitatibus',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'manufacturerId' => 1.0,
            'medicineName' => 'Alatrol',
            'generic' => 'Cetirizine Hydrochloride',
            'type' => 'Tablet',
            'quantity' => 10.0,
            'dose' => '2.5 mg',
            'medicinePrice' => 35.0,
            'stock' => 100.0,
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
<div id="execution-results-GETadmin-add-edit-medicine--id--" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-add-edit-medicine--id--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-add-edit-medicine--id--"></code></pre>
</div>
<div id="execution-error-GETadmin-add-edit-medicine--id--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-add-edit-medicine--id--"></code></pre>
</div>
<form id="form-GETadmin-add-edit-medicine--id--" data-method="GET" data-path="admin/add-edit-medicine/{id?}" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-add-edit-medicine--id--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-add-edit-medicine--id--" onclick="tryItOut('GETadmin-add-edit-medicine--id--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-add-edit-medicine--id--" onclick="cancelTryOut('GETadmin-add-edit-medicine--id--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-add-edit-medicine--id--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/add-edit-medicine/{id?}</code></b>
</p>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/add-edit-medicine/{id?}</code></b>
</p>
<p>
<label id="auth-GETadmin-add-edit-medicine--id--" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-add-edit-medicine--id--" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="url"  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>manufacturerId</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="manufacturerId" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body"  hidden>
<br>
Id of the manufacturer.</p>
<p>
<b><code>medicineName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="medicineName" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Name of the medicine.</p>
<p>
<b><code>generic</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="generic" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Generic of the Medicine.</p>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Type of the Medicine.</p>
<p>
<b><code>quantity</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="quantity" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Units per Pata.</p>
<p>
<b><code>dose</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="dose" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Dosage of the Medicine per unit.</p>
<p>
<b><code>medicinePrice</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="medicinePrice" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Price of the Medicine.</p>
<p>
<b><code>stock</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="stock" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Stock of the Medicine.</p>

</form>



