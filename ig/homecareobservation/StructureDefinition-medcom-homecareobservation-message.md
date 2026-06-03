# MedComHomeCareObservationMessage - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComHomeCareObservationMessage**

## Resource Profile: MedComHomeCareObservationMessage 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message | *Version*:1.2.2 |
| Active as of 2026-06-03 | *Computable Name*:MedComHomeCareObservationMessage |

 
The HomeCareObservation Message is used in exchange of the observations results performed by the municipal acute care team to the general practitioner. 

**Usages:**

* Examples for this Profile: [Bundle/401cbc36-db1e-4fe0-bf90-6df331dde179](Bundle-401cbc36-db1e-4fe0-bf90-6df331dde179.md), [Bundle/5f341feb-9a20-463a-96cc-a9ca8ace5567](Bundle-5f341feb-9a20-463a-96cc-a9ca8ace5567.md), [Bundle/73996cdc-3192-4d15-bd16-c365ef0085e7](Bundle-73996cdc-3192-4d15-bd16-c365ef0085e7.md), [Bundle/ReceiveTestExample1](Bundle-ReceiveTestExample1.md)... Show 6 more, [Bundle/ReceiveTestExample2](Bundle-ReceiveTestExample2.md), [Bundle/ReceiveTestExample3](Bundle-ReceiveTestExample3.md), [Bundle/ReceiveTestExample4](Bundle-ReceiveTestExample4.md), [Bundle/ReceiveTestExample5](Bundle-ReceiveTestExample5.md), [Bundle/add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c](Bundle-add5e7e2-0c0f-4a4a-bfff-f6f984fa7e3c.md) and [Bundle/faa0c104-0ebf-49cb-bad1-9e0f59436e18](Bundle-faa0c104-0ebf-49cb-bad1-9e0f59436e18.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.homecareobservation|current/StructureDefinition/medcom-homecareobservation-message)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-homecareobservation-message.csv), [Excel](StructureDefinition-medcom-homecareobservation-message.xlsx), [Schematron](StructureDefinition-medcom-homecareobservation-message.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-homecareobservation-message",
  "url" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message",
  "version" : "1.2.2",
  "name" : "MedComHomeCareObservationMessage",
  "title" : "MedComHomeCareObservationMessage",
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
  "description" : "The HomeCareObservation Message is used in exchange of the observations results performed by the municipal acute care team to the general practitioner.",
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
            "key" : "medcom-homecareObsMessage-1",
            "severity" : "error",
            "human" : "The MessageHeader shall conform to medcom-homecareobservation-messageheader profile",
            "expression" : "entry[0].resource.conformsTo('http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-messageheader')",
            "source" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message"
          },
          {
            "key" : "medcom-homecareObsMessage-2",
            "severity" : "error",
            "human" : "All provenance resources shall contain activities from medcom-HomeCareObservation-messagingActivities valueset",
            "expression" : "entry.resource.ofType(Provenance).all(activity.memberOf('http://medcomfhir.dk/ig/terminology/ValueSet/medcom-HomeCareObservation-messagingActivities'))",
            "source" : "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-message"
          }
        ]
      }
    ]
  }
}

```
