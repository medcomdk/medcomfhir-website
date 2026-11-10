# MedComCoreEncounter - DK MedCom Core v1.0.0-test

## Resource Profile: MedComCoreEncounter 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-encounter | *Version*:1.0.0-test |
| Active as of 2026-11-10 | *Computable Name*:MedComCoreEncounter |

 
An interaction between a patient/citizen and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient/citizen. 

### Scope and usage

This profile describes the MedComCoreEncounter. An encounter describes the interaction between a patient and one or more healthcare providers for the purpose of providing healthcare services or assessing the health status of a patient. An encounter can take place in an ambulatory, an emergency, at the citizen's home, virtually and so on.

The base expectations when describing an encounter in a Danish context is to include the subject of the encounter as well as a status and class, which are described below.

Please refer to the tab "Snapshot Table" below for the definition of the required content of a MedComCoreEncounter.

#### Status and class

A status and class **SHALL** be included in a MedComCoreEncounter.

The status refers to the current state of the encounter. This will most often change due to the nature an encounter, as it will pass through many statuses which follows the workflow of the encounter. A status can be 'in-progress' describing that the patient is present or the meeting has begun, or 'finished' describing that the encounter is finished.

The class describes in which setting the encounter took place. A setting of the encounter can be 'emergency', 'ambulant' or 'inpatient'.

#### EpisodeOfCare identifiers

Encounter.episodeOfCare links encounters and messages concerning the same admission or contact. It can carry an LPR3 identifier from the [Danish National Patient Registry](https://www.esundhed.dk/Registre/Landspatientregisteret), a locally defined identifier, or both.

The LPR3 slice uses the [LPR3 Identifier profile](StructureDefinition-lpr3-Identifier.md), which enforces its system and UUIDv5 requirements. A locally defined identifier **SHALL** be a UUID written with hyphens, as in the example below. Identifier cardinalities and the system/value requirements are defined in the snapshot.

##### Use in messaging flows

These exchange requirements apply when using Encounter.episodeOfCare in MedCom FHIR messaging. They govern behavior across messages and are not enforced by validating a single Encounter.

* When a message includes an episode of care identifier, the following messages in the same flow **SHALL** return it. Examples include ReportOfAdmission, ProgressOfCarePlan, HospitalNotification, and CareCommunication. An initial CareCommunication concerning an admission can include its episode of care identifier.
* If the initial message contains one identifier, whether locally defined or LPR3, subsequent messages **SHALL** return that identifier. Identifiers added later **SHOULD** be returned where possible and can otherwise be ignored.
* If the initial message contains several identifiers, subsequent messages **SHALL** return the locally defined UUID for the admission/contact. The other identifiers **SHOULD** be returned where possible and can otherwise be ignored.

##### Locally defined identifier system

The identifier system distinguishes locally defined identifiers from LPR3 identifiers. Use an additional Encounter.episodeOfCare entry with its identifier.system to distinguish a locally defined identifier; the profile's open slicing permits these entries. Slicing is defined in a profile, rather than created in each instance.

It is recommended to use the organization's SOR endpoint as the local identifier system, consistent with MessageHeader.source.endpoint in messaging.

```
<episodeOfCare>
  <identifier>
    <system value="https://sor2.sum.dsdn.dk/#id=265161000016000"/>
    <value value="bd481c38-a921-11ed-afa1-0242ac120002"/>
  </identifier>
</episodeOfCare>

```

##### OIOXML and EDIFACT interoperability

The use of episode of care identifiers in OIOXML and EDIFACT is described in the [municipality and hospital message-flow document (Danish PDF)](http://svn.medcom.dk/svn/releases/Standarder/National%20Sygehus-Kommunesamarbejde/1.0.3/Bilag/Flow%20hjemmepleje-sygehus.pdf).

FHIR episode of care UUIDs **SHALL** retain their hyphens. In OIOXML/EDIFACT, the UUID **SHALL** be written without hyphens because of the legacy technical limitation. Systems are responsible for recognizing and correlating these representations of the same identifier.

**Usages:**

* Examples for this Profile: [Encounter/6220b42d-c4fd-4c77-bae7-78e7d890dc8d](Encounter-6220b42d-c4fd-4c77-bae7-78e7d890dc8d.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-core-encounter.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-core-encounter.csv), [Excel](StructureDefinition-medcom-core-encounter.xlsx), [Schematron](StructureDefinition-medcom-core-encounter.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-core-encounter",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-encounter",
  "version" : "1.0.0-test",
  "name" : "MedComCoreEncounter",
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
  "description" : "An interaction between a patient/citizen and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient/citizen.",
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
    "identity" : "v2",
    "uri" : "http://hl7.org/v2",
    "name" : "HL7 v2 Mapping"
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Encounter",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Encounter",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Encounter",
      "path" : "Encounter"
    },
    {
      "id" : "Encounter.id",
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
      "path" : "Encounter.id",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Encounter.text",
      "path" : "Encounter.text",
      "short" : "The narrative text SHALL always be included when exchanging a MedCom FHIR Bundle.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Encounter.text.status",
      "path" : "Encounter.text.status",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.text.div",
      "path" : "Encounter.text.div",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.status",
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
      "path" : "Encounter.status",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.class",
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
      "path" : "Encounter.class",
      "mustSupport" : true,
      "binding" : {
        "strength" : "required",
        "valueSet" : "http://medcomfhir.dk/ig/terminology/ValueSet/medcom-core-encounter-class"
      }
    },
    {
      "id" : "Encounter.subject",
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
      "path" : "Encounter.subject",
      "min" : 1,
      "type" : [{
        "code" : "Reference",
        "targetProfile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-patient"],
        "aggregation" : ["bundled"]
      }],
      "mustSupport" : true
    },
    {
      "id" : "Encounter.episodeOfCare",
      "path" : "Encounter.episodeOfCare",
      "slicing" : {
        "discriminator" : [{
          "type" : "value",
          "path" : "identifier.system"
        }],
        "rules" : "open"
      },
      "mustSupport" : true
    },
    {
      "id" : "Encounter.episodeOfCare.identifier",
      "path" : "Encounter.episodeOfCare.identifier",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.episodeOfCare.identifier.system",
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
      "path" : "Encounter.episodeOfCare.identifier.system",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Encounter.episodeOfCare.identifier.value",
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
      "path" : "Encounter.episodeOfCare.identifier.value",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Encounter.episodeOfCare:lpr3identifier",
      "path" : "Encounter.episodeOfCare",
      "sliceName" : "lpr3identifier",
      "definition" : "Shall contain the episode of care if reported to the Danish National Patient Registry",
      "min" : 0,
      "max" : "1",
      "mustSupport" : true
    },
    {
      "id" : "Encounter.episodeOfCare:lpr3identifier.identifier",
      "path" : "Encounter.episodeOfCare.identifier",
      "definition" : "Shall contain the id of the episode of care reported to the Danish National Patient Registry if known",
      "min" : 1,
      "type" : [{
        "code" : "Identifier",
        "profile" : ["http://medcomfhir.dk/ig/core/StructureDefinition/lpr3-Identifier"]
      }]
    },
    {
      "id" : "Encounter.account",
      "path" : "Encounter.account",
      "max" : "0"
    },
    {
      "id" : "Encounter.serviceProvider",
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
      "path" : "Encounter.serviceProvider",
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
