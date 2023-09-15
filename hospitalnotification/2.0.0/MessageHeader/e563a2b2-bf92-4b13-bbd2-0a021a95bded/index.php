<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-e563a2b2-bf92-4b13-bbd2-0a021a95bded.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-e563a2b2-bf92-4b13-bbd2-0a021a95bded.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-e563a2b2-bf92-4b13-bbd2-0a021a95bded.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-e563a2b2-bf92-4b13-bbd2-0a021a95bded.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-e563a2b2-bf92-4b13-bbd2-0a021a95bded.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-e563a2b2-bf92-4b13-bbd2-0a021a95bded.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-e563a2b2-bf92-4b13-bbd2-0a021a95bded.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
