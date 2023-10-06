<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-4c284936-5454-4116-95fc-3c8eeeed2400.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-4c284936-5454-4116-95fc-3c8eeeed2400.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-4c284936-5454-4116-95fc-3c8eeeed2400.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-4c284936-5454-4116-95fc-3c8eeeed2400.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-4c284936-5454-4116-95fc-3c8eeeed2400.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-4c284936-5454-4116-95fc-3c8eeeed2400.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-4c284936-5454-4116-95fc-3c8eeeed2400.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
