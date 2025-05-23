<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/Communication-94e65db8-2f0c-4a2c-a7c9-06a160d59a12.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/Communication-94e65db8-2f0c-4a2c-a7c9-06a160d59a12.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/Communication-94e65db8-2f0c-4a2c-a7c9-06a160d59a12.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/Communication-94e65db8-2f0c-4a2c-a7c9-06a160d59a12.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/Communication-94e65db8-2f0c-4a2c-a7c9-06a160d59a12.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/Communication-94e65db8-2f0c-4a2c-a7c9-06a160d59a12.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.0.0/Communication-94e65db8-2f0c-4a2c-a7c9-06a160d59a12.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
