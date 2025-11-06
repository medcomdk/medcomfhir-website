<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-ejklfdsio8klakfd.hjfkdshfjk-hfjkdshfj89432n7f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-ejklfdsio8klakfd.hjfkdshfjk-hfjkdshfj89432n7f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-ejklfdsio8klakfd.hjfkdshfjk-hfjkdshfj89432n7f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-ejklfdsio8klakfd.hjfkdshfjk-hfjkdshfj89432n7f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-ejklfdsio8klakfd.hjfkdshfjk-hfjkdshfj89432n7f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-ejklfdsio8klakfd.hjfkdshfjk-hfjkdshfj89432n7f.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/MessageHeader-ejklfdsio8klakfd.hjfkdshfjk-hfjkdshfj89432n7f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
