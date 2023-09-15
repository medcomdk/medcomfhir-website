<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Provenance-33d460d7-670a-449b-90f1-8f677c809729.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Provenance-33d460d7-670a-449b-90f1-8f677c809729.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Provenance-33d460d7-670a-449b-90f1-8f677c809729.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Provenance-33d460d7-670a-449b-90f1-8f677c809729.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Provenance-33d460d7-670a-449b-90f1-8f677c809729.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Provenance-33d460d7-670a-449b-90f1-8f677c809729.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Provenance-33d460d7-670a-449b-90f1-8f677c809729.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
