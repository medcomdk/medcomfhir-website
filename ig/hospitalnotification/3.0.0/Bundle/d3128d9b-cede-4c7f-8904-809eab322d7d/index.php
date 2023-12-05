<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Bundle-d3128d9b-cede-4c7f-8904-809eab322d7d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Bundle-d3128d9b-cede-4c7f-8904-809eab322d7d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Bundle-d3128d9b-cede-4c7f-8904-809eab322d7d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Bundle-d3128d9b-cede-4c7f-8904-809eab322d7d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Bundle-d3128d9b-cede-4c7f-8904-809eab322d7d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Bundle-d3128d9b-cede-4c7f-8904-809eab322d7d.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Bundle-d3128d9b-cede-4c7f-8904-809eab322d7d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
