<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Patient-e0c57a9f-9b04-43b4-9355-76f3564a1f10.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Patient-e0c57a9f-9b04-43b4-9355-76f3564a1f10.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Patient-e0c57a9f-9b04-43b4-9355-76f3564a1f10.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Patient-e0c57a9f-9b04-43b4-9355-76f3564a1f10.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Patient-e0c57a9f-9b04-43b4-9355-76f3564a1f10.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Patient-e0c57a9f-9b04-43b4-9355-76f3564a1f10.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/Patient-e0c57a9f-9b04-43b4-9355-76f3564a1f10.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
