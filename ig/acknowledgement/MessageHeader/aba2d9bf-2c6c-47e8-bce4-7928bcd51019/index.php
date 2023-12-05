<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/MessageHeader-aba2d9bf-2c6c-47e8-bce4-7928bcd51019.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/MessageHeader-aba2d9bf-2c6c-47e8-bce4-7928bcd51019.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/MessageHeader-aba2d9bf-2c6c-47e8-bce4-7928bcd51019.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/MessageHeader-aba2d9bf-2c6c-47e8-bce4-7928bcd51019.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/MessageHeader-aba2d9bf-2c6c-47e8-bce4-7928bcd51019.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/MessageHeader-aba2d9bf-2c6c-47e8-bce4-7928bcd51019.html');
else 
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.1/MessageHeader-aba2d9bf-2c6c-47e8-bce4-7928bcd51019.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
