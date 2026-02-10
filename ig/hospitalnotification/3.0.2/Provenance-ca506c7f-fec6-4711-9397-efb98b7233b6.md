#  - DK MedCom HospitalNotification v3.0.2

## : 

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: extension = true,->Organization Hjerteafdelingen på Herlev og Gentofte hospital; event[x] = Hospital Notification Message (MedComMessagingEventCodes#hospital-notification-message)](MessageHeader-b9b4818e-02de-4cc4-b418-d20cbc7b5404.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2022-12-07 12:00:02+0200 |
| Recorded | 2022-12-07 12:00:02+0200 |
| Activity | Start hospital stay - admitted |

**Agents**

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-8d813af0-81cd-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "ca506c7f-fec6-4711-9397-efb98b7233b6",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/b9b4818e-02de-4cc4-b418-d20cbc7b5404"
    }
  ],
  "occurredDateTime" : "2022-12-07T12:00:02+02:00",
  "recorded" : "2022-12-07T12:00:02+02:00",
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
        "reference" : "Organization/8d813af0-81cd-11ed-a1eb-0242ac120002"
      }
    }
  ]
}

```
