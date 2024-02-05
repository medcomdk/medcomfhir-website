<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Bundle-a8c041b8-c65a-4fde-a90f-962076918834.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Bundle-a8c041b8-c65a-4fde-a90f-962076918834.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Bundle-a8c041b8-c65a-4fde-a90f-962076918834.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Bundle-a8c041b8-c65a-4fde-a90f-962076918834.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Bundle-a8c041b8-c65a-4fde-a90f-962076918834.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Bundle-a8c041b8-c65a-4fde-a90f-962076918834.html');
else 
  Redirect('http://medcomfhir.dk/ig/acknowledgement/2.0.2/Bundle-a8c041b8-c65a-4fde-a90f-962076918834.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
