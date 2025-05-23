<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-e15be831-0454-47fd-a954-c9578a2474cb.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-e15be831-0454-47fd-a954-c9578a2474cb.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-e15be831-0454-47fd-a954-c9578a2474cb.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-e15be831-0454-47fd-a954-c9578a2474cb.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-e15be831-0454-47fd-a954-c9578a2474cb.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-e15be831-0454-47fd-a954-c9578a2474cb.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-e15be831-0454-47fd-a954-c9578a2474cb.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
