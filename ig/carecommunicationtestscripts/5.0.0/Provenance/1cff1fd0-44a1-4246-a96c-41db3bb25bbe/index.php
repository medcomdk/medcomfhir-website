<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-1cff1fd0-44a1-4246-a96c-41db3bb25bbe.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-1cff1fd0-44a1-4246-a96c-41db3bb25bbe.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-1cff1fd0-44a1-4246-a96c-41db3bb25bbe.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-1cff1fd0-44a1-4246-a96c-41db3bb25bbe.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-1cff1fd0-44a1-4246-a96c-41db3bb25bbe.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-1cff1fd0-44a1-4246-a96c-41db3bb25bbe.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Provenance-1cff1fd0-44a1-4246-a96c-41db3bb25bbe.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
