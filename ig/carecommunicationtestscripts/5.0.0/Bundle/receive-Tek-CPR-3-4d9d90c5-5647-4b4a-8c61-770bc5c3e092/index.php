<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-3-4d9d90c5-5647-4b4a-8c61-770bc5c3e092.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-3-4d9d90c5-5647-4b4a-8c61-770bc5c3e092.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-3-4d9d90c5-5647-4b4a-8c61-770bc5c3e092.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-3-4d9d90c5-5647-4b4a-8c61-770bc5c3e092.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-3-4d9d90c5-5647-4b4a-8c61-770bc5c3e092.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-3-4d9d90c5-5647-4b4a-8c61-770bc5c3e092.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-receive-Tek-CPR-3-4d9d90c5-5647-4b4a-8c61-770bc5c3e092.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
