<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Encounter-d56e9c54-23d2-43a4-816e-951d2a6e3281.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Encounter-d56e9c54-23d2-43a4-816e-951d2a6e3281.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Encounter-d56e9c54-23d2-43a4-816e-951d2a6e3281.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Encounter-d56e9c54-23d2-43a4-816e-951d2a6e3281.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Encounter-d56e9c54-23d2-43a4-816e-951d2a6e3281.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Encounter-d56e9c54-23d2-43a4-816e-951d2a6e3281.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Encounter-d56e9c54-23d2-43a4-816e-951d2a6e3281.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
