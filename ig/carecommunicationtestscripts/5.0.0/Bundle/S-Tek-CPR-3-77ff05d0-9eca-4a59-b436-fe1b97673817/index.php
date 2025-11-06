<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-3-77ff05d0-9eca-4a59-b436-fe1b97673817.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-3-77ff05d0-9eca-4a59-b436-fe1b97673817.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-3-77ff05d0-9eca-4a59-b436-fe1b97673817.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-3-77ff05d0-9eca-4a59-b436-fe1b97673817.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-3-77ff05d0-9eca-4a59-b436-fe1b97673817.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-3-77ff05d0-9eca-4a59-b436-fe1b97673817.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Bundle-S-Tek-CPR-3-77ff05d0-9eca-4a59-b436-fe1b97673817.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
