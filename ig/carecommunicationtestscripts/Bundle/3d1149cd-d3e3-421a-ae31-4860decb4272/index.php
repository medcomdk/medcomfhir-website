<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3d1149cd-d3e3-421a-ae31-4860decb4272.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3d1149cd-d3e3-421a-ae31-4860decb4272.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3d1149cd-d3e3-421a-ae31-4860decb4272.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3d1149cd-d3e3-421a-ae31-4860decb4272.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3d1149cd-d3e3-421a-ae31-4860decb4272.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3d1149cd-d3e3-421a-ae31-4860decb4272.html');
else 
  Redirect('http://medcomfhir.dk/ig/carecommunicationtestscripts/4.0.1/Bundle-3d1149cd-d3e3-421a-ae31-4860decb4272.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
