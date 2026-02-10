#  - DK MedCom HospitalNotification v3.0.2

## : 

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: extension = true,->Organization Hjerteafdelingen på Herlev og Gentofte hospital; event[x] = Hospital Notification Message (MedComMessagingEventCodes#hospital-notification-message)](MessageHeader-i50fc5fe-2d11-4ef3-acac-2e2e5c6c0029.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2022-12-01 10:00:06+0200 |
| Recorded | 2022-12-01 10:00:06+0200 |
| Activity | Start hospital stay - acute ambulant |

**Agents**

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-66c12a92-81d2-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "fc7efe44-2708-49b2-becf-3eddd2fdef43",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/i50fc5fe-2d11-4ef3-acac-2e2e5c6c0029"
    }
  ],
  "occurredDateTime" : "2022-12-01T10:00:06+02:00",
  "recorded" : "2022-12-01T10:00:06+02:00",
  "activity" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
        "code" : "admit-emergency"
      }
    ]
  },
  "agent" : [
    {
      "who" : {
        "reference" : "Organization/66c12a92-81d2-11ed-a1eb-0242ac120002"
      }
    }
  ]
}

```
