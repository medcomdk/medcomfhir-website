<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-85669d18-2bb3-4c6e-80d2-e039a63a521c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-85669d18-2bb3-4c6e-80d2-e039a63a521c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-85669d18-2bb3-4c6e-80d2-e039a63a521c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-85669d18-2bb3-4c6e-80d2-e039a63a521c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-85669d18-2bb3-4c6e-80d2-e039a63a521c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-85669d18-2bb3-4c6e-80d2-e039a63a521c.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Organization-85669d18-2bb3-4c6e-80d2-e039a63a521c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
