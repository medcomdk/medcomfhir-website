<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-2-e678c36a-0e2e-4831-a739-3cfc1225691d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-2-e678c36a-0e2e-4831-a739-3cfc1225691d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-2-e678c36a-0e2e-4831-a739-3cfc1225691d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-2-e678c36a-0e2e-4831-a739-3cfc1225691d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-2-e678c36a-0e2e-4831-a739-3cfc1225691d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-2-e678c36a-0e2e-4831-a739-3cfc1225691d.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-2-e678c36a-0e2e-4831-a739-3cfc1225691d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
