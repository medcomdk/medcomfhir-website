<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Organization-b2f762be-6994-44da-a214-72c765655b3e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Organization-b2f762be-6994-44da-a214-72c765655b3e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Organization-b2f762be-6994-44da-a214-72c765655b3e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Organization-b2f762be-6994-44da-a214-72c765655b3e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Organization-b2f762be-6994-44da-a214-72c765655b3e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Organization-b2f762be-6994-44da-a214-72c765655b3e.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Organization-b2f762be-6994-44da-a214-72c765655b3e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
