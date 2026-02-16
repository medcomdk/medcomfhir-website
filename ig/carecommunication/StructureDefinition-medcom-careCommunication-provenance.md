# MedComCareCommunicationProvenance - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComCareCommunicationProvenance**

## Resource Profile: MedComCareCommunicationProvenance 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-provenance | *Version*:5.0.2 |
| Active as of 2026-02-13 | *Computable Name*:MedComCareCommunicationProvenance |

 
Provenance information about the current and preceeding message. 

### Scope and usage

This profile is used as the Provenance in a CareCommunication message. This profile inherits from [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-provenance.html) and must be used as Provenance instance in the CareCommuncation message. The Provenance resource tracks information about the activity what was created, while referencing the current message and previous messages if such exist. Further, does the profile include the identifier of the message segment (also referred to as payload).

#### Entities

The element Provenance.entity is sliced. One slice is called payload, and contains the identifier for the payloads added in the current CareCommunication. The second slice is called previousMessage is used when the message is a reply or forwarding. In these cases, the Provenance.entity must refer to the previous message.

Please refer to the tab "Snapshot Table" below for the definition of the required content of a MedComCareCommunicationMessageHeader.

**Usages:**

* Examples for this Profile: [Provenance/5c689ef2-c6d7-4c74-adb8-303b772532e2](Provenance-5c689ef2-c6d7-4c74-adb8-303b772532e2.md), [Provenance/5c748aa5-64ab-47a9-a74b-033b04a19dae](Provenance-5c748aa5-64ab-47a9-a74b-033b04a19dae.md), [Provenance/6de0806d-7050-4db8-8003-0c72aee52948](Provenance-6de0806d-7050-4db8-8003-0c72aee52948.md), [Provenance/73232102-649c-4c63-88f5-94ce189b94a7](Provenance-73232102-649c-4c63-88f5-94ce189b94a7.md)... Show 2 more, [Provenance/790daa1e-bf50-4ee0-af8c-31c493e272bb](Provenance-790daa1e-bf50-4ee0-af8c-31c493e272bb.md) and [Provenance/af9b0255-1bdd-49c7-9d39-d652a587e4b2](Provenance-af9b0255-1bdd-49c7-9d39-d652a587e4b2.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.carecommunication|current/StructureDefinition/medcom-careCommunication-provenance)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-careCommunication-provenance.csv), [Excel](StructureDefinition-medcom-careCommunication-provenance.xlsx), [Schematron](StructureDefinition-medcom-careCommunication-provenance.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-careCommunication-provenance",
  "url" : "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-provenance",
  "version" : "5.0.2",
  "name" : "MedComCareCommunicationProvenance",
  "status" : "active",
  "date" : "2026-02-13T11:55:29+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.medcom.dk"
        }
      ]
    }
  ],
  "description" : "Provenance information about the current and preceeding message.",
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
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "w3c.prov",
      "uri" : "http://www.w3.org/ns/prov",
      "name" : "W3C PROV"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "fhirauditevent",
      "uri" : "http://hl7.org/fhir/auditevent",
      "name" : "FHIR AuditEvent Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Provenance",
  "baseDefinition" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Provenance",
        "path" : "Provenance"
      },
      {
        "id" : "Provenance.target",
        "path" : "Provenance.target",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-messageHeader"
            ]
          }
        ]
      },
      {
        "id" : "Provenance.activity",
        "path" : "Provenance.activity",
        "short" : "If the previous message is an EDIFACT or OIOXML message, the activity code must be reply-message",
        "binding" : {
          "strength" : "required",
          "valueSet" : "http://medcomfhir.dk/ig/terminology/ValueSet/medcom-careCommunication-messagingActivities|1.8.1"
        }
      },
      {
        "id" : "Provenance.entity",
        "path" : "Provenance.entity",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "role"
            }
          ],
          "ordered" : false,
          "rules" : "closed"
        },
        "min" : 1
      },
      {
        "id" : "Provenance.entity:preceedingMessage",
        "path" : "Provenance.entity",
        "sliceName" : "preceedingMessage",
        "short" : "Shall be included when the current message is a response to a previous FHIR message.",
        "min" : 0,
        "max" : "1",
        "mustSupport" : true
      },
      {
        "id" : "Provenance.entity:preceedingMessage.role",
        "path" : "Provenance.entity.role",
        "short" : "When a message is a response or a forwarding message the role shall be 'revision'.",
        "patternCode" : "revision"
      },
      {
        "id" : "Provenance.entity:preceedingMessage.what",
        "path" : "Provenance.entity.what",
        "short" : "A reference to the previous message. If the previous message is a FHIR message , the reference element must be used and if the previous message is an EDIFACT or OIOXML, the identifier element must be used."
      },
      {
        "id" : "Provenance.entity:preceedingMessage.what.reference",
        "path" : "Provenance.entity.what.reference",
        "short" : "If the previous message is a FHIR message, this element must contain the MessageHeader.id from previous message."
      },
      {
        "id" : "Provenance.entity:preceedingMessage.what.identifier",
        "path" : "Provenance.entity.what.identifier",
        "short" : "If the previous message is EDIFACT or OIOXML, this element must be expressed as [lokationsnummer]#[brevid] from the EDIFACT or OIOXML message."
      },
      {
        "id" : "Provenance.entity:payload",
        "path" : "Provenance.entity",
        "sliceName" : "payload",
        "short" : "An identifier for the payload included during this revision. If more payloads are added, each payload must be represented with an individual entity.",
        "min" : 1,
        "max" : "*",
        "mustSupport" : true
      },
      {
        "id" : "Provenance.entity:payload.role",
        "path" : "Provenance.entity.role",
        "short" : "The role shall be 'source' or 'revision'.",
        "patternCode" : "source"
      },
      {
        "id" : "Provenance.entity:payload.what",
        "path" : "Provenance.entity.what",
        "short" : "A reference to the payload included in this message."
      },
      {
        "id" : "Provenance.entity:payload.what.identifier",
        "path" : "Provenance.entity.what.identifier",
        "short" : "The identifier of the newly included Communication.payload.extension.valueIdentifier must be included here.",
        "min" : 1
      }
    ]
  }
}

```
