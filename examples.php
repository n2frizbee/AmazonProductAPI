<?php

// Include the AmazonAPI code
include_once('./AmazonAPI.php');

// Should load these from environment variables
include_once('./secretKeys.php');

// Setup a new instance of the AmazonAPI with your keys
$amazonAPI = new AmazonAPI($keyId, $secretKey, $associateId);
$amazonAPI->SetLocale('uk');
$amazonAPI->SetSSL(true);
$amazonAPI->SetRetrieveAsArray();

// Item Search:
// Harry Potter in Books, sort by featured
$items = $amazonAPI->ItemSearch('harry potter', 'Books');
print('>> Harry Potter in Books, sort by featured');
var_dump($items);

// Harry Potter in Books, sort by price low to high
$items = $amazonAPI->ItemSearch('harry potter', 'Books', 'price');
print('>> Harry Potter in Books, sort by price low to high');
var_dump($items);

// Harry Potter in Books, sort by price high to low
$items = $amazonAPI->ItemSearch('harry potter', 'Books', '-price');
print('>> Harry Potter in Books, sort by price high to low');
var_dump($items);
?>