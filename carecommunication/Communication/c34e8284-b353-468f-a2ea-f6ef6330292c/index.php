<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-c34e8284-b353-468f-a2ea-f6ef6330292c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-c34e8284-b353-468f-a2ea-f6ef6330292c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-c34e8284-b353-468f-a2ea-f6ef6330292c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-c34e8284-b353-468f-a2ea-f6ef6330292c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-c34e8284-b353-468f-a2ea-f6ef6330292c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-c34e8284-b353-468f-a2ea-f6ef6330292c.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Communication-c34e8284-b353-468f-a2ea-f6ef6330292c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
