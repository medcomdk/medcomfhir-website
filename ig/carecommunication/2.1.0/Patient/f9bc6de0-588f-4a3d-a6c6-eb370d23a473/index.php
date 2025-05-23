<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-f9bc6de0-588f-4a3d-a6c6-eb370d23a473.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-f9bc6de0-588f-4a3d-a6c6-eb370d23a473.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-f9bc6de0-588f-4a3d-a6c6-eb370d23a473.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-f9bc6de0-588f-4a3d-a6c6-eb370d23a473.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-f9bc6de0-588f-4a3d-a6c6-eb370d23a473.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-f9bc6de0-588f-4a3d-a6c6-eb370d23a473.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunication/2.1.0/Patient-f9bc6de0-588f-4a3d-a6c6-eb370d23a473.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
