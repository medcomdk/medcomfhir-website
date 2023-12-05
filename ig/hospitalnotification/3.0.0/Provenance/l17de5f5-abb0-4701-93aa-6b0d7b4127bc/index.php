<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Provenance-l17de5f5-abb0-4701-93aa-6b0d7b4127bc.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Provenance-l17de5f5-abb0-4701-93aa-6b0d7b4127bc.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Provenance-l17de5f5-abb0-4701-93aa-6b0d7b4127bc.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Provenance-l17de5f5-abb0-4701-93aa-6b0d7b4127bc.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Provenance-l17de5f5-abb0-4701-93aa-6b0d7b4127bc.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Provenance-l17de5f5-abb0-4701-93aa-6b0d7b4127bc.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.0/Provenance-l17de5f5-abb0-4701-93aa-6b0d7b4127bc.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
