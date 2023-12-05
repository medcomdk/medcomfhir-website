<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-30c0f779-783f-46b2-b38f-faebd2bedb3f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-30c0f779-783f-46b2-b38f-faebd2bedb3f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-30c0f779-783f-46b2-b38f-faebd2bedb3f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-30c0f779-783f-46b2-b38f-faebd2bedb3f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-30c0f779-783f-46b2-b38f-faebd2bedb3f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-30c0f779-783f-46b2-b38f-faebd2bedb3f.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/Provenance-30c0f779-783f-46b2-b38f-faebd2bedb3f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
