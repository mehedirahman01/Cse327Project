# Medicines Controller

Handle Medicine Stock for the application.

## Medicine View

<small class="badge badge-darkred">requires authentication</small>

Returns the view of medicine

> Example request:

```bash
curl -X GET \
    -G "http://localhost/admin/medicines" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \

    -d '{"medicines":"sit"}'


```

```javascript
const url = new URL(
    "http://localhost/admin/medicines"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {

    "medicines": "sit"

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
    'http://localhost/admin/medicines',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [

            'medicines' => 'sit',

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
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>medicines</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="medicines" data-endpoint="GETadmin-medicines" data-component="body" required  hidden>
<br>
All medicine data from table</p>

</form>


## Add or Edit Medicine

<small class="badge badge-darkred">requires authentication</small>

Can add or edit medicine

Returns to medicine page

> Example request:

```bash
curl -X GET \

    -G "http://localhost/admin/add-edit-medicine/67.944422" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"medicine":{"manufacturerId":1,"medicineName":"Alatrol","generic":"Cetirizine Hydrochloride","type":"Tablet","quantity":10,"dose":"2.5 mg","medicinePrice":35,"stock":100,"description":"This medicine.....","medicineImage":"nesciunt"},"data":"qui","getManufacturers":"unde","medicineData":"et"}'


```

```javascript
const url = new URL(

    "http://localhost/admin/add-edit-medicine/67.944422"

);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "medicine": {
        "manufacturerId": 1,
        "medicineName": "Alatrol",
        "generic": "Cetirizine Hydrochloride",
        "type": "Tablet",
        "quantity": 10,
        "dose": "2.5 mg",
        "medicinePrice": 35,
        "stock": 100,
        "description": "This medicine.....",

        "medicineImage": "nesciunt"
    },
    "data": "qui",
    "getManufacturers": "unde",
    "medicineData": "et"

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

    'http://localhost/admin/add-edit-medicine/67.944422',

    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'medicine' => [
                'manufacturerId' => 1.0,
                'medicineName' => 'Alatrol',
                'generic' => 'Cetirizine Hydrochloride',
                'type' => 'Tablet',
                'quantity' => 10.0,
                'dose' => '2.5 mg',
                'medicinePrice' => 35.0,
                'stock' => 100.0,
                'description' => 'This medicine.....',

                'medicineImage' => 'nesciunt',
            ],
            'data' => 'qui',
            'getManufacturers' => 'unde',
            'medicineData' => 'et',

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
<b><code>id</code></b>&nbsp;&nbsp;<small>number</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="url"  hidden>
<br>
Id of the medicine</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<details>
<summary>
<b><code>medicine</code></b>&nbsp;&nbsp;<small>object</small>  &nbsp;
<br>
</summary>
<br>
<p>
<b><code>medicine.manufacturerId</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="medicine.manufacturerId" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Id of the manufacturer.</p>
<p>
<b><code>medicine.medicineName</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="medicine.medicineName" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Name of the medicine.</p>
<p>
<b><code>medicine.generic</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="medicine.generic" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Generic of the Medicine.</p>
<p>
<b><code>medicine.type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="medicine.type" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Type of the Medicine.</p>
<p>
<b><code>medicine.quantity</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="medicine.quantity" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Units per Pata.</p>
<p>
<b><code>medicine.dose</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="medicine.dose" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Dosage of the Medicine per unit.</p>
<p>
<b><code>medicine.medicinePrice</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="medicine.medicinePrice" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Price of the Medicine.</p>
<p>
<b><code>medicine.stock</code></b>&nbsp;&nbsp;<small>number</small>  &nbsp;
<input type="number" name="medicine.stock" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Stock of the Medicine.</p>
<p>
<b><code>medicine.description</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="medicine.description" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Description of the Medicine.</p>
<p>
<b><code>medicine.medicineImage</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="medicine.medicineImage" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Image of the Medicine.</p>
</details>
</p>
<p>
<b><code>data</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="data" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
Data of the Medicine Form</p>
<p>
<b><code>getManufacturers</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="getManufacturers" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
All manufacturer data from table</p>
<p>
<b><code>medicineData</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="medicineData" data-endpoint="GETadmin-add-edit-medicine--id--" data-component="body" required  hidden>
<br>
All medicine data from table</p>

</form>



