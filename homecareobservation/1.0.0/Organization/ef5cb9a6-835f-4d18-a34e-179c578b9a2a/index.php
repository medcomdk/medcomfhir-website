<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Organization-ef5cb9a6-835f-4d18-a34e-179c578b9a2a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Organization-ef5cb9a6-835f-4d18-a34e-179c578b9a2a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Organization-ef5cb9a6-835f-4d18-a34e-179c578b9a2a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Organization-ef5cb9a6-835f-4d18-a34e-179c578b9a2a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Organization-ef5cb9a6-835f-4d18-a34e-179c578b9a2a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Organization-ef5cb9a6-835f-4d18-a34e-179c578b9a2a.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.0.0/Organization-ef5cb9a6-835f-4d18-a34e-179c578b9a2a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
