<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-b12c1357-62f1-455e-b07a-3ebf454c50bc.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-b12c1357-62f1-455e-b07a-3ebf454c50bc.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-b12c1357-62f1-455e-b07a-3ebf454c50bc.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-b12c1357-62f1-455e-b07a-3ebf454c50bc.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-b12c1357-62f1-455e-b07a-3ebf454c50bc.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-b12c1357-62f1-455e-b07a-3ebf454c50bc.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Practitioner-b12c1357-62f1-455e-b07a-3ebf454c50bc.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
