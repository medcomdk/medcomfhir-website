<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-2565d3de-082e-4368-9160-4c719071026b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-2565d3de-082e-4368-9160-4c719071026b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-2565d3de-082e-4368-9160-4c719071026b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-2565d3de-082e-4368-9160-4c719071026b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-2565d3de-082e-4368-9160-4c719071026b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-2565d3de-082e-4368-9160-4c719071026b.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-2565d3de-082e-4368-9160-4c719071026b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
