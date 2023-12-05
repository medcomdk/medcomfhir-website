<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-17a0c807-372b-452c-972e-c59036153b57.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-17a0c807-372b-452c-972e-c59036153b57.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-17a0c807-372b-452c-972e-c59036153b57.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-17a0c807-372b-452c-972e-c59036153b57.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-17a0c807-372b-452c-972e-c59036153b57.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-17a0c807-372b-452c-972e-c59036153b57.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotificationtestscripts/3.0.0/Bundle-17a0c807-372b-452c-972e-c59036153b57.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
