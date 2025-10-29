<?xml version="1.0" encoding="UTF-8"?>
<sch:schema xmlns:sch="http://purl.oclc.org/dsdl/schematron" queryBinding="xslt2">
  <sch:ns prefix="f" uri="http://hl7.org/fhir"/>
  <sch:ns prefix="h" uri="http://www.w3.org/1999/xhtml"/>
  <!-- 
    This file contains just the constraints for the profile DkCorePatient
    It includes the base constraints for the resource as well.
    Because of the way that schematrons and containment work, 
    you may need to use this schematron fragment to build a, 
    single schematron that validates contained resources (if you have any) 
  -->
  <sch:pattern>
    <sch:title>f:Patient/f:text</sch:title>
    <sch:rule context="f:Patient/f:text">
      <sch:assert test="count(f:id) &lt;= 1">id: maximum cardinality of 'id' is 1</sch:assert>
      <sch:assert test="count(f:status) &gt;= 1">status: minimum cardinality of 'status' is 1</sch:assert>
      <sch:assert test="count(f:status) &lt;= 1">status: maximum cardinality of 'status' is 1</sch:assert>
      <sch:assert test="count(f:div) &gt;= 1">div: minimum cardinality of 'div' is 1</sch:assert>
      <sch:assert test="count(f:div) &lt;= 1">div: maximum cardinality of 'div' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Patient/f:address</sch:title>
    <sch:rule context="f:Patient/f:address">
      <sch:assert test="count(f:extension[@url = 'http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes']) &lt;= 1">extension with URL = 'http://hl7.dk/fhir/core/StructureDefinition/dk-core-municipalityCodes': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes']) &lt;= 1">extension with URL = 'http://hl7.dk/fhir/core/StructureDefinition/dk-core-RegionalSubDivisionCodes': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://hl7.org/fhir/StructureDefinition/address-official|5.2.0']) &lt;= 1">extension with URL = 'http://hl7.org/fhir/StructureDefinition/address-official|5.2.0': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
