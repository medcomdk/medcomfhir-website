<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-cc47c1e2-78e6-4291-b071-f423a4f7fbfe.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-cc47c1e2-78e6-4291-b071-f423a4f7fbfe.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-cc47c1e2-78e6-4291-b071-f423a4f7fbfe.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-cc47c1e2-78e6-4291-b071-f423a4f7fbfe.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-cc47c1e2-78e6-4291-b071-f423a4f7fbfe.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-cc47c1e2-78e6-4291-b071-f423a4f7fbfe.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/MessageHeader-cc47c1e2-78e6-4291-b071-f423a4f7fbfe.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
