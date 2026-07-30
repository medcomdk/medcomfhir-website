<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/1.0.0-trial-use-3/DocumentReference-4daf727f-f116-4e49-ad31-4018f0cc638a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/1.0.0-trial-use-3/DocumentReference-4daf727f-f116-4e49-ad31-4018f0cc638a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/1.0.0-trial-use-3/DocumentReference-4daf727f-f116-4e49-ad31-4018f0cc638a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/1.0.0-trial-use-3/DocumentReference-4daf727f-f116-4e49-ad31-4018f0cc638a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/1.0.0-trial-use-3/DocumentReference-4daf727f-f116-4e49-ad31-4018f0cc638a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/1.0.0-trial-use-3/DocumentReference-4daf727f-f116-4e49-ad31-4018f0cc638a.html');
else 
  Redirect('http://medcomfhir.dk/ig/xdsdocuments/1.0.0-trial-use-3/DocumentReference-4daf727f-f116-4e49-ad31-4018f0cc638a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
