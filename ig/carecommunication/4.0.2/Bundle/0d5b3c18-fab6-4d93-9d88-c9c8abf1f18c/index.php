<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-0d5b3c18-fab6-4d93-9d88-c9c8abf1f18c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-0d5b3c18-fab6-4d93-9d88-c9c8abf1f18c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-0d5b3c18-fab6-4d93-9d88-c9c8abf1f18c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-0d5b3c18-fab6-4d93-9d88-c9c8abf1f18c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-0d5b3c18-fab6-4d93-9d88-c9c8abf1f18c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-0d5b3c18-fab6-4d93-9d88-c9c8abf1f18c.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Bundle-0d5b3c18-fab6-4d93-9d88-c9c8abf1f18c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
