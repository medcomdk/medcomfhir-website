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

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-5961ade8-81ca-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "1b2e59fe-d6d3-457c-9c5c-3de1711a8a0b",
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
        "reference" : "Organization/5961ade8-81ca-11ed-a1eb-0242ac120002"
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
