#  - DK MedCom HospitalNotification v3.0.2

## : 

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: event[x] = Hospital Notification Message (MedComMessagingEventCodes#hospital-notification-message)](MessageHeader-o9b4818e-12de-5cc4-c418-d30cbc7b5404.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2022-12-09 12:00:02+0200 |
| Recorded | 2022-12-09 12:00:02+0000 |
| Activity | Start hospital stay - admitted |

**Agents**

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-cd72967c-81d2-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "m7cf3888-6f52-5e4d-939c-d2575d24fba0",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/o9b4818e-12de-5cc4-c418-d30cbc7b5404"
    }
  ],
  "occurredDateTime" : "2022-12-09T12:00:02+02:00",
  "recorded" : "2022-12-09T12:00:02Z",
  "activity" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
        "code" : "admit-inpatient"
      }
    ]
  },
  "agent" : [
    {
      "who" : {
        "reference" : "Organization/cd72967c-81d2-11ed-a1eb-0242ac120002"
      }
    }
  ]
}

```
