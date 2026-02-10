<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-k06f2487-7aab-4e35-9a80-70431060a7e8.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-k06f2487-7aab-4e35-9a80-70431060a7e8.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-k06f2487-7aab-4e35-9a80-70431060a7e8.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-k06f2487-7aab-4e35-9a80-70431060a7e8.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-k06f2487-7aab-4e35-9a80-70431060a7e8.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-k06f2487-7aab-4e35-9a80-70431060a7e8.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/2.0.0/MessageHeader-k06f2487-7aab-4e35-9a80-70431060a7e8.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
