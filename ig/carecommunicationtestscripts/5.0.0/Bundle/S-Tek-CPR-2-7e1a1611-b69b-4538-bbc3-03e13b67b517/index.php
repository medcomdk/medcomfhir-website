<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-2-7e1a1611-b69b-4538-bbc3-03e13b67b517.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-2-7e1a1611-b69b-4538-bbc3-03e13b67b517.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-2-7e1a1611-b69b-4538-bbc3-03e13b67b517.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-2-7e1a1611-b69b-4538-bbc3-03e13b67b517.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-2-7e1a1611-b69b-4538-bbc3-03e13b67b517.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-2-7e1a1611-b69b-4538-bbc3-03e13b67b517.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-2-7e1a1611-b69b-4538-bbc3-03e13b67b517.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
