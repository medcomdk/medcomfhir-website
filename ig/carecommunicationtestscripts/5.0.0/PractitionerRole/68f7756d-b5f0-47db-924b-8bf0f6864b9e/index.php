<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-68f7756d-b5f0-47db-924b-8bf0f6864b9e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-68f7756d-b5f0-47db-924b-8bf0f6864b9e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-68f7756d-b5f0-47db-924b-8bf0f6864b9e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-68f7756d-b5f0-47db-924b-8bf0f6864b9e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-68f7756d-b5f0-47db-924b-8bf0f6864b9e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-68f7756d-b5f0-47db-924b-8bf0f6864b9e.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/PractitionerRole-68f7756d-b5f0-47db-924b-8bf0f6864b9e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
