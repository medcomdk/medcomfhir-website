<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/PractitionerRole-3b1f7d8c-540e-474c-b079-89284c2de621.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/PractitionerRole-3b1f7d8c-540e-474c-b079-89284c2de621.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/PractitionerRole-3b1f7d8c-540e-474c-b079-89284c2de621.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/PractitionerRole-3b1f7d8c-540e-474c-b079-89284c2de621.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/PractitionerRole-3b1f7d8c-540e-474c-b079-89284c2de621.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/PractitionerRole-3b1f7d8c-540e-474c-b079-89284c2de621.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/PractitionerRole-3b1f7d8c-540e-474c-b079-89284c2de621.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
