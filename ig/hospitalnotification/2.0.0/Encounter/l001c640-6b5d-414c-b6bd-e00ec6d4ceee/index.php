<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-l001c640-6b5d-414c-b6bd-e00ec6d4ceee.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-l001c640-6b5d-414c-b6bd-e00ec6d4ceee.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-l001c640-6b5d-414c-b6bd-e00ec6d4ceee.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-l001c640-6b5d-414c-b6bd-e00ec6d4ceee.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-l001c640-6b5d-414c-b6bd-e00ec6d4ceee.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-l001c640-6b5d-414c-b6bd-e00ec6d4ceee.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-l001c640-6b5d-414c-b6bd-e00ec6d4ceee.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
