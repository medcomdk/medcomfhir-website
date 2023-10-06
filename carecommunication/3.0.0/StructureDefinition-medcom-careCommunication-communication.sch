<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile Communication
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Communication</sch:title>
    <sch:rule context="f:Communication">
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-sender-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-sender-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:category) &gt;= 1">category: minimum cardinality of 'category' is 1</sch:assert>
      <sch:assert test="count(f:category) &lt;= 1">category: maximum cardinality of 'category' is 1</sch:assert>
      <sch:assert test="count(f:subject) &gt;= 1">subject: minimum cardinality of 'subject' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Communication/f:payload</sch:title>
    <sch:rule context="f:Communication/f:payload">
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
