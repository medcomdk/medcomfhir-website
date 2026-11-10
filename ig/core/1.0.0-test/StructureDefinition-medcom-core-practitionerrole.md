# MedComCorePractitionerRole - DK MedCom Core v1.0.0-test

## Resource Profile: MedComCorePractitionerRole 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole | *Version*:1.0.0-test |
| Active as of 2026-11-10 | *Computable Name*:MedComCorePractitionerRole |

 
PractitionerRole resource used to describe the role of a healthcare professional or another actor involved in citizen or patient care. 

### Scope and usage

This profile describes the MedComCorePractitionerRole which is used to describe a practitioner's role in a MedCom standard. If a practitioner is referenced from MedComCorePractitionerRole it shall be a MedComCorePractitioner.

Just as it is in the original FHIR ressource, the MedComCorePractitionerRole is broadly defined and describes services a practitioner is able to provide for the organization. The organization **SHALL** always be present.

It is prefered to use a code from [MedComCorePractitionerRoles](https://medcomfhir.dk/ig/terminology/ValueSet-medcom-core-PractitionerRoles.html). If these does not cover the needs, the roles can be included in a string at PractitionerRole.code.text.

If the code element is present, it shall contain either a structured code (at least one coding with both system and code populated) or a textual representation (code.text)

Please refer to the tab "Snapshot Table" below for the definition of the required content of a MedComCorePractitionerRole.

**Usages:**

* Refer to this Profile: [MedComCoreDiagnosticReport](StructureDefinition-medcom-core-diagnosticreport.md), [MedComMedia](StructureDefinition-medcom-core-media.md), [MedComCoreObservation](StructureDefinition-medcom-core-observation.md), [PractitionerExtension](StructureDefinition-medcom-core-practitioner-extension.md) and [SenderExtension](StructureDefinition-medcom-core-sender-extension.md)
* Examples for this Profile: [PractitionerRole/6057686e-666c-11ed-9022-0242ac120002](PractitionerRole-6057686e-666c-11ed-9022-0242ac120002.md) and [PractitionerRole/6ff69f1c-690d-11ed-9022-0242ac120002](PractitionerRole-6ff69f1c-690d-11ed-9022-0242ac120002.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-core-practitionerrole.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-core-practitionerrole.csv), [Excel](StructureDefinition-medcom-core-practitionerrole.xlsx), [Schematron](StructureDefinition-medcom-core-practitionerrole.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-core-practitionerrole",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole",
  "version" : "1.0.0-test",
  "name" : "MedComCorePractitionerRole",
  "status" : "active",
  "date" : "2026-11-10T08:16:44+00:00",
  "publisher" : "MedCom",
  "contact" : [{
    "name" : "MedCom",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.medcom.dk"
    }]
  }],
  "description" : "PractitionerRole resource used to describe the role of a healthcare professional or another actor involved in  citizen or patient care.",
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
  "type" : "PractitionerRole",
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-practitioner-role",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "PractitionerRole",
      "path" : "PractitionerRole",
      "constraint" : [{
        "key" : "medcom-core-practitionerrole-code-xor-text",
        "severity" : "error",
        "human" : "There shall exist a practitioner role code.coding or text if code is present.",
        "expression" : "code.exists() implies (code.coding.where(system.exists() and code.exists()).exists() xor code.text.exists())",
        "source" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"
      }]
    },
    {
      "id" : "PractitionerRole.id",
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
      "path" : "PractitionerRole.id",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.text",
      "path" : "PractitionerRole.text",
      "short" : "The narrative text SHALL always be included when exchanging a MedCom FHIR Bundle.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.text.status",
      "path" : "PractitionerRole.text.status",
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.text.div",
      "path" : "PractitionerRole.text.div",
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.practitioner",
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
      "path" : "PractitionerRole.practitioner",
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.organization",
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
      "path" : "PractitionerRole.organization",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-organization"],
        "aggregation" : ["bundled"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.code",
      "path" : "PractitionerRole.code",
      "mustSupport" : true,
      "binding" : {
        "strength" : "example",
        "valueSet" : "http://medcomfhir.dk/ig/terminology/ValueSet/medcom-core-PractitionerRoles"
      }
    },
    {
      "id" : "PractitionerRole.code.coding",
      "path" : "PractitionerRole.code.coding",
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.code.coding.system",
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
      "path" : "PractitionerRole.code.coding.system",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.code.coding.code",
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
      "path" : "PractitionerRole.code.coding.code",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "PractitionerRole.code.text",
      "extension" : [{
        "url" : "http://hl7.org/fhir/StructureDefinition/elementdefinition-translatable",
        "valueBoolean" : true
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
      "path" : "PractitionerRole.code.text",
      "mustSupport" : true
    }]
  }
}

```
