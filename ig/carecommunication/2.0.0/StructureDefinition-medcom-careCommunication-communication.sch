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
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-sender-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-sender-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:category) &gt;= 1">category: minimum cardinality of 'category' is 1</sch:assert>
      <sch:assert test="count(f:category) &lt;= 1">category: maximum cardinality of 'category' is 1</sch:assert>
      <sch:assert test="count(f:subject) &gt;= 1">subject: minimum cardinality of 'subject' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.meta</sch:title>
    <sch:rule context="f:Communication/f:meta">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.implicitRules</sch:title>
    <sch:rule context="f:Communication/f:implicitRules">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.language</sch:title>
    <sch:rule context="f:Communication/f:language">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.text</sch:title>
    <sch:rule context="f:Communication/f:text">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.extension</sch:title>
    <sch:rule context="f:Communication/f:extension">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), &quot;value&quot;)])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), 'value')])">Must have either extensions or value[x], not both (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.modifierExtension</sch:title>
    <sch:rule context="f:Communication/f:modifierExtension">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), &quot;value&quot;)])">Must have either extensions or value[x], not both (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.identifier</sch:title>
    <sch:rule context="f:Communication/f:identifier">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.instantiatesCanonical</sch:title>
    <sch:rule context="f:Communication/f:instantiatesCanonical">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.instantiatesUri</sch:title>
    <sch:rule context="f:Communication/f:instantiatesUri">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.basedOn</sch:title>
    <sch:rule context="f:Communication/f:basedOn">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.partOf</sch:title>
    <sch:rule context="f:Communication/f:partOf">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.inResponseTo</sch:title>
    <sch:rule context="f:Communication/f:inResponseTo">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.status</sch:title>
    <sch:rule context="f:Communication/f:status">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.statusReason</sch:title>
    <sch:rule context="f:Communication/f:statusReason">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.category</sch:title>
    <sch:rule context="f:Communication/f:category">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.priority</sch:title>
    <sch:rule context="f:Communication/f:priority">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.medium</sch:title>
    <sch:rule context="f:Communication/f:medium">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.subject</sch:title>
    <sch:rule context="f:Communication/f:subject">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.topic</sch:title>
    <sch:rule context="f:Communication/f:topic">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.about</sch:title>
    <sch:rule context="f:Communication/f:about">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.encounter</sch:title>
    <sch:rule context="f:Communication/f:encounter">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.sent</sch:title>
    <sch:rule context="f:Communication/f:sent">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.received</sch:title>
    <sch:rule context="f:Communication/f:received">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.recipient</sch:title>
    <sch:rule context="f:Communication/f:recipient">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.sender</sch:title>
    <sch:rule context="f:Communication/f:sender">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.reasonCode</sch:title>
    <sch:rule context="f:Communication/f:reasonCode">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.reasonReference</sch:title>
    <sch:rule context="f:Communication/f:reasonReference">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>f:Communication/f:payload</sch:title>
    <sch:rule context="f:Communication/f:payload">
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-datetime-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-datetime-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-datetime-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-datetime-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-contact-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-contact-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-contact-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-contact-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-attachment-identifier-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-attachment-identifier-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-datetime-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-datetime-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-datetime-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-datetime-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-contact-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-contact-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-contact-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-contact-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-datetime-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-datetime-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-datetime-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-datetime-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-extension': maximum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-contact-extension']) &gt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-contact-extension': minimum cardinality of 'extension' is 1</sch:assert>
      <sch:assert test="count(f:extension[@url = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-contact-extension']) &lt;= 1">extension with URL = 'http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-carecommunication-author-contact-extension': maximum cardinality of 'extension' is 1</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload.extension</sch:title>
    <sch:rule context="f:Communication/f:payload/f:extension">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), &quot;value&quot;)])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), 'value')])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), 'value')])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), 'value')])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), 'value')])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), &quot;value&quot;)])">Must have either extensions or value[x], not both</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), 'value')])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), 'value')])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), 'value')])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), &quot;value&quot;)])">Must have either extensions or value[x], not both</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), 'value')])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), 'value')])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), 'value')])">Must have either extensions or value[x], not both (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload.modifierExtension</sch:title>
    <sch:rule context="f:Communication/f:payload/f:modifierExtension">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), &quot;value&quot;)])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), &quot;value&quot;)])">Must have either extensions or value[x], not both (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), &quot;value&quot;)])">Must have either extensions or value[x], not both (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload.content[x] 1</sch:title>
    <sch:rule context="f:Communication/f:payload/f:content[x]">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload</sch:title>
    <sch:rule context="f:Communication/f:payload">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload.content[x].extension 1</sch:title>
    <sch:rule context="f:Communication/f:payload/f:content[x]/f:extension">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children</sch:assert>
      <sch:assert test="exists(f:extension)!=exists(f:*[starts-with(local-name(.), &quot;value&quot;)])">Must have either extensions or value[x], not both</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload.content[x].contentType 1</sch:title>
    <sch:rule context="f:Communication/f:payload/f:content[x]/f:contentType">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload.content[x].language 1</sch:title>
    <sch:rule context="f:Communication/f:payload/f:content[x]/f:language">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload.content[x].data 1</sch:title>
    <sch:rule context="f:Communication/f:payload/f:content[x]/f:data">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload.content[x].url 1</sch:title>
    <sch:rule context="f:Communication/f:payload/f:content[x]/f:url">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload.content[x].size 1</sch:title>
    <sch:rule context="f:Communication/f:payload/f:content[x]/f:size">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload.content[x].hash 1</sch:title>
    <sch:rule context="f:Communication/f:payload/f:content[x]/f:hash">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload.content[x].title 1</sch:title>
    <sch:rule context="f:Communication/f:payload/f:content[x]/f:title">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.payload.content[x].creation 1</sch:title>
    <sch:rule context="f:Communication/f:payload/f:content[x]/f:creation">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
  <sch:pattern>
    <sch:title>Communication.note</sch:title>
    <sch:rule context="f:Communication/f:note">
      <sch:assert test="@value|f:*|h:div">All FHIR elements must have a @value or children (inherited)</sch:assert>
    </sch:rule>
  </sch:pattern>
</sch:schema>
