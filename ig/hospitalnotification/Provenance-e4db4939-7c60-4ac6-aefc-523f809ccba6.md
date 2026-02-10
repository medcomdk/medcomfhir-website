#  - DK MedCom HospitalNotification v3.0.2

## : 

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: event[x] = Hospital Notification Message (MedComMessagingEventCodes#hospital-notification-message)](MessageHeader-f47254da-f170-46f0-b624-4778a9c92b1f.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2022-12-14 15:30:02+0200 |
| Recorded | 2022-12-14 15:30:02+0200 |
| Activity | End leave |

**Agents**

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-5961ade8-81ca-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "e4db4939-7c60-4ac6-aefc-523f809ccba6",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/f47254da-f170-46f0-b624-4778a9c92b1f"
    }
  ],
  "occurredDateTime" : "2022-12-14T15:30:02+02:00",
  "recorded" : "2022-12-14T15:30:02+02:00",
  "activity" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
        "code" : "end-leave-inpatient"
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
        "reference" : "MessageHeader/e563a2b2-bf92-4b13-bbd2-0a021a95bded"
      }
    }
  ]
}

```
