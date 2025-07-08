<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Patient-99f5578f-c9d3-4d8c-aa3e-21690e03e27c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Patient-99f5578f-c9d3-4d8c-aa3e-21690e03e27c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Patient-99f5578f-c9d3-4d8c-aa3e-21690e03e27c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Patient-99f5578f-c9d3-4d8c-aa3e-21690e03e27c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Patient-99f5578f-c9d3-4d8c-aa3e-21690e03e27c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Patient-99f5578f-c9d3-4d8c-aa3e-21690e03e27c.html');
else 
  Redirect('http://medcomfhir.dk/ig/homecareobservation/1.1.0-trial-use/Patient-99f5578f-c9d3-4d8c-aa3e-21690e03e27c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
