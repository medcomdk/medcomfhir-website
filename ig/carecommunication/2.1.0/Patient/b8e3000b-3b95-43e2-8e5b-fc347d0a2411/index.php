<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-b8e3000b-3b95-43e2-8e5b-fc347d0a2411.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-b8e3000b-3b95-43e2-8e5b-fc347d0a2411.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-b8e3000b-3b95-43e2-8e5b-fc347d0a2411.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-b8e3000b-3b95-43e2-8e5b-fc347d0a2411.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-b8e3000b-3b95-43e2-8e5b-fc347d0a2411.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-b8e3000b-3b95-43e2-8e5b-fc347d0a2411.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-b8e3000b-3b95-43e2-8e5b-fc347d0a2411.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
