# MedComCoreCareTeam - DK MedCom Core v4.0.1

## Resource Profile: MedComCoreCareTeam 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-careteam | *Version*:4.0.1 |
| Active as of 2026-11-11 | *Computable Name*:MedComCoreCareTeam |

 
Careteam participating in the care of a patient 

## Scope and usage

This profile describes a MedComCoreCareTeam. A CareTeam is one or more professionals who plan to participate in the coordination and delivery of care for a patient or citizen. A MedComCoreCareTeam **SHALL** include a name and it may include a reference to an Organization, as the managing organisation for the careteam.

Please refer to the tab "Snapshot Table" below for the definition of the required content of a MedComCoreOrganization.

**Usages:**

* Refer to this Profile: [MedComCoreDiagnosticReport](StructureDefinition-medcom-core-diagnosticreport.md), [MedComMedia](StructureDefinition-medcom-core-media.md), [MedComCoreObservation](StructureDefinition-medcom-core-observation.md) and [SenderExtension](StructureDefinition-medcom-core-sender-extension.md)
* Examples for this Profile: [Team 2](CareTeam-fb1d34fe-6672-11ed-9022-0242ac120002.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-core-careteam.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-core-careteam.csv), [Excel](StructureDefinition-medcom-core-careteam.xlsx), [Schematron](StructureDefinition-medcom-core-careteam.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-core-careteam",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-careteam",
  "version" : "4.0.1",
  "name" : "MedComCoreCareTeam",
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
  "description" : "Careteam participating in the care of a patient",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "CareTeam",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/CareTeam",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "CareTeam",
      "path" : "CareTeam"
    },
    {
      "id" : "CareTeam.id",
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
      "path" : "CareTeam.id",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.text",
      "path" : "CareTeam.text",
      "short" : "The narrative text SHALL always be included when exchanging a MedCom FHIR Bundle.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.text.status",
      "path" : "CareTeam.text.status",
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.text.div",
      "path" : "CareTeam.text.div",
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.name",
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
      "path" : "CareTeam.name",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "CareTeam.managingOrganization",
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
      "path" : "CareTeam.managingOrganization",
      "min" : 1,
      "max" : "1",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-organization"],
        "aggregation" : ["bundled"]
      }],
      "mustSupport" : true
    }]
  }
}

```
