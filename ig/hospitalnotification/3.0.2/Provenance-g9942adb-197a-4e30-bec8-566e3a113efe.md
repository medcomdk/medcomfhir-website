#  - DK MedCom HospitalNotification v3.0.2

## : 

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: event[x] = Hospital Notification Message (MedComMessagingEventCodes#hospital-notification-message)](MessageHeader-hefc6d95-6161-4493-99c9-f359488dedb8.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2022-12-09 09:45:32+0200 |
| Recorded | 2022-12-09 09:45:32+0200 |
| Activity | Start hospital stay - admitted |

**Agents**

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-840b4046-81ce-11ed-a1eb-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "g9942adb-197a-4e30-bec8-566e3a113efe",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/hefc6d95-6161-4493-99c9-f359488dedb8"
    }
  ],
  "occurredDateTime" : "2022-12-09T09:45:32+02:00",
  "recorded" : "2022-12-09T09:45:32+02:00",
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
        "reference" : "Organization/840b4046-81ce-11ed-a1eb-0242ac120002"
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
