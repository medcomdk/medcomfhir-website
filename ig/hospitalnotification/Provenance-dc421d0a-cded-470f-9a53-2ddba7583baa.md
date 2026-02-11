#  - DK MedCom HospitalNotification v3.0.2

## : 

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: event[x] = Hospital Notification Message (MedComMessagingEventCodes#hospital-notification-message)](MessageHeader-e563a2b2-bf92-4b13-bbd2-0a021a95bded.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2022-12-13 14:00:12+0200 |
| Recorded | 2022-12-13 14:00:12+0200 |
| Activity | Start leave |

**Agents**

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-b79a7914-81c8-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "dc421d0a-cded-470f-9a53-2ddba7583baa",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/e563a2b2-bf92-4b13-bbd2-0a021a95bded"
    }
  ],
  "occurredDateTime" : "2022-12-13T14:00:12+02:00",
  "recorded" : "2022-12-13T14:00:12+02:00",
  "activity" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
        "code" : "start-leave-inpatient"
      }
    ]
  },
  "agent" : [
    {
      "who" : {
        "reference" : "Organization/b79a7914-81c8-11ed-a1eb-0242ac120002"
      }
    }
  ],
  "entity" : [
    {
      "role" : "revision",
      "what" : {
        "reference" : "MessageHeader/b9b4818e-02de-4cc4-b418-d20cbc7b5404"
      }
    }
  ]
}

```
