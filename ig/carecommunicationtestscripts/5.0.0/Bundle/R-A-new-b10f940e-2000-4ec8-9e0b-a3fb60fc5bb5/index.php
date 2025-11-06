<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-A-new-b10f940e-2000-4ec8-9e0b-a3fb60fc5bb5.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-A-new-b10f940e-2000-4ec8-9e0b-a3fb60fc5bb5.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-A-new-b10f940e-2000-4ec8-9e0b-a3fb60fc5bb5.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-A-new-b10f940e-2000-4ec8-9e0b-a3fb60fc5bb5.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-A-new-b10f940e-2000-4ec8-9e0b-a3fb60fc5bb5.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-A-new-b10f940e-2000-4ec8-9e0b-a3fb60fc5bb5.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-R-A-new-b10f940e-2000-4ec8-9e0b-a3fb60fc5bb5.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
