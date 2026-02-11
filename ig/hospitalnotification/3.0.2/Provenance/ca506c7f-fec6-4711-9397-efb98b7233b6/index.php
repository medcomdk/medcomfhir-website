<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-ca506c7f-fec6-4711-9397-efb98b7233b6.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-ca506c7f-fec6-4711-9397-efb98b7233b6.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-ca506c7f-fec6-4711-9397-efb98b7233b6.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-ca506c7f-fec6-4711-9397-efb98b7233b6.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-ca506c7f-fec6-4711-9397-efb98b7233b6.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-ca506c7f-fec6-4711-9397-efb98b7233b6.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.2/Provenance-ca506c7f-fec6-4711-9397-efb98b7233b6.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
