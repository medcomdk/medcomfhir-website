<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Bundle-7ffa0111-1aa2-4d68-99f8-1fbf57448c8c.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Bundle-7ffa0111-1aa2-4d68-99f8-1fbf57448c8c.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Bundle-7ffa0111-1aa2-4d68-99f8-1fbf57448c8c.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Bundle-7ffa0111-1aa2-4d68-99f8-1fbf57448c8c.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Bundle-7ffa0111-1aa2-4d68-99f8-1fbf57448c8c.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Bundle-7ffa0111-1aa2-4d68-99f8-1fbf57448c8c.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.0/Bundle-7ffa0111-1aa2-4d68-99f8-1fbf57448c8c.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
