<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Bundle-gfd00bc2-9c26-4174-934e-f6e4360845de.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Bundle-gfd00bc2-9c26-4174-934e-f6e4360845de.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Bundle-gfd00bc2-9c26-4174-934e-f6e4360845de.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Bundle-gfd00bc2-9c26-4174-934e-f6e4360845de.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Bundle-gfd00bc2-9c26-4174-934e-f6e4360845de.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Bundle-gfd00bc2-9c26-4174-934e-f6e4360845de.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Bundle-gfd00bc2-9c26-4174-934e-f6e4360845de.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
