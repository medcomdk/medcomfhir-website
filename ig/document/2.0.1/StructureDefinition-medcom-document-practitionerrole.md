# MedComDocumentPractitionerRole - DK MedCom Document v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComDocumentPractitionerRole**

## Resource Profile: MedComDocumentPractitionerRole 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitionerrole | *Version*:2.0.1 |
| Active as of 2026-03-10 | *Computable Name*:MedComDocumentPractitionerRole |

 
Document PractitionerRole resource used to describe the role of a healthcare professional or another actor involved in citizen or patient care. 

### Scope and usage

The MedComDocumentCareTeam profile describes the resource that shall be used in MedCom FHIR Documents containing CareTeams. It is interited from the [MedComCorePractitionerRole](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-practitionerrole.html) profile, and has narrowed down which profile that can be referenced.

**Usages:**

* Refer to this Profile: [MedComContainedDocumentReference](StructureDefinition-medcom-contained-documentreference.md), [MedComDocumentComposition](StructureDefinition-medcom-document-composition.md) and [MedComDocumentObservation](StructureDefinition-medcom-document-observation.md)
* Examples for this Profile: [PractitionerRole/bb6fa4e1-f8b1-4bf4-b77e-bb03b2cc9820](PractitionerRole-bb6fa4e1-f8b1-4bf4-b77e-bb03b2cc9820.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.document|current/StructureDefinition/medcom-document-practitionerrole)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-document-practitionerrole.csv), [Excel](StructureDefinition-medcom-document-practitionerrole.xlsx), [Schematron](StructureDefinition-medcom-document-practitionerrole.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-document-practitionerrole",
  "url" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitionerrole",
  "version" : "2.0.1",
  "name" : "MedComDocumentPractitionerRole",
  "status" : "active",
  "date" : "2026-03-10T10:51:18+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.medcom.dk"
        },
        {
          "system" : "email",
          "value" : "fhir@medcom.dk"
        }
      ]
    }
  ],
  "description" : "Document PractitionerRole resource used to describe the role of a healthcare professional or another actor involved in citizen or patient care.",
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
  "type" : "PractitionerRole",
  "baseDefinition" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "PractitionerRole",
        "path" : "PractitionerRole"
      },
      {
        "id" : "PractitionerRole.identifier",
        "path" : "PractitionerRole.identifier",
        "short" : "Globally unique, stable identifier for this resource. The same identifier SHALL be used when this resource is recreated from the same source data.",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "PractitionerRole.identifier.system",
        "path" : "PractitionerRole.identifier.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "PractitionerRole.identifier.value",
        "path" : "PractitionerRole.identifier.value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "PractitionerRole.practitioner",
        "path" : "PractitionerRole.practitioner",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner"
            ]
          }
        ]
      },
      {
        "id" : "PractitionerRole.organization",
        "path" : "PractitionerRole.organization",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-organization"
            ],
            "aggregation" : ["bundled"]
          }
        ]
      }
    ]
  }
}

```
