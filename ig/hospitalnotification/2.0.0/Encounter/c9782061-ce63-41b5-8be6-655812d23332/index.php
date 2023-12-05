<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-c9782061-ce63-41b5-8be6-655812d23332.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-c9782061-ce63-41b5-8be6-655812d23332.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-c9782061-ce63-41b5-8be6-655812d23332.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-c9782061-ce63-41b5-8be6-655812d23332.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-c9782061-ce63-41b5-8be6-655812d23332.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-c9782061-ce63-41b5-8be6-655812d23332.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-c9782061-ce63-41b5-8be6-655812d23332.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
