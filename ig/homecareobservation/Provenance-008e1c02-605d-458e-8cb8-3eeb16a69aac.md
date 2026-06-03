# HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message**

## Example Provenance: HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - new message

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/3.0.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: event[x] = HomeCare Observation Message (MedComMessagingEventCodes#homecareobservation-message); definition = http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComHomeCareObservationMessageDefinition|1.1](MessageHeader-489de4f2-0d8d-4de2-a7ce-ccb93568799f.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2023-09-13 12:24:00+0200 |
| Recorded | 2023-09-13 12:24:00+0200 |
| Activity | A new message has been sent |

**Agents**

* **who**: [Organization Pleje og Rehabilitering](Organization-a0330c62-fe29-4719-83fa-a94959084f29.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "008e1c02-605d-458e-8cb8-3eeb16a69aac",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/489de4f2-0d8d-4de2-a7ce-ccb93568799f"
    }
  ],
  "occurredDateTime" : "2023-09-13T12:24:00+02:00",
  "recorded" : "2023-09-13T12:24:00+02:00",
  "activity" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
        "code" : "new-message"
      }
    ]
  },
  "agent" : [
    {
      "who" : {
        "reference" : "Organization/a0330c62-fe29-4719-83fa-a94959084f29"
      }
    }
  ]
}

```
