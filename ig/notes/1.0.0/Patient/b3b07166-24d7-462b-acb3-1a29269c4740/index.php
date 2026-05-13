<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Patient-b3b07166-24d7-462b-acb3-1a29269c4740.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Patient-b3b07166-24d7-462b-acb3-1a29269c4740.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Patient-b3b07166-24d7-462b-acb3-1a29269c4740.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Patient-b3b07166-24d7-462b-acb3-1a29269c4740.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Patient-b3b07166-24d7-462b-acb3-1a29269c4740.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Patient-b3b07166-24d7-462b-acb3-1a29269c4740.html');
else 
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Patient-b3b07166-24d7-462b-acb3-1a29269c4740.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
