<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-o7056980-a8b2-42aa-8a0e-c1fc85d1f40d.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-o7056980-a8b2-42aa-8a0e-c1fc85d1f40d.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-o7056980-a8b2-42aa-8a0e-c1fc85d1f40d.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-o7056980-a8b2-42aa-8a0e-c1fc85d1f40d.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-o7056980-a8b2-42aa-8a0e-c1fc85d1f40d.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-o7056980-a8b2-42aa-8a0e-c1fc85d1f40d.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-o7056980-a8b2-42aa-8a0e-c1fc85d1f40d.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
