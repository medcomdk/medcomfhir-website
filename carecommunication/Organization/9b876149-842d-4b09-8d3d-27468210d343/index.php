<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Organization-9b876149-842d-4b09-8d3d-27468210d343.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Organization-9b876149-842d-4b09-8d3d-27468210d343.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Organization-9b876149-842d-4b09-8d3d-27468210d343.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Organization-9b876149-842d-4b09-8d3d-27468210d343.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Organization-9b876149-842d-4b09-8d3d-27468210d343.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Organization-9b876149-842d-4b09-8d3d-27468210d343.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Organization-9b876149-842d-4b09-8d3d-27468210d343.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
