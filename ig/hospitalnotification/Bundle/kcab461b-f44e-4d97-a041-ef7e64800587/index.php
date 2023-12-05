<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-kcab461b-f44e-4d97-a041-ef7e64800587.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-kcab461b-f44e-4d97-a041-ef7e64800587.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-kcab461b-f44e-4d97-a041-ef7e64800587.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-kcab461b-f44e-4d97-a041-ef7e64800587.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-kcab461b-f44e-4d97-a041-ef7e64800587.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-kcab461b-f44e-4d97-a041-ef7e64800587.html');
else 
  Redirect('http://medcomfhir.dk/ig/hospitalnotification/3.0.1/Bundle-kcab461b-f44e-4d97-a041-ef7e64800587.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
