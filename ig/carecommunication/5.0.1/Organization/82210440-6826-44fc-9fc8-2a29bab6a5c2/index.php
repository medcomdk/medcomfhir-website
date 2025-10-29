<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.1/Organization-82210440-6826-44fc-9fc8-2a29bab6a5c2.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.1/Organization-82210440-6826-44fc-9fc8-2a29bab6a5c2.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.1/Organization-82210440-6826-44fc-9fc8-2a29bab6a5c2.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.1/Organization-82210440-6826-44fc-9fc8-2a29bab6a5c2.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.1/Organization-82210440-6826-44fc-9fc8-2a29bab6a5c2.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.1/Organization-82210440-6826-44fc-9fc8-2a29bab6a5c2.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/5.0.1/Organization-82210440-6826-44fc-9fc8-2a29bab6a5c2.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
