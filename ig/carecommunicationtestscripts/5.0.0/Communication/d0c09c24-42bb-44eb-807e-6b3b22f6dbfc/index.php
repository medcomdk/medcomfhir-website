<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-d0c09c24-42bb-44eb-807e-6b3b22f6dbfc.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-d0c09c24-42bb-44eb-807e-6b3b22f6dbfc.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-d0c09c24-42bb-44eb-807e-6b3b22f6dbfc.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-d0c09c24-42bb-44eb-807e-6b3b22f6dbfc.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-d0c09c24-42bb-44eb-807e-6b3b22f6dbfc.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-d0c09c24-42bb-44eb-807e-6b3b22f6dbfc.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/5.0.0/Communication-d0c09c24-42bb-44eb-807e-6b3b22f6dbfc.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
