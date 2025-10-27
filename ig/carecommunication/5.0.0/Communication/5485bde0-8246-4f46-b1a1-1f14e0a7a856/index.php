<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-5485bde0-8246-4f46-b1a1-1f14e0a7a856.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-5485bde0-8246-4f46-b1a1-1f14e0a7a856.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-5485bde0-8246-4f46-b1a1-1f14e0a7a856.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-5485bde0-8246-4f46-b1a1-1f14e0a7a856.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-5485bde0-8246-4f46-b1a1-1f14e0a7a856.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-5485bde0-8246-4f46-b1a1-1f14e0a7a856.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0/Communication-5485bde0-8246-4f46-b1a1-1f14e0a7a856.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
