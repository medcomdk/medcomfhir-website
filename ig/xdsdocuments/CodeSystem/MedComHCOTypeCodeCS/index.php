<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/CodeSystem-MedComHCOTypeCodeCS.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/CodeSystem-MedComHCOTypeCodeCS.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/CodeSystem-MedComHCOTypeCodeCS.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/CodeSystem-MedComHCOTypeCodeCS.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/CodeSystem-MedComHCOTypeCodeCS.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/CodeSystem-MedComHCOTypeCodeCS.html');
else 
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/CodeSystem-MedComHCOTypeCodeCS.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
