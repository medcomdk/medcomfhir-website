# MedComDocumentPractitioner - Danish XDS Documents profiles v1.0.0-trial-use-2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComDocumentPractitioner**

## Resource Profile: MedComDocumentPractitioner 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/medcom-document-practitioner | *Version*:1.0.0-trial-use-2 |
| Draft as of 2026-06-17 | *Computable Name*:MedComDocumentPractitioner |

 
A profile including requirements for a MedCom Document Practitioner 

**Usages:**

* Refer to this Profile: [MedComContainedDocumentReference](StructureDefinition-medcom-contained-documentreference.md) and [MedComDocumentPractitionerRole](StructureDefinition-medcom-document-practitionerrole.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.xdsdocuments|current/StructureDefinition/medcom-document-practitioner)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-document-practitioner.csv), [Excel](StructureDefinition-medcom-document-practitioner.xlsx), [Schematron](StructureDefinition-medcom-document-practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-document-practitioner",
  "url" : "http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/medcom-document-practitioner",
  "version" : "1.0.0-trial-use-2",
  "name" : "MedComDocumentPractitioner",
  "status" : "draft",
  "date" : "2026-06-17T08:46:47+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://medcom.dk/"
        },
        {
          "system" : "email",
          "value" : "fhir@medcom.dk"
        }
      ]
    }
  ],
  "description" : "A profile including requirements for a MedCom Document Practitioner",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Practitioner",
        "path" : "Practitioner"
      },
      {
        "id" : "Practitioner.identifier",
        "path" : "Practitioner.identifier",
        "short" : "Globally unique, stable identifier for this resource. The same identifier SHALL be used when this resource is recreated from the same source data.",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.identifier.system",
        "path" : "Practitioner.identifier.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.identifier.value",
        "path" : "Practitioner.identifier.value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Practitioner.name",
        "path" : "Practitioner.name",
        "min" : 1
      },
      {
        "id" : "Practitioner.name.family",
        "path" : "Practitioner.name.family",
        "min" : 1
      },
      {
        "id" : "Practitioner.name.given",
        "path" : "Practitioner.name.given",
        "min" : 1
      }
    ]
  }
}

```
