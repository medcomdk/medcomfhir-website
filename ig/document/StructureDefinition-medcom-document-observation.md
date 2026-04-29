# MedComDocumentObservation - DK MedCom Document v2.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComDocumentObservation**

## Resource Profile: MedComDocumentObservation 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-observation | *Version*:2.0.2 |
| Active as of 2026-04-29 | *Computable Name*:MedComDocumentObservation |

 
Observation profile to be used in MedCom FHIR Documents. 

### Scope and usage

The MedComDocumentObservation profile describes the resource that shall be used in MedCom FHIR Documents containing Observations. It is interited from the [MedComCoreObservation](https://medcomfhir.dk/ig/document/StructureDefinition-medcom-document-organization.html) profile, and has narrowed down which profiles can be referenced.

**Usages:**

* Examples for this Profile: [Observation/ef810168-ee8c-4f14-9012-6aff6c1d86e7](Observation-ef810168-ee8c-4f14-9012-6aff6c1d86e7.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.document|current/StructureDefinition/medcom-document-observation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-document-observation.csv), [Excel](StructureDefinition-medcom-document-observation.xlsx), [Schematron](StructureDefinition-medcom-document-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-document-observation",
  "url" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-observation",
  "version" : "2.0.2",
  "name" : "MedComDocumentObservation",
  "title" : "MedComDocumentObservation",
  "status" : "active",
  "date" : "2026-04-29T08:07:21+00:00",
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
  "description" : "Observation profile to be used in MedCom FHIR Documents.",
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
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "sct-concept",
      "uri" : "http://snomed.info/conceptdomain",
      "name" : "SNOMED CT Concept Domain Binding"
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
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "sct-attr",
      "uri" : "http://snomed.org/attributebinding",
      "name" : "SNOMED CT Attribute Binding"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Observation",
        "path" : "Observation"
      },
      {
        "id" : "Observation.identifier",
        "path" : "Observation.identifier",
        "short" : "Globally unique, stable identifier for this resource. The same identifier SHALL be used when this resource is recreated from the same source data.",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Observation.identifier.system",
        "path" : "Observation.identifier.system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.identifier.value",
        "path" : "Observation.identifier.value",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Observation.subject",
        "path" : "Observation.subject",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-patient"
            ],
            "aggregation" : ["bundled"]
          }
        ]
      },
      {
        "id" : "Observation.performer",
        "path" : "Observation.performer",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-organization",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitionerrole",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-careteam",
              "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-patient",
              "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"
            ]
          }
        ]
      }
    ]
  }
}

```
