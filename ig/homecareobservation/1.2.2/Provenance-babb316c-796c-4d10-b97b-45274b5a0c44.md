# HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - cancelled message - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - cancelled message**

## Example Provenance: HomeCareDiagnosticReport example. The Provenance instance is only valid if used in a bundle (message) - cancelled message

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/3.0.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: event[x] = HomeCare Observation Message (MedComMessagingEventCodes#homecareobservation-message); definition = http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComHomeCareObservationMessageDefinition|1.1](MessageHeader-36cb86f1-a01a-4115-a84d-9390aa0ddcbd.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2023-09-12 13:00:00+0200 |
| Recorded | 2023-09-12 13:00:00+0200 |
| Activity | A message has been retracted/cancelled |

**Agents**

* **who**: [Organization Pleje og Rehabilitering](Organization-a0330c62-fe29-4719-83fa-a94959084f29.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "babb316c-796c-4d10-b97b-45274b5a0c44",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/36cb86f1-a01a-4115-a84d-9390aa0ddcbd"
    }
  ],
  "occurredDateTime" : "2023-09-12T13:00:00+02:00",
  "recorded" : "2023-09-12T13:00:00+02:00",
  "activity" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
        "code" : "retract-message"
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
      "role" : "removal",
      "what" : {
        "reference" : "MessageHeader/489de4f2-0d8d-4de2-a7ce-ccb93568799f"
      }
    }
  ]
}

```
