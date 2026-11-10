# MedComCoreObservation - DK MedCom Core v1.0.0-test

## Resource Profile: MedComCoreObservation 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-observation | *Version*:1.0.0-test |
| Active as of 2026-11-10 | *Computable Name*:MedComCoreObservation |

 
Observation profile. 

### Scope and use

This profile is a MedCom Core profile for observation measurements and simple assertions made about a patient.

It is intended to represent observations for a variety cases including for example:

* laboratory observations
* observations performed by a municipal acute care team
* EKG study data

#### Status

The MedComCoreObservation resource require an indication of the observation status. To indicate the observation status, a code from this valueSet defined by MedCom **SHALL** be used. [ Click here se the status codes.](http://medcomfhir.dk/ig/terminology/ValueSet-medcom-core-observation-status.html)

#### Codes

In an Observation resource, codes from CodeSystems are used to describe what is observed in the elements Observation.code.coding. In the element Observation.code.coding six possible CodeSystem are specified.

* NPU codes are the most used codes in Danmark to express analysis performed at the laboratory.
* LOINC codes is an international Codsystem for health measurements, observations, and documents. LOINC codes are less stricted then NPU codes.
* IEEE codes are internationaly codes for devices and can be used to express an original observation from a device.
* SKS codes are classifications for use in documenting patients and healthcare services.SKS have a few observation codes in use, most are found in the ‘R’ Hierarchy - see e.g. https://medinfo.dk/sks/brows.php.
* MedCom codes are Danish codes, that have been necessary in Danish interoperability projects through time and are used to express analysis performed at the laboratory.
* SNOMED CT codes are the world's most comprehensive clinical terminology.SNOMED CT is often used as a reference terminology, to give a common language of retrieval for data that have originally been defined or coded in some other way

#### Use of the valueAttachment Extension

This profile contains a FHIR extension designed to hold an attachment encoded in Base64. The `valueAttachment` element is implemented as an extension because the base `value[x]` element does not support the `Attachment` type. The extension can also capture essential metadata for the attachment.

**Usages:**

* Refer to this Profile: [MedComCoreDiagnosticReport](StructureDefinition-medcom-core-diagnosticreport.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-core-observation.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-core-observation.csv), [Excel](StructureDefinition-medcom-core-observation.xlsx), [Schematron](StructureDefinition-medcom-core-observation.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-core-observation",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-observation",
  "version" : "1.0.0-test",
  "name" : "MedComCoreObservation",
  "title" : "MedComCoreObservation",
  "status" : "active",
  "date" : "2026-11-10T08:19:20+00:00",
  "publisher" : "MedCom",
  "contact" : [{
    "name" : "MedCom",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.medcom.dk"
    }]
  }],
  "description" : "Observation profile.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Observation",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-observation",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Observation",
      "path" : "Observation"
    },
    {
      "id" : "Observation.id",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:in-narrative"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://medcomfhir.dk/ig/core/ActorDefinition/ProducerActor"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "Observation.id",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.text",
      "path" : "Observation.text",
      "short" : "The narrative text SHALL always be included when exchanging a MedCom FHIR Bundle.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Observation.text.status",
      "path" : "Observation.text.status",
      "mustSupport" : true
    },
    {
      "id" : "Observation.text.div",
      "path" : "Observation.text.div",
      "mustSupport" : true
    },
    {
      "id" : "Observation.extension",
      "path" : "Observation.extension",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "url"
        }],
        "ordered" : false,
        "rules" : "open"
      }
    },
    {
      "id" : "Observation.extension:valueAttachment",
      "path" : "Observation.extension",
      "sliceName" : "valueAttachment",
      "min" : 0,
      "max" : "*",
      "type" : [{
        "code" : "Extension",
        "profile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-observation-value-attachment-extension"]
      }]
    },
    {
      "id" : "Observation.status",
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-display-hint",
        "valueString" : "default: final"
      },
      {
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:in-narrative"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://medcomfhir.dk/ig/core/ActorDefinition/ProducerActor"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "Observation.status",
      "short" : "registered | partial | preliminary | final | corrected | cancelled | entered-in-error",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://medcomfhir.dk/ig/terminology/ValueSet/medcom-core-observation-status"
      }
    },
    {
      "id" : "Observation.code",
      "path" : "Observation.code",
      "mustSupport" : true
    },
    {
      "id" : "Observation.subject",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:in-narrative"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://medcomfhir.dk/ig/core/ActorDefinition/ProducerActor"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "Observation.subject",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-patient"],
        "aggregation" : ["bundled"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Observation.effective[x]",
      "path" : "Observation.effective[x]",
      "short" : "The date and time of the observation."
    },
    {
      "id" : "Observation.performer",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:in-narrative"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://medcomfhir.dk/ig/core/ActorDefinition/ProducerActor"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "Observation.performer",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-organization",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-careteam",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-patient",
        "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
      }],
      "mustSupport" : true
    }]
  }
}

```
