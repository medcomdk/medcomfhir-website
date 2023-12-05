<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-a8ec5ae1-e324-453d-9d9f-39ffe41f308a.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-a8ec5ae1-e324-453d-9d9f-39ffe41f308a.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-a8ec5ae1-e324-453d-9d9f-39ffe41f308a.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-a8ec5ae1-e324-453d-9d9f-39ffe41f308a.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-a8ec5ae1-e324-453d-9d9f-39ffe41f308a.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-a8ec5ae1-e324-453d-9d9f-39ffe41f308a.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Organization-a8ec5ae1-e324-453d-9d9f-39ffe41f308a.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
