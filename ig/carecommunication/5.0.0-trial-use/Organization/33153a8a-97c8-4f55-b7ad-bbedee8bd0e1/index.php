<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Organization-33153a8a-97c8-4f55-b7ad-bbedee8bd0e1.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Organization-33153a8a-97c8-4f55-b7ad-bbedee8bd0e1.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Organization-33153a8a-97c8-4f55-b7ad-bbedee8bd0e1.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Organization-33153a8a-97c8-4f55-b7ad-bbedee8bd0e1.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Organization-33153a8a-97c8-4f55-b7ad-bbedee8bd0e1.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Organization-33153a8a-97c8-4f55-b7ad-bbedee8bd0e1.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.0-trial-use/Organization-33153a8a-97c8-4f55-b7ad-bbedee8bd0e1.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
