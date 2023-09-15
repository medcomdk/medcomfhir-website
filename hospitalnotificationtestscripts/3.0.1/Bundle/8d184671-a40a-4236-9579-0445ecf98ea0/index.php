<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8d184671-a40a-4236-9579-0445ecf98ea0.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8d184671-a40a-4236-9579-0445ecf98ea0.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8d184671-a40a-4236-9579-0445ecf98ea0.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8d184671-a40a-4236-9579-0445ecf98ea0.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8d184671-a40a-4236-9579-0445ecf98ea0.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8d184671-a40a-4236-9579-0445ecf98ea0.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-8d184671-a40a-4236-9579-0445ecf98ea0.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
