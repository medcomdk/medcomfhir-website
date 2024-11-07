<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-22d65545-f98a-4b4d-ba36-51b48b3eb3de.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-22d65545-f98a-4b4d-ba36-51b48b3eb3de.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-22d65545-f98a-4b4d-ba36-51b48b3eb3de.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-22d65545-f98a-4b4d-ba36-51b48b3eb3de.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-22d65545-f98a-4b4d-ba36-51b48b3eb3de.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-22d65545-f98a-4b4d-ba36-51b48b3eb3de.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.2/Patient-22d65545-f98a-4b4d-ba36-51b48b3eb3de.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
