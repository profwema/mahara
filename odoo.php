<?php

require_once('vendor/phpxmlrpc/phpxmlrpc/lib');

// Odoo API details
$host = 'https://maharah-test.odoo.com'; // Replace with your Odoo host URL
$db = 'maharah-test'; // Replace with your Odoo database name
$username = 'mostafa@maharahdigital.com'; // Replace with your Odoo username
$password = 'e41888d0f6176a7b7ecefba4ed84d498d7ba7f08'; // Replace with your Odoo password

$common = xmlrpc_client('https://' . $host . '/xmlrpc/2/common');
$uid = $common->call('authenticate', array(
    $db, $username, $password, array()
));

if ($uid) {
    $models = xmlrpc_client('https://' . $host . '/xmlrpc/2/object');

    // Replace 'res.partner' with the Odoo model you want to query
    $partner_ids = $models->call('execute_kw', array(
        $db, $uid, $password,
        'res.partner', 'search_read',
        array(array()),
        array('fields' => array('id', 'name', 'email')) // Fields to retrieve
    ));

    // Display retrieved data
    echo "<h1>Partner Data:</h1>";
    foreach ($partner_ids as $partner) {
        echo "ID: " . $partner['id'] . "<br>";
        echo "Name: " . $partner['name'] . "<br>";
        echo "Email: " . $partner['email'] . "<br><br>";
    }
} else {
    echo "Authentication failed.";
}
