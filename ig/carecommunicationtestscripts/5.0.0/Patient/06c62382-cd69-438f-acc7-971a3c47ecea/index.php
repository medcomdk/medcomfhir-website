<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-06c62382-cd69-438f-acc7-971a3c47ecea.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-06c62382-cd69-438f-acc7-971a3c47ecea.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-06c62382-cd69-438f-acc7-971a3c47ecea.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-06c62382-cd69-438f-acc7-971a3c47ecea.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-06c62382-cd69-438f-acc7-971a3c47ecea.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-06c62382-cd69-438f-acc7-971a3c47ecea.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Patient-06c62382-cd69-438f-acc7-971a3c47ecea.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
