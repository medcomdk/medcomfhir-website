# MedComDocumentCareTeam - DK MedCom Document v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComDocumentCareTeam**

## Resource Profile: MedComDocumentCareTeam 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-careteam | *Version*:2.0.1 |
| Active as of 2026-03-10 | *Computable Name*:MedComDocumentCareTeam |

 
Careteam participating in the care of a patient. 

### Scope and usage

The MedComDocumentPractitionerRole profile describes the resource that shall be used in MedCom FHIR Documents containing PractitionerRoles. It is interited from the [MedComCoreCareTeam](https://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-careteam.html) profile, and has narrowed down which profile that can be referenced.

**Usages:**

* Refer to this Profile: [MedComDocumentObservation](StructureDefinition-medcom-document-observation.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.document|current/StructureDefinition/medcom-document-careteam)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-document-careteam.csv), [Excel](StructureDefinition-medcom-document-careteam.xlsx), [Schematron](StructureDefinition-medcom-document-careteam.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-document-careteam",
  "url" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-careteam",
  "version" : "2.0.1",
  "name" : "MedComDocumentCareTeam",
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
  "description" : "Careteam participating in the care of a patient.",
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "CareTeam",
  "baseDefinition" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-careteam",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "CareTeam",
        "path" : "CareTeam"
      },
      {
        "id" : "CareTeam.identifier",
        "path" : "CareTeam.identifier",
        "short" : "Globally unique, stable identifier for this resource. The same identifier SHALL be used when this resource is recreated from the same source data.",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "CareTeam.identifier.system",
        "path" : "CareTeam.identifier.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "CareTeam.identifier.value",
        "path" : "CareTeam.identifier.value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "CareTeam.managingOrganization",
        "path" : "CareTeam.managingOrganization",
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
