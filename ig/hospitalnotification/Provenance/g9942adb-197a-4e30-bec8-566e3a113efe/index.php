<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-g9942adb-197a-4e30-bec8-566e3a113efe.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-g9942adb-197a-4e30-bec8-566e3a113efe.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-g9942adb-197a-4e30-bec8-566e3a113efe.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-g9942adb-197a-4e30-bec8-566e3a113efe.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-g9942adb-197a-4e30-bec8-566e3a113efe.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-g9942adb-197a-4e30-bec8-566e3a113efe.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Provenance-g9942adb-197a-4e30-bec8-566e3a113efe.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
