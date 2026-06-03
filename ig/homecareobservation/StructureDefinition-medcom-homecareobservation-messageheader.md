# MedComHomeCareObservationMessageHeader - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComHomeCareObservationMessageHeader**

## Resource Profile: MedComHomeCareObservationMessageHeader 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-messageheader | *Version*:1.2.2 |
| Active as of 2026-06-03 | *Computable Name*:MedComHomeCareObservationMessageHeader |

 
MessageHeader for HomeCareObservation 

## Scope and usage

This MessageDefinition profile defines the characteristics of a message that can be shared between systems, including the type of event that initiates the message, the content to be transmitted and what response(s), are permitted. This profile should not be included in the exchange of a HomeCareObservation message, but can be used to extract relevant information concerning the message, for usage in the VANSEnvelope. The MedComHomeCareObservationMessageHeader profile includes an required url to this profile in the element MessageHeader.definition.

**Usages:**

* Examples for this Profile: [MessageHeader/07eb074b-be00-47e5-8bcb-484990a1a97e](MessageHeader-07eb074b-be00-47e5-8bcb-484990a1a97e.md), [MessageHeader/36cb86f1-a01a-4115-a84d-9390aa0ddcbd](MessageHeader-36cb86f1-a01a-4115-a84d-9390aa0ddcbd.md), [MessageHeader/489de4f2-0d8d-4de2-a7ce-ccb93568799f](MessageHeader-489de4f2-0d8d-4de2-a7ce-ccb93568799f.md), [MessageHeader/8dbf63f4-b784-4d40-8802-c1bdb1ecfa63](MessageHeader-8dbf63f4-b784-4d40-8802-c1bdb1ecfa63.md) and [MessageHeader/e9f4cc68-b1b7-46b2-ba74-7cc39a914bfa](MessageHeader-e9f4cc68-b1b7-46b2-ba74-7cc39a914bfa.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.homecareobservation|current/StructureDefinition/medcom-homecareobservation-messageheader)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-homecareobservation-messageheader.csv), [Excel](StructureDefinition-medcom-homecareobservation-messageheader.xlsx), [Schematron](StructureDefinition-medcom-homecareobservation-messageheader.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-homecareobservation-messageheader",
  "url" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-messageheader",
  "version" : "1.2.2",
  "name" : "MedComHomeCareObservationMessageHeader",
  "title" : "MedComHomeCareObservationMessageHeader",
  "status" : "active",
  "date" : "2026-06-03T08:12:11+00:00",
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
  "description" : "MessageHeader for HomeCareObservation",
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
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "MessageHeader",
  "baseDefinition" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-messageHeader",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "MessageHeader",
        "path" : "MessageHeader"
      },
      {
        "id" : "MessageHeader.id",
        "path" : "MessageHeader.id",
        "short" : "A unique identifier for each message. This identifier should be globally unique."
      },
      {
        "id" : "MessageHeader.event[x]",
        "path" : "MessageHeader.event[x]",
        "patternCoding" : {
          "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-eventCodes",
          "code" : "homecareobservation-message"
        }
      },
      {
        "id" : "MessageHeader.destination:primary",
        "path" : "MessageHeader.destination",
        "sliceName" : "primary"
      },
      {
        "id" : "MessageHeader.destination:primary.receiver",
        "path" : "MessageHeader.destination.receiver",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-requesterorganization"
            ],
            "aggregation" : ["bundled"]
          }
        ]
      },
      {
        "id" : "MessageHeader.destination:cc",
        "path" : "MessageHeader.destination",
        "sliceName" : "cc",
        "max" : "0"
      },
      {
        "id" : "MessageHeader.sender",
        "path" : "MessageHeader.sender",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-producer-organization"
            ],
            "aggregation" : ["bundled"]
          }
        ]
      },
      {
        "id" : "MessageHeader.focus",
        "path" : "MessageHeader.focus",
        "type" : [
          {
            "code" : "Reference",
            "targetProfile" : [
              "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-diagnosticreport"
            ]
          }
        ]
      },
      {
        "id" : "MessageHeader.definition",
        "path" : "MessageHeader.definition",
        "min" : 1,
        "constraint" : [
          {
            "key" : "medcom-hcobs-definition-url",
            "severity" : "error",
            "human" : "SHALL reference a MedCom HomeCare Observation MessageDefinition whose canonical URL starts with\nhttps://medcomfhir.dk/ig/messagedefinitions/MessageDefinition-MedComHomeCareObservationMessageDefinition|1.—that is, any version 1.x of the message definition",
            "expression" : "matches('^http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComHomeCareObservationMessageDefinition|1[.][0-9]{1,2}$')",
            "source" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-messageheader"
          }
        ]
      }
    ]
  }
}

```
