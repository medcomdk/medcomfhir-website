<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Media-cb277ee2-5d96-4762-829d-d36449b2b17f.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Media-cb277ee2-5d96-4762-829d-d36449b2b17f.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Media-cb277ee2-5d96-4762-829d-d36449b2b17f.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Media-cb277ee2-5d96-4762-829d-d36449b2b17f.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Media-cb277ee2-5d96-4762-829d-d36449b2b17f.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Media-cb277ee2-5d96-4762-829d-d36449b2b17f.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.2.1/Media-cb277ee2-5d96-4762-829d-d36449b2b17f.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
