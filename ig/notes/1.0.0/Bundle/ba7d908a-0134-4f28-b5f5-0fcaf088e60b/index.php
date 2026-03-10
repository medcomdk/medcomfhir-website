<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Bundle-ba7d908a-0134-4f28-b5f5-0fcaf088e60b.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Bundle-ba7d908a-0134-4f28-b5f5-0fcaf088e60b.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Bundle-ba7d908a-0134-4f28-b5f5-0fcaf088e60b.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Bundle-ba7d908a-0134-4f28-b5f5-0fcaf088e60b.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Bundle-ba7d908a-0134-4f28-b5f5-0fcaf088e60b.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Bundle-ba7d908a-0134-4f28-b5f5-0fcaf088e60b.html');
else 
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0/Bundle-ba7d908a-0134-4f28-b5f5-0fcaf088e60b.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
