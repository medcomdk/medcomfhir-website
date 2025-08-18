<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1-3.3.1.1-Basic.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1-3.3.1.1-Basic.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1-3.3.1.1-Basic.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1-3.3.1.1-Basic.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1-3.3.1.1-Basic.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1-3.3.1.1-Basic.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservationtestscripts/1.0.0-draft/Bundle-R1-3.3.1.1-Basic.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
