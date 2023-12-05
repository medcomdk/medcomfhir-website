<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Encounter-ne70f2b8-a924-11ed-afa1-0242ac120002.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Encounter-ne70f2b8-a924-11ed-afa1-0242ac120002.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Encounter-ne70f2b8-a924-11ed-afa1-0242ac120002.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Encounter-ne70f2b8-a924-11ed-afa1-0242ac120002.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Encounter-ne70f2b8-a924-11ed-afa1-0242ac120002.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Encounter-ne70f2b8-a924-11ed-afa1-0242ac120002.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Encounter-ne70f2b8-a924-11ed-afa1-0242ac120002.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
