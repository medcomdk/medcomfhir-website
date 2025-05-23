<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/PractitionerRole-ac1dfd45-a135-47b8-acd7-db0405e21dd0.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/PractitionerRole-ac1dfd45-a135-47b8-acd7-db0405e21dd0.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/PractitionerRole-ac1dfd45-a135-47b8-acd7-db0405e21dd0.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/PractitionerRole-ac1dfd45-a135-47b8-acd7-db0405e21dd0.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/PractitionerRole-ac1dfd45-a135-47b8-acd7-db0405e21dd0.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/PractitionerRole-ac1dfd45-a135-47b8-acd7-db0405e21dd0.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/PractitionerRole-ac1dfd45-a135-47b8-acd7-db0405e21dd0.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
