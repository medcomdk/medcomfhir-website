<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-i458ddc8-fea4-41c3-992b-ff73cb6f657b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-i458ddc8-fea4-41c3-992b-ff73cb6f657b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-i458ddc8-fea4-41c3-992b-ff73cb6f657b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-i458ddc8-fea4-41c3-992b-ff73cb6f657b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-i458ddc8-fea4-41c3-992b-ff73cb6f657b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-i458ddc8-fea4-41c3-992b-ff73cb6f657b.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/Encounter-i458ddc8-fea4-41c3-992b-ff73cb6f657b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
