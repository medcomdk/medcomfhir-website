<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Practitioner-b56708c6-2df3-4e4a-a110-2f924b9fc072.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Practitioner-b56708c6-2df3-4e4a-a110-2f924b9fc072.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Practitioner-b56708c6-2df3-4e4a-a110-2f924b9fc072.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Practitioner-b56708c6-2df3-4e4a-a110-2f924b9fc072.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Practitioner-b56708c6-2df3-4e4a-a110-2f924b9fc072.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Practitioner-b56708c6-2df3-4e4a-a110-2f924b9fc072.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Practitioner-b56708c6-2df3-4e4a-a110-2f924b9fc072.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
