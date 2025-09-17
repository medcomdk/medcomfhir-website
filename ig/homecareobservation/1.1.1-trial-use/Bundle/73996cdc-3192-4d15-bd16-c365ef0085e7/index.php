<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-73996cdc-3192-4d15-bd16-c365ef0085e7.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-73996cdc-3192-4d15-bd16-c365ef0085e7.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-73996cdc-3192-4d15-bd16-c365ef0085e7.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-73996cdc-3192-4d15-bd16-c365ef0085e7.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-73996cdc-3192-4d15-bd16-c365ef0085e7.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-73996cdc-3192-4d15-bd16-c365ef0085e7.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-73996cdc-3192-4d15-bd16-c365ef0085e7.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
