<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/PractitionerRole-8dc790ba-8d93-4585-b91c-af8225b0796d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/PractitionerRole-8dc790ba-8d93-4585-b91c-af8225b0796d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/PractitionerRole-8dc790ba-8d93-4585-b91c-af8225b0796d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/PractitionerRole-8dc790ba-8d93-4585-b91c-af8225b0796d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/PractitionerRole-8dc790ba-8d93-4585-b91c-af8225b0796d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/PractitionerRole-8dc790ba-8d93-4585-b91c-af8225b0796d.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/3.0.0/PractitionerRole-8dc790ba-8d93-4585-b91c-af8225b0796d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
