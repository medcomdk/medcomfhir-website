#  - DK MedCom HospitalNotification v3.0.2

## : 

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: event[x] = Hospital Notification Message (MedComMessagingEventCodes#hospital-notification-message)](MessageHeader-nabb68aa-c97b-4905-a60c-71ff3209fd51.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2022-12-02 07:00:02+0200 |
| Recorded | 2022-12-02 07:00:02+0200 |
| Activity | Start hospital stay - acute ambulant |

**Agents**

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-66c12a92-81d2-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "l17de5f5-abb0-4701-93aa-6b0d7b4127bc",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/nabb68aa-c97b-4905-a60c-71ff3209fd51"
    }
  ],
  "occurredDateTime" : "2022-12-02T07:00:02+02:00",
  "recorded" : "2022-12-02T07:00:02+02:00",
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
