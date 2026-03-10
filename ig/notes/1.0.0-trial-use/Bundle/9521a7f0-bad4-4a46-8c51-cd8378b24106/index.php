<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/Bundle-9521a7f0-bad4-4a46-8c51-cd8378b24106.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/Bundle-9521a7f0-bad4-4a46-8c51-cd8378b24106.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/Bundle-9521a7f0-bad4-4a46-8c51-cd8378b24106.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/Bundle-9521a7f0-bad4-4a46-8c51-cd8378b24106.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/Bundle-9521a7f0-bad4-4a46-8c51-cd8378b24106.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/Bundle-9521a7f0-bad4-4a46-8c51-cd8378b24106.html');
else 
  Redirect('http://medcomfhir.dk/ig/notes/1.0.0-trial-use/Bundle-9521a7f0-bad4-4a46-8c51-cd8378b24106.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
