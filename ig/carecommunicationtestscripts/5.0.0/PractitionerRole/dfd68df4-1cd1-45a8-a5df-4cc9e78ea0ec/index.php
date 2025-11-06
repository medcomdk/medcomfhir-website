<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-dfd68df4-1cd1-45a8-a5df-4cc9e78ea0ec.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-dfd68df4-1cd1-45a8-a5df-4cc9e78ea0ec.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-dfd68df4-1cd1-45a8-a5df-4cc9e78ea0ec.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-dfd68df4-1cd1-45a8-a5df-4cc9e78ea0ec.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-dfd68df4-1cd1-45a8-a5df-4cc9e78ea0ec.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-dfd68df4-1cd1-45a8-a5df-4cc9e78ea0ec.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-dfd68df4-1cd1-45a8-a5df-4cc9e78ea0ec.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
