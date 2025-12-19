<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-e9f4cc68-b1b7-46b2-ba74-7cc39a914bfa.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-e9f4cc68-b1b7-46b2-ba74-7cc39a914bfa.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-e9f4cc68-b1b7-46b2-ba74-7cc39a914bfa.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-e9f4cc68-b1b7-46b2-ba74-7cc39a914bfa.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-e9f4cc68-b1b7-46b2-ba74-7cc39a914bfa.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-e9f4cc68-b1b7-46b2-ba74-7cc39a914bfa.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-e9f4cc68-b1b7-46b2-ba74-7cc39a914bfa.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
