# MedComCorePractitioner - DK MedCom Core v4.0.1

## Resource Profile: MedComCorePractitioner 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner | *Version*:4.0.1 |
| Active as of 2026-11-11 | *Computable Name*:MedComCorePractitioner |

 
Practitioner resource is used to describe a healthcare professional or another actor involved in citizen or patient care. 

### Scope and usage

This profile describes the MedComCorePractitioner which is used to describe a Practitioner in a MedCom standard. The MedComCorePractitioner is inherited from the [DkCorePractitioner](https://hl7.dk/fhir/core/2.0.0/StructureDefinition-dk-core-practitioner.html) profile defined by HL7 Denmark.

MedComCorePractitioner is broardly defined (just as it is in the original FHIR ressource and DkCorePractitioner), and may be used to define all the professionals involved directly or indirectly in citizen and patient care and well-being.

Please refer to the tab "Snapshot Table" below for the definition of the required content of a MedComCorePractitioner.

**Usages:**

* Refer to this Profile: [MedComCoreDiagnosticReport](StructureDefinition-medcom-core-diagnosticreport.md), [MedComMedia](StructureDefinition-medcom-core-media.md), [MedComCoreObservation](StructureDefinition-medcom-core-observation.md) and [MedComCorePractitionerRole](StructureDefinition-medcom-core-practitionerrole.md)
* Examples for this Profile: [Practitioner/e9eacb62-666b-11ed-9022-0242ac120002](Practitioner-e9eacb62-666b-11ed-9022-0242ac120002.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-core-practitioner.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-core-practitioner.csv), [Excel](StructureDefinition-medcom-core-practitioner.xlsx), [Schematron](StructureDefinition-medcom-core-practitioner.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-core-practitioner",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner",
  "version" : "4.0.1",
  "name" : "MedComCorePractitioner",
  "status" : "active",
  "date" : "2026-11-11T07:45:06+00:00",
  "publisher" : "MedCom",
  "contact" : [{
    "name" : "MedCom",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.medcom.dk"
    }]
  }],
  "description" : "Practitioner resource is used to describe a healthcare professional or another actor involved in citizen or patient care.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Practitioner",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Practitioner",
      "path" : "Practitioner"
    },
    {
      "id" : "Practitioner.id",
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
      "path" : "Practitioner.id",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Practitioner.text",
      "path" : "Practitioner.text",
      "short" : "The narrative text SHALL always be included when exchanging a MedCom FHIR Bundle.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Practitioner.text.status",
      "path" : "Practitioner.text.status",
      "mustSupport" : true
    },
    {
      "id" : "Practitioner.text.div",
      "path" : "Practitioner.text.div",
      "mustSupport" : true
    },
    {
      "id" : "Practitioner.name",
      "path" : "Practitioner.name",
      "mustSupport" : true
    },
    {
      "id" : "Practitioner.name.family",
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
      "path" : "Practitioner.name.family",
      "mustSupport" : true
    },
    {
      "id" : "Practitioner.name.given",
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
      "path" : "Practitioner.name.given",
      "mustSupport" : true
    }]
  }
}

```
