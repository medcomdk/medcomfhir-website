<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.0/ValueSet-medcom-message-definition-type-valueset.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.0/ValueSet-medcom-message-definition-type-valueset.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.0/ValueSet-medcom-message-definition-type-valueset.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.0/ValueSet-medcom-message-definition-type-valueset.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.0/ValueSet-medcom-message-definition-type-valueset.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.0/ValueSet-medcom-message-definition-type-valueset.html');
else 
  Redirect('http://medcomfhir.dk/ig/terminology/1.8.0/ValueSet-medcom-message-definition-type-valueset.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
