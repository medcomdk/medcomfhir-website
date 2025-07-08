<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-a0330c62-fe29-4719-83fa-a94959084f29.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-a0330c62-fe29-4719-83fa-a94959084f29.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-a0330c62-fe29-4719-83fa-a94959084f29.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-a0330c62-fe29-4719-83fa-a94959084f29.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-a0330c62-fe29-4719-83fa-a94959084f29.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-a0330c62-fe29-4719-83fa-a94959084f29.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Organization-a0330c62-fe29-4719-83fa-a94959084f29.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
