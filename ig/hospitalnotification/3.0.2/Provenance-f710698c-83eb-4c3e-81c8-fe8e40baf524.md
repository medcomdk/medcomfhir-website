#  - DK MedCom HospitalNotification v3.0.2

## : 

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: event[x] = Hospital Notification Message (MedComMessagingEventCodes#hospital-notification-message)](MessageHeader-g1affa53-c157-4080-abb0-8e681524f969.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2022-12-18 09:45:32+0200 |
| Recorded | 2022-12-18 09:45:32+0200 |
| Activity | End hospital stay - patient completed to home/primary sector |

**Agents**

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-8d813af0-81cd-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "f710698c-83eb-4c3e-81c8-fe8e40baf524",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/g1affa53-c157-4080-abb0-8e681524f969"
    }
  ],
  "occurredDateTime" : "2022-12-18T09:45:32+02:00",
  "recorded" : "2022-12-18T09:45:32+02:00",
  "activity" : {
    "coding" : [
      {
        "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-activityCodes",
        "code" : "discharge-inpatient-home"
      }
    ]
  },
  "agent" : [
    {
      "who" : {
        "reference" : "Organization/8d813af0-81cd-11ed-a1eb-0242ac120002"
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
