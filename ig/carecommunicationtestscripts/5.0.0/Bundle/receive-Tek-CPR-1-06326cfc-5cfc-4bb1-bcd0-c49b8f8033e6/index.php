<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-1-06326cfc-5cfc-4bb1-bcd0-c49b8f8033e6.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-1-06326cfc-5cfc-4bb1-bcd0-c49b8f8033e6.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-1-06326cfc-5cfc-4bb1-bcd0-c49b8f8033e6.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-1-06326cfc-5cfc-4bb1-bcd0-c49b8f8033e6.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-1-06326cfc-5cfc-4bb1-bcd0-c49b8f8033e6.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-1-06326cfc-5cfc-4bb1-bcd0-c49b8f8033e6.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-1-06326cfc-5cfc-4bb1-bcd0-c49b8f8033e6.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
