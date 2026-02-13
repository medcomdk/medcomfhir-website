# MedComMessagingOrganization - DK MedCom Messaging v4.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComMessagingOrganization**

## Resource Profile: MedComMessagingOrganization 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-organization | *Version*:4.0.2 |
| Active as of 2026-02-13 | *Computable Name*:MedComMessagingOrganization |

 
A formally recognized organizations registered for exchanging messages within Danish healthcare, registered with a SOR identifier issued by The Danish Health Data Authority 

### Scope and usage

This profile describes the Organization resource that shall be used in all MedCom FHIR Messages. MedComMessagingOrganization inherits from [MedComCoreOrganization](http://medcomfhir.dk/ig/core/StructureDefinition-medcom-core-organization.html) as it shall include both a SOR and EAN/GLN identifier. MedComMessagingOrganization is used to describe the sender and receiver organizations of a all MedCom FHIR Messages.

Please refer to the tab "Snapshot Table(Must support)" below for the definition of the required content of a MedComMessagingOrganization.

**Usages:**

* Derived from this Profile: [MedComCoreProducerOrganization](StructureDefinition-medcom-producer-organization.md) and [MedComMessagingRequesterOrganization](StructureDefinition-medcom-requesterorganization.md)
* Refer to this Profile: [MedComMessagingMessageHeader](StructureDefinition-medcom-messaging-messageHeader.md) and [MedComMessagingProvenance](StructureDefinition-medcom-messaging-provenance.md)
* Examples for this Profile: [Receiver Organization](Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.md), [Organization/bf839e87-4e44-4977-b38e-92b5a6f187b5](Organization-bf839e87-4e44-4977-b38e-92b5a6f187b5.md) and [Sender Organization](Organization-d7056980-a8b2-42aa-8a0e-c1fc85d1f40d.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.messaging|current/StructureDefinition/medcom-messaging-organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-messaging-organization.csv), [Excel](StructureDefinition-medcom-messaging-organization.xlsx), [Schematron](StructureDefinition-medcom-messaging-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-messaging-organization",
  "url" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-organization",
  "version" : "4.0.2",
  "name" : "MedComMessagingOrganization",
  "status" : "active",
  "date" : "2026-02-13T09:09:22+00:00",
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
  "description" : "A formally recognized organizations registered for exchanging messages within Danish healthcare, registered with a SOR identifier issued by The Danish Health Data Authority",
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
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization",
        "short" : "A formally recognized organizations within Danish healthcare"
      },
      {
        "id" : "Organization.identifier",
        "path" : "Organization.identifier",
        "min" : 2,
        "mustSupport" : true
      },
      {
        "id" : "Organization.identifier:EAN-ID",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/messaging/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Organization.identifier",
        "sliceName" : "EAN-ID",
        "min" : 1,
        "mustSupport" : true
      }
    ]
  }
}

```
