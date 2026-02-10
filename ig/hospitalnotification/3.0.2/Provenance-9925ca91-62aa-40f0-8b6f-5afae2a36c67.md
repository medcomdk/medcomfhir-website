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

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-05266a00-81c7-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "9925ca91-62aa-40f0-8b6f-5afae2a36c67",
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
        "reference" : "Organization/05266a00-81c7-11ed-a1eb-0242ac120002"
      }
    }
  ]
}

```
