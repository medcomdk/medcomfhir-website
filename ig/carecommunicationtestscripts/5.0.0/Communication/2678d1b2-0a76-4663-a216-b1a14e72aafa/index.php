<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-2678d1b2-0a76-4663-a216-b1a14e72aafa.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-2678d1b2-0a76-4663-a216-b1a14e72aafa.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-2678d1b2-0a76-4663-a216-b1a14e72aafa.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-2678d1b2-0a76-4663-a216-b1a14e72aafa.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-2678d1b2-0a76-4663-a216-b1a14e72aafa.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-2678d1b2-0a76-4663-a216-b1a14e72aafa.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-2678d1b2-0a76-4663-a216-b1a14e72aafa.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
