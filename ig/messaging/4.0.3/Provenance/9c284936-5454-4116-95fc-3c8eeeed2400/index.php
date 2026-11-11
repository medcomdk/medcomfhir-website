<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Provenance-9c284936-5454-4116-95fc-3c8eeeed2400.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Provenance-9c284936-5454-4116-95fc-3c8eeeed2400.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Provenance-9c284936-5454-4116-95fc-3c8eeeed2400.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Provenance-9c284936-5454-4116-95fc-3c8eeeed2400.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Provenance-9c284936-5454-4116-95fc-3c8eeeed2400.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Provenance-9c284936-5454-4116-95fc-3c8eeeed2400.html');
else 
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Provenance-9c284936-5454-4116-95fc-3c8eeeed2400.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
