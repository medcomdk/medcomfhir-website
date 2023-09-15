<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-a5e5b880-c087-4055-b9ec-99108695f81d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-a5e5b880-c087-4055-b9ec-99108695f81d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-a5e5b880-c087-4055-b9ec-99108695f81d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-a5e5b880-c087-4055-b9ec-99108695f81d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-a5e5b880-c087-4055-b9ec-99108695f81d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-a5e5b880-c087-4055-b9ec-99108695f81d.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.1/Bundle-a5e5b880-c087-4055-b9ec-99108695f81d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
