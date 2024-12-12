<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-81b715aa-e993-4e7c-9b8a-4a05c10b540e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-81b715aa-e993-4e7c-9b8a-4a05c10b540e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-81b715aa-e993-4e7c-9b8a-4a05c10b540e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-81b715aa-e993-4e7c-9b8a-4a05c10b540e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-81b715aa-e993-4e7c-9b8a-4a05c10b540e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-81b715aa-e993-4e7c-9b8a-4a05c10b540e.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-81b715aa-e993-4e7c-9b8a-4a05c10b540e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
