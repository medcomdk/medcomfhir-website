# Practitioner - DK MedCom EKG v1.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Practitioner**

## Example Practitioner: Practitioner

Profile: [MedComDocumentPractitioner](http://medcomfhir.dk/ig/document/2.0.0/StructureDefinition-medcom-document-practitioner.html)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/6.2.0/NamingSystem-uri.html)/urn:uuid:a6c11dab-a9e9-46b8-9bb3-fe06d6587e07

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
      "value" : "urn:uuid:a6c11dab-a9e9-46b8-9bb3-fe06d6587e07"
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
