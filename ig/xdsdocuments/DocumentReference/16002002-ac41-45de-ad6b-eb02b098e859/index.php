<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/DocumentReference-16002002-ac41-45de-ad6b-eb02b098e859.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/DocumentReference-16002002-ac41-45de-ad6b-eb02b098e859.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/DocumentReference-16002002-ac41-45de-ad6b-eb02b098e859.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/DocumentReference-16002002-ac41-45de-ad6b-eb02b098e859.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/DocumentReference-16002002-ac41-45de-ad6b-eb02b098e859.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/DocumentReference-16002002-ac41-45de-ad6b-eb02b098e859.html');
else 
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/0.1.0-homecareobservation-draft-2/DocumentReference-16002002-ac41-45de-ad6b-eb02b098e859.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
