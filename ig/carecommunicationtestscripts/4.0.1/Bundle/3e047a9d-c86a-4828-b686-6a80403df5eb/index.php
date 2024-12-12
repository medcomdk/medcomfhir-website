<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3e047a9d-c86a-4828-b686-6a80403df5eb.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3e047a9d-c86a-4828-b686-6a80403df5eb.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3e047a9d-c86a-4828-b686-6a80403df5eb.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3e047a9d-c86a-4828-b686-6a80403df5eb.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3e047a9d-c86a-4828-b686-6a80403df5eb.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3e047a9d-c86a-4828-b686-6a80403df5eb.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3e047a9d-c86a-4828-b686-6a80403df5eb.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
