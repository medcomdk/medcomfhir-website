<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-5f341feb-9a20-463a-96cc-a9ca8ace5567.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-5f341feb-9a20-463a-96cc-a9ca8ace5567.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-5f341feb-9a20-463a-96cc-a9ca8ace5567.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-5f341feb-9a20-463a-96cc-a9ca8ace5567.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-5f341feb-9a20-463a-96cc-a9ca8ace5567.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-5f341feb-9a20-463a-96cc-a9ca8ace5567.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/Bundle-5f341feb-9a20-463a-96cc-a9ca8ace5567.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
