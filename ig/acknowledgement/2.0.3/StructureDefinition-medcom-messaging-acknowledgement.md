# MedComAcknowledgementMessage - DK MedCom acknowledgement v2.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComAcknowledgementMessage**

## Resource Profile: MedComAcknowledgementMessage 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-messaging-acknowledgement | *Version*:2.0.3 |
| Active as of 2026-02-05 | *Computable Name*:MedComAcknowledgementMessage |

 
Base resource for all MedCom Acknowledgement messages. 

### Scope and usage

This profile is the root profile of MedCom Acknowledgement message. Constraint and rules from MedComMessagingMessage are inherited to this profile. The only change is that the MessageHeader shall be a MedComAcknowledgementMessageHeader.

**Note:** Be aware that entries in a message in general are unordered. Recipients of a message can therefore not assume any particular sequences of elements.

Below can the structure of a MedCom Acknowledgement message be seen.

![](./MedComAcknowledgementMessage.svg)

Please refer to the tab "Snapshot Table(Must support)" below for the definition of the required content of a MedComAcknowledgementMessage.

**Usages:**

* Examples for this Profile: [Bundle/a8c041b8-c65a-4fde-a90f-962076918834](Bundle-a8c041b8-c65a-4fde-a90f-962076918834.md), [Bundle/bc9535ef-ed94-4060-a928-7baddec7ee71](Bundle-bc9535ef-ed94-4060-a928-7baddec7ee71.md) and [Bundle/c9c2b2f6-0807-11ed-861d-0242ac120002](Bundle-c9c2b2f6-0807-11ed-861d-0242ac120002.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.acknowledgement|current/StructureDefinition/medcom-messaging-acknowledgement)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-messaging-acknowledgement.csv), [Excel](StructureDefinition-medcom-messaging-acknowledgement.xlsx), [Schematron](StructureDefinition-medcom-messaging-acknowledgement.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-messaging-acknowledgement",
  "url" : "http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-messaging-acknowledgement",
  "version" : "2.0.3",
  "name" : "MedComAcknowledgementMessage",
  "status" : "active",
  "date" : "2026-02-05T13:47:18+00:00",
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
  "description" : "Base resource for all MedCom Acknowledgement messages.",
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
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-message",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle",
        "constraint" : [
          {
            "key" : "medcom-acknowledgement-2",
            "severity" : "error",
            "human" : "The message header shall conform to medcom-messaging-acknowledgementHeader profile",
            "expression" : "entry.resource.ofType(MessageHeader).conformsTo('http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-messaging-acknowledgementHeader')",
            "source" : "http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-messaging-acknowledgement"
          },
          {
            "key" : "medcom-acknowledgement-1",
            "severity" : "error",
            "human" : "If the response.code is different than 'ok', a reference to an OperationOutcome resource shall be included.",
            "expression" : "iif(entry.resource.ofType(MessageHeader).response.code = 'ok', true, entry.resource.ofType(MessageHeader).response.code != 'ok' and entry.resource.ofType(OperationOutcome).exists())",
            "source" : "http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-messaging-acknowledgement"
          }
        ]
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "short" : "Message content (MedComAcknowledgementMessageHeader, MedComMessagingProvenance, MedComMessagingOrganization) - Open"
      }
    ]
  }
}

```
