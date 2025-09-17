<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/PractitionerRole-4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/PractitionerRole-4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/PractitionerRole-4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/PractitionerRole-4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/PractitionerRole-4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/PractitionerRole-4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.1-trial-use/PractitionerRole-4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
