#  - DK MedCom HospitalNotification v3.0.2

## : 

Profile: [MedComMessagingProvenance](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-provenance.html)

Provenance for [MessageHeader: event[x] = Hospital Notification Message (MedComMessagingEventCodes#hospital-notification-message)](MessageHeader-1ca19ddf-31bc-4597-8739-968c38dd88f8.md)

Summary

| | |
| :--- | :--- |
| Occurrence | 2022-12-07 12:00:02+0200 |
| Recorded | 2022-12-07 12:00:02+0200 |
| Activity | Start hospital stay - admitted |

**Agents**

* **who**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-2565d3de-082e-4368-9160-4c719071026b.md)



## Resource Content

```json
{
  "resourceType" : "Provenance",
  "id" : "4e9f2c26-9d9b-4239-ade6-e26c130e855e",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-provenance"
    ]
  },
  "target" : [
    {
      "reference" : "MessageHeader/1ca19ddf-31bc-4597-8739-968c38dd88f8"
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
        "reference" : "Organization/2565d3de-082e-4368-9160-4c719071026b"
      }
    }
  ]
}

```
