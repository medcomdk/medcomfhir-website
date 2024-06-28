<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-b0b3f1f5-3818-4d1c-aa25-cf08b01697a1.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-b0b3f1f5-3818-4d1c-aa25-cf08b01697a1.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-b0b3f1f5-3818-4d1c-aa25-cf08b01697a1.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-b0b3f1f5-3818-4d1c-aa25-cf08b01697a1.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-b0b3f1f5-3818-4d1c-aa25-cf08b01697a1.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-b0b3f1f5-3818-4d1c-aa25-cf08b01697a1.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-b0b3f1f5-3818-4d1c-aa25-cf08b01697a1.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
