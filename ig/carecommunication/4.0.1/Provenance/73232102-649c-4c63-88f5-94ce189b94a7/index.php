<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Provenance-73232102-649c-4c63-88f5-94ce189b94a7.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Provenance-73232102-649c-4c63-88f5-94ce189b94a7.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Provenance-73232102-649c-4c63-88f5-94ce189b94a7.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Provenance-73232102-649c-4c63-88f5-94ce189b94a7.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Provenance-73232102-649c-4c63-88f5-94ce189b94a7.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Provenance-73232102-649c-4c63-88f5-94ce189b94a7.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.1/Provenance-73232102-649c-4c63-88f5-94ce189b94a7.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
