<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.html');
else 
  Redirect('https://medcomfhir.dk/ig/messaging/4.0.3/Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
