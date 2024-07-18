<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-7c5a0cc0-f0f8-4a2e-9de9-d9293598bf94.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-7c5a0cc0-f0f8-4a2e-9de9-d9293598bf94.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-7c5a0cc0-f0f8-4a2e-9de9-d9293598bf94.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-7c5a0cc0-f0f8-4a2e-9de9-d9293598bf94.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-7c5a0cc0-f0f8-4a2e-9de9-d9293598bf94.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-7c5a0cc0-f0f8-4a2e-9de9-d9293598bf94.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.0/Bundle-7c5a0cc0-f0f8-4a2e-9de9-d9293598bf94.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
