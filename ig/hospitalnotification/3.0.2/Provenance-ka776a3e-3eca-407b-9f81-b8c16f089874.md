#  - DK MedCom HospitalNotification v3.0.2

## : 

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: event[x] = Hospital Notification Message (MedComMessagingEventCodes#hospital-notification-message)](MessageHeader-m9bea09c-e662-4d59-b84f-9af570b57f42.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2022-12-02 22:00:11+0200 |
| Recorded | 2022-12-02 22:00:11+0200 |
| Activity | End hospital stay - patient completed to home/primary sector |

**Agents**

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-0465ec66-81d2-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "ka776a3e-3eca-407b-9f81-b8c16f089874",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/m9bea09c-e662-4d59-b84f-9af570b57f42"
    }
  ],
  "occurredDateTime" : "2022-12-02T22:00:11+02:00",
  "recorded" : "2022-12-02T22:00:11+02:00",
  "activity" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
        "code" : "discharge-emergency-home"
      }
    ]
  },
  "agent" : [
    {
      "who" : {
        "reference" : "Organization/0465ec66-81d2-11ed-a1eb-0242ac120002"
      }
    }
  ],
  "entity" : [
    {
      "role" : "revision",
      "what" : {
        "reference" : "MessageHeader/i50fc5fe-2d11-4ef3-acac-2e2e5c6c0029"
      }
    }
  ]
}

```
