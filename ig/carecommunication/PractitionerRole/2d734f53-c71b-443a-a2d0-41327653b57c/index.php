<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2d734f53-c71b-443a-a2d0-41327653b57c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2d734f53-c71b-443a-a2d0-41327653b57c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2d734f53-c71b-443a-a2d0-41327653b57c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2d734f53-c71b-443a-a2d0-41327653b57c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2d734f53-c71b-443a-a2d0-41327653b57c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2d734f53-c71b-443a-a2d0-41327653b57c.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.0/PractitionerRole-2d734f53-c71b-443a-a2d0-41327653b57c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
