# HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - modified message - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - modified message**

## Example Provenance: HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - modified message

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/3.0.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: event[x] = HomeCare Observation Message (MedComMessagingEventCodes#homecareobservation-message); definition = http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComHomeCareObservationMessageDefinition|1.1](MessageHeader-07eb074b-be00-47e5-8bcb-484990a1a97e.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2023-09-12 12:30:00+0200 |
| Recorded | 2023-09-12 12:30:00+0200 |
| Activity | A message has been modified |

**Agents**

* **who**: [Organization Pleje og Rehabilitering](Organization-a0330c62-fe29-4719-83fa-a94959084f29.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "8ce47645-4d69-4fa6-a51d-c2bb49d87efb",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/07eb074b-be00-47e5-8bcb-484990a1a97e"
    }
  ],
  "occurredDateTime" : "2023-09-12T12:30:00+02:00",
  "recorded" : "2023-09-12T12:30:00+02:00",
  "activity" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
        "code" : "modified-message"
      }
    ]
  },
  "agent" : [
    {
      "who" : {
        "reference" : "Organization/a0330c62-fe29-4719-83fa-a94959084f29"
      }
    }
  ],
  "entity" : [
    {
      "role" : "revision",
      "what" : {
        "reference" : "MessageHeader/489de4f2-0d8d-4de2-a7ce-ccb93568799f"
      }
    }
  ]
}

```
