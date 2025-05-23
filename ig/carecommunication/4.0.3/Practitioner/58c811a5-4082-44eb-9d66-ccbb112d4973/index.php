<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-58c811a5-4082-44eb-9d66-ccbb112d4973.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-58c811a5-4082-44eb-9d66-ccbb112d4973.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-58c811a5-4082-44eb-9d66-ccbb112d4973.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-58c811a5-4082-44eb-9d66-ccbb112d4973.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-58c811a5-4082-44eb-9d66-ccbb112d4973.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-58c811a5-4082-44eb-9d66-ccbb112d4973.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/4.0.3/Practitioner-58c811a5-4082-44eb-9d66-ccbb112d4973.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
