<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-d53ad029-99e5-44d5-b240-2ea01930701a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-d53ad029-99e5-44d5-b240-2ea01930701a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-d53ad029-99e5-44d5-b240-2ea01930701a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-d53ad029-99e5-44d5-b240-2ea01930701a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-d53ad029-99e5-44d5-b240-2ea01930701a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-d53ad029-99e5-44d5-b240-2ea01930701a.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-d53ad029-99e5-44d5-b240-2ea01930701a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
