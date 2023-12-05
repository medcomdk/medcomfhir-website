<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-4f3bc2ea-2214-44d7-ba02-e286ddf2b51e.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-4f3bc2ea-2214-44d7-ba02-e286ddf2b51e.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-4f3bc2ea-2214-44d7-ba02-e286ddf2b51e.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-4f3bc2ea-2214-44d7-ba02-e286ddf2b51e.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-4f3bc2ea-2214-44d7-ba02-e286ddf2b51e.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-4f3bc2ea-2214-44d7-ba02-e286ddf2b51e.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/MessageHeader-4f3bc2ea-2214-44d7-ba02-e286ddf2b51e.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
