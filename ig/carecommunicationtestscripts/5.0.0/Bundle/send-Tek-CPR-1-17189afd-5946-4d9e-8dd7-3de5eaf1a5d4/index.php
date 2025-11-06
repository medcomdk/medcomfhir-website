<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-send-Tek-CPR-1-17189afd-5946-4d9e-8dd7-3de5eaf1a5d4.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-send-Tek-CPR-1-17189afd-5946-4d9e-8dd7-3de5eaf1a5d4.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-send-Tek-CPR-1-17189afd-5946-4d9e-8dd7-3de5eaf1a5d4.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-send-Tek-CPR-1-17189afd-5946-4d9e-8dd7-3de5eaf1a5d4.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-send-Tek-CPR-1-17189afd-5946-4d9e-8dd7-3de5eaf1a5d4.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-send-Tek-CPR-1-17189afd-5946-4d9e-8dd7-3de5eaf1a5d4.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-send-Tek-CPR-1-17189afd-5946-4d9e-8dd7-3de5eaf1a5d4.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
