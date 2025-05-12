<?php
function Redirect($url)
{
  header('Location: ' . $url, true, 302);
  exit();
}

$accept = $_SERVER['HTTP_ACCEPT'];
if (strpos($accept, 'application/json+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-5af29fb2-f724-4918-94b2-cfeb18e263ac.json2');
elseif (strpos($accept, 'application/fhir+json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-5af29fb2-f724-4918-94b2-cfeb18e263ac.json1');
elseif (strpos($accept, 'json') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-5af29fb2-f724-4918-94b2-cfeb18e263ac.json');
elseif (strpos($accept, 'application/xml+fhir') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-5af29fb2-f724-4918-94b2-cfeb18e263ac.xml2');
elseif (strpos($accept, 'application/fhir+xml') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-5af29fb2-f724-4918-94b2-cfeb18e263ac.xml1');
elseif (strpos($accept, 'html') !== false)
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-5af29fb2-f724-4918-94b2-cfeb18e263ac.html');
else 
  Redirect('http://medcomfhir.dk/ig/conditionlist/1.0.1/Condition-5af29fb2-f724-4918-94b2-cfeb18e263ac.xml');
?>
    
You should not be seeing this page. If you do, PHP has failed badly.
