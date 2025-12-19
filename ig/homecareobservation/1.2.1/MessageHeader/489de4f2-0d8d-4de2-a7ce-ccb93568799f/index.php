<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-489de4f2-0d8d-4de2-a7ce-ccb93568799f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-489de4f2-0d8d-4de2-a7ce-ccb93568799f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-489de4f2-0d8d-4de2-a7ce-ccb93568799f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-489de4f2-0d8d-4de2-a7ce-ccb93568799f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-489de4f2-0d8d-4de2-a7ce-ccb93568799f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-489de4f2-0d8d-4de2-a7ce-ccb93568799f.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/MessageHeader-489de4f2-0d8d-4de2-a7ce-ccb93568799f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
