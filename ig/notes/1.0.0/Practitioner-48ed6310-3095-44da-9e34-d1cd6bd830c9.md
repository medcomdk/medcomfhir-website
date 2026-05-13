# Practitioner - DK MedCom Notes v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Practitioner**

## Example Practitioner: Practitioner

Profile: [MedComDocumentPractitioner](http://medcomfhir.dk/ig/document/2.0.2/StructureDefinition-medcom-document-practitioner.html)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/7.0.0/NamingSystem-uri.html)/urn:uuid:0ee2db70-d972-4497-a156-0a8109aaa771

**name**: Sidsel Andersen 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "48ed6310-3095-44da-9e34-d1cd6bd830c9",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:0ee2db70-d972-4497-a156-0a8109aaa771"
    }
  ],
  "name" : [
    {
      "family" : "Andersen",
      "given" : ["Sidsel"]
    }
  ]
}

```
