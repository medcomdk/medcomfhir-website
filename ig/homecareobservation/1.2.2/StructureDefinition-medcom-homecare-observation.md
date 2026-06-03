# MedComHomeCareObservation - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComHomeCareObservation**

## Resource Profile: MedComHomeCareObservation 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation | *Version*:1.2.2 |
| Active as of 2026-06-03 | *Computable Name*:MedComHomeCareObservation |

 
This profile is intended to be used in HomeCareObservation to hold information about the observation results. 

**Usages:**

* Refer to this Profile: [MedComHomeCareObservationDiagnosticReport](StructureDefinition-medcom-homecareobservation-diagnosticreport.md)
* Examples for this Profile: [Observation/0e4a5452-1804-42d3-82ed-484df20a09f0](Observation-0e4a5452-1804-42d3-82ed-484df20a09f0.md), [Observation/1b089a05-0a5f-479d-9cbd-921a13470221](Observation-1b089a05-0a5f-479d-9cbd-921a13470221.md), [Observation/1e2351e2-77df-4135-a77b-6a4c39e4a4ca](Observation-1e2351e2-77df-4135-a77b-6a4c39e4a4ca.md), [Observation/2fc2c078-825b-491d-9f8e-34926eb4f06f](Observation-2fc2c078-825b-491d-9f8e-34926eb4f06f.md)... Show 15 more, [Observation/3fd3835d-1758-4d22-8547-000182752817](Observation-3fd3835d-1758-4d22-8547-000182752817.md), [Observation/470d39e4-d3f9-4301-82eb-b957ba33475e](Observation-470d39e4-d3f9-4301-82eb-b957ba33475e.md), [Observation/4a94a70e-6957-47a8-bec7-3e27b3145668](Observation-4a94a70e-6957-47a8-bec7-3e27b3145668.md), [Observation/4b8f899a-df12-4301-8287-9a77d46ded3d](Observation-4b8f899a-df12-4301-8287-9a77d46ded3d.md), [Observation/6bf03841-8397-4a2a-9f9a-8966b0cfa571](Observation-6bf03841-8397-4a2a-9f9a-8966b0cfa571.md), [Observation/7fcb76a7-839b-4392-a2ff-f30035faca34](Observation-7fcb76a7-839b-4392-a2ff-f30035faca34.md), [Observation/85fd1372-cf02-49c6-bd45-7205f5541a66](Observation-85fd1372-cf02-49c6-bd45-7205f5541a66.md), [Observation/8917f29d-269c-4bb3-8ce9-d255c351d52b](Observation-8917f29d-269c-4bb3-8ce9-d255c351d52b.md), [Observation/b22fcbe0-4977-433e-ad1c-d6545bc8c1cb](Observation-b22fcbe0-4977-433e-ad1c-d6545bc8c1cb.md), [Observation/ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1](Observation-ba691ee4-6d38-4f5b-82f1-40b54e3b8ad1.md), [Observation/d2b89faa-979a-430d-8887-21ccdf6f238b](Observation-d2b89faa-979a-430d-8887-21ccdf6f238b.md), [Observation/f58819ff-d727-4740-a4ef-44eefc77022e](Observation-f58819ff-d727-4740-a4ef-44eefc77022e.md), [Observation/f64a0a78-53cf-4a7f-9b89-4a2338a4935c](Observation-f64a0a78-53cf-4a7f-9b89-4a2338a4935c.md), [Observation/f70ae8b7-c1af-44a2-a21a-570c552dd7cc](Observation-f70ae8b7-c1af-44a2-a21a-570c552dd7cc.md) and [Observation/f84143f7-f586-477f-af56-e50c7d152605](Observation-f84143f7-f586-477f-af56-e50c7d152605.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.homecareobservation|current/StructureDefinition/medcom-homecare-observation)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-homecare-observation.csv), [Excel](StructureDefinition-medcom-homecare-observation.xlsx), [Schematron](StructureDefinition-medcom-homecare-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-homecare-observation",
  "url" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecare-observation",
  "version" : "1.2.2",
  "name" : "MedComHomeCareObservation",
  "title" : "MedComHomeCareObservation",
  "status" : "active",
  "date" : "2026-06-03T08:09:15+00:00",
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
  "description" : "This profile is intended to be used in HomeCareObservation to hold information about the observation results.",
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
        "id" : "Observation.text",
        "path" : "Observation.text",
        "short" : "A summary of the resource content. The narrative text shall always be included when exchanging a MedCom message. All MustSupport elements and extensions shall be included.",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding",
        "path" : "Observation.code.coding"
      },
      {
        "id" : "Observation.code.coding.display",
        "path" : "Observation.code.coding.display",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:LOINC",
        "path" : "Observation.code.coding",
        "sliceName" : "LOINC"
      },
      {
        "id" : "Observation.code.coding:LOINC.display",
        "path" : "Observation.code.coding.display",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:SNOMEDCT",
        "path" : "Observation.code.coding",
        "sliceName" : "SNOMEDCT"
      },
      {
        "id" : "Observation.code.coding:SNOMEDCT.display",
        "path" : "Observation.code.coding.display",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:NPU",
        "path" : "Observation.code.coding",
        "sliceName" : "NPU"
      },
      {
        "id" : "Observation.code.coding:NPU.code",
        "path" : "Observation.code.coding.code",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://medcomfhir.dk/ig/terminology/ValueSet/npu-observation-codes-valueset"
        }
      },
      {
        "id" : "Observation.code.coding:NPU.display",
        "path" : "Observation.code.coding.display",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:IEEE",
        "path" : "Observation.code.coding",
        "sliceName" : "IEEE"
      },
      {
        "id" : "Observation.code.coding:IEEE.display",
        "path" : "Observation.code.coding.display",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:MedCom",
        "path" : "Observation.code.coding",
        "sliceName" : "MedCom"
      },
      {
        "id" : "Observation.code.coding:MedCom.code",
        "path" : "Observation.code.coding.code",
        "binding" : {
          "strength" : "preferred",
          "valueSet" : "http://medcomfhir.dk/ig/terminology/ValueSet/medcom-observation-valueset"
        }
      },
      {
        "id" : "Observation.code.coding:MedCom.display",
        "path" : "Observation.code.coding.display",
        "mustSupport" : true
      },
      {
        "id" : "Observation.code.coding:SKS",
        "path" : "Observation.code.coding",
        "sliceName" : "SKS"
      },
      {
        "id" : "Observation.code.coding:SKS.display",
        "path" : "Observation.code.coding.display",
        "mustSupport" : true
      },
      {
        "id" : "Observation.value[x]:valueQuantity",
        "path" : "Observation.value[x]",
        "sliceName" : "valueQuantity",
        "type" : [
          {
            "code" : "Quantity"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Observation.value[x]:valueQuantity.value",
        "path" : "Observation.value[x].value",
        "maxLength" : 12,
        "mustSupport" : true
      },
      {
        "id" : "Observation.value[x]:valueString",
        "path" : "Observation.value[x]",
        "sliceName" : "valueString",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "string"
          }
        ],
        "maxLength" : 12,
        "mustSupport" : true
      },
      {
        "id" : "Observation.interpretation",
        "path" : "Observation.interpretation",
        "max" : "1",
        "mustSupport" : true,
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://medcomfhir.dk/ig/terminology/ValueSet/medcom-core-interpreation-valueset|1.8.2"
        }
      },
      {
        "id" : "Observation.interpretation.coding.code",
        "path" : "Observation.interpretation.coding.code",
        "patternCode" : "NI"
      }
    ]
  }
}

```
