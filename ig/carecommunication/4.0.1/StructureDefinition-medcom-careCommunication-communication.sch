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
      <sch:assert test="count(f:identifier) &gt;= 1">identifier: minimum cardinality of 'identifier' is 1</sch:assert>
      <sch:assert test="count(f:identifier) &lt;= 1">identifier: maximum cardinality of 'identifier' is 1</sch:assert>
      <sch:assert test="count(f:category) &gt;= 1">category: minimum cardinality of 'category' is 1</sch:assert>
      <sch:assert test="count(f:category) &lt;= 1">category: maximum cardinality of 'category' is 1</sch:assert>
      <sch:assert test="count(f:subject) &gt;= 1">subject: minimum cardinality of 'subject' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Communication/f:identifier</sch:title>
    <sch:rule context="f:Communication/f:identifier">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:use) &lt;= 1">use: maximum cardinality of 'use' is 1</sch:assert>
      <sch:assert test="count(f:type) &lt;= 1">type: maximum cardinality of 'type' is 1</sch:assert>
      <sch:assert test="count(f:system) &lt;= 1">system: maximum cardinality of 'system' is 1</sch:assert>
      <sch:assert test="count(f:value) &gt;= 1">value: minimum cardinality of 'value' is 1</sch:assert>
      <sch:assert test="count(f:value) &lt;= 1">value: maximum cardinality of 'value' is 1</sch:assert>
      <sch:assert test="count(f:period) &lt;= 1">period: maximum cardinality of 'period' is 1</sch:assert>
      <sch:assert test="count(f:assigner) &lt;= 1">assigner: maximum cardinality of 'assigner' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Communication/f:category</sch:title>
    <sch:rule context="f:Communication/f:category">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:text) &lt;= 1">text: maximum cardinality of 'text' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Communication/f:category/f:coding</sch:title>
    <sch:rule context="f:Communication/f:category/f:coding">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:system) &gt;= 1">system: minimum cardinality of 'system' is 1</sch:assert>
      <sch:assert test="count(f:system) &lt;= 1">system: maximum cardinality of 'system' is 1</sch:assert>
      <sch:assert test="count(f:version) &lt;= 1">version: maximum cardinality of 'version' is 1</sch:assert>
      <sch:assert test="count(f:code) &gt;= 1">code: minimum cardinality of 'code' is 1</sch:assert>
      <sch:assert test="count(f:code) &lt;= 1">code: maximum cardinality of 'code' is 1</sch:assert>
      <sch:assert test="count(f:display) &lt;= 1">display: maximum cardinality of 'display' is 1</sch:assert>
      <sch:assert test="count(f:userSelected) &lt;= 1">userSelected: maximum cardinality of 'userSelected' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Communication/f:topic</sch:title>
    <sch:rule context="f:Communication/f:topic">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:text) &gt;= 1">text: minimum cardinality of 'text' is 1</sch:assert>
      <sch:assert test="count(f:text) &lt;= 1">text: maximum cardinality of 'text' is 1</sch:assert>
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
