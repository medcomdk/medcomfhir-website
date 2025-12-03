<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-1ab9c2d9-c348-4d75-9122-60ea8a6fdcf1.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-1ab9c2d9-c348-4d75-9122-60ea8a6fdcf1.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-1ab9c2d9-c348-4d75-9122-60ea8a6fdcf1.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-1ab9c2d9-c348-4d75-9122-60ea8a6fdcf1.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-1ab9c2d9-c348-4d75-9122-60ea8a6fdcf1.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-1ab9c2d9-c348-4d75-9122-60ea8a6fdcf1.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.0/Organization-1ab9c2d9-c348-4d75-9122-60ea8a6fdcf1.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
