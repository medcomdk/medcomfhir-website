<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.1/MessageHeader-3881874e-2042-4a00-aee8-23512799f512.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.1/MessageHeader-3881874e-2042-4a00-aee8-23512799f512.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.1/MessageHeader-3881874e-2042-4a00-aee8-23512799f512.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.1/MessageHeader-3881874e-2042-4a00-aee8-23512799f512.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.1/MessageHeader-3881874e-2042-4a00-aee8-23512799f512.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.1/MessageHeader-3881874e-2042-4a00-aee8-23512799f512.html');
else 
  Redirect('http://medcomfhir.dk/ig/messaging/4.0.1/MessageHeader-3881874e-2042-4a00-aee8-23512799f512.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
