<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-4f6ee254-6953-4a57-a68e-a5907a5761dc.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-4f6ee254-6953-4a57-a68e-a5907a5761dc.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-4f6ee254-6953-4a57-a68e-a5907a5761dc.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-4f6ee254-6953-4a57-a68e-a5907a5761dc.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-4f6ee254-6953-4a57-a68e-a5907a5761dc.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-4f6ee254-6953-4a57-a68e-a5907a5761dc.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-4f6ee254-6953-4a57-a68e-a5907a5761dc.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
