# MedComMedia - DK MedCom Core v4.0.1

## Resource Profile: MedComMedia 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-media | *Version*:4.0.1 |
| Active as of 2026-11-11 | *Computable Name*:MedComCoreMedia |

 
Profile to capture relevant images,audio, video and document as part of the healthcare process 

### Scope and use

This profile is a MedCom Core profile for media and is intended to represent relevant attachments for a variety cases including:

* laboratory observations
* observations performed by a municipal acute care team

Only an attachment of the permitted formats must be included. [Click here to see the permitted formats of an attachment](https://medcomfhir.dk/ig/terminology/ValueSet-medcom-core-attachmentMimeTypes.html)

The attached file **SHALL** be base64-encoded and added to the element MedComCoreMedia.content.data If the attached file is sent, it is a requirement that the ID and title of the attached file **SHALL** be sent. The ID of the attachment **SHALL** be expressed using Media.identifier element. The Media.content.titel element **SHALL** be used to express the titel of the attachment.

**Usages:**

* Refer to this Profile: [MedComCoreDiagnosticReport](StructureDefinition-medcom-core-diagnosticreport.md)
* Examples for this Profile: [Media/cb277ee2-5d96-4762-829d-d36449b2b17f](Media-cb277ee2-5d96-4762-829d-d36449b2b17f.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-core-media.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-core-media.csv), [Excel](StructureDefinition-medcom-core-media.xlsx), [Schematron](StructureDefinition-medcom-core-media.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-core-media",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-media",
  "version" : "4.0.1",
  "name" : "MedComCoreMedia",
  "title" : "MedComMedia",
  "status" : "active",
  "date" : "2026-11-11T07:42:01+00:00",
  "publisher" : "MedCom",
  "contact" : [{
    "name" : "MedCom",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.medcom.dk"
    }]
  }],
  "description" : "Profile to capture relevant images,audio, video and document as part of the healthcare process",
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
    "identity" : "dicom",
    "uri" : "http://nema.org/dicom",
    "name" : "DICOM Tag Mapping"
  },
  {
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  },
  {
    "identity" : "sct-concept",
    "uri" : "http://snomed.info/conceptdomain",
    "name" : "SNOMED CT Concept Domain Binding"
  },
  {
    "identity" : "sct-attr",
    "uri" : "http://snomed.org/attributebinding",
    "name" : "SNOMED CT Attribute Binding"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Media",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Media",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Media",
      "path" : "Media"
    },
    {
      "id" : "Media.id",
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
      "path" : "Media.id",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Media.text",
      "path" : "Media.text",
      "short" : "The narrative text SHALL always be included when exchanging a MedCom FHIR Bundle.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Media.text.status",
      "path" : "Media.text.status",
      "mustSupport" : true
    },
    {
      "id" : "Media.text.div",
      "path" : "Media.text.div",
      "mustSupport" : true
    },
    {
      "id" : "Media.status",
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
      "path" : "Media.status",
      "mustSupport" : true
    },
    {
      "id" : "Media.operator",
      "path" : "Media.operator",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-organization",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-careteam",
        "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-patient",
        "http://hl7.org/fhir/StructureDefinition/Device",
        "http://hl7.dk/fhir/core/StructureDefinition/dk-core-related-person"]
      }]
    },
    {
      "id" : "Media.content",
      "path" : "Media.content",
      "mustSupport" : true
    }]
  }
}

```
