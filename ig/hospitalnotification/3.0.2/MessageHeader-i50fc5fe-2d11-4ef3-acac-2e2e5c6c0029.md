# HospitalNotification MessageHeader - STAA. - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HospitalNotification MessageHeader - STAA.**

## Example MessageHeader: HospitalNotification MessageHeader - STAA.

Profile: [MedComHospitalNotificationMessageHeader](StructureDefinition-medcom-hospitalNotification-messageHeader.md)

**MedComReportOfAdmissionExtension**: true

**MedComReportOfAdmissionRecipientExtension**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-1f5882b4-81d1-11ed-a1eb-0242ac120002.md)

**event**: [MedComMessagingEventCodes: hospital-notification-message](http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-hospital-notification-message) (Hospital Notification Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=953741000016009](https://sor2.sum.dsdn.dk/#id=953741000016009) | [Organization Plejecenter Herlev](Organization-103fbebe-81d1-11ed-a1eb-0242ac120002.md) |

**sender**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-1f5882b4-81d1-11ed-a1eb-0242ac120002.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=265161000016000](https://sor2.sum.dsdn.dk/#id=265161000016000) |

**focus**: [Encounter: status = in-progress; class = emergency (ActCode#EMER); period = 2022-12-01 10:00:04+0200 --> (ongoing)](Encounter-h2cb16ce-af8c-46f3-be9e-89406ef3e7b5.md)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "i50fc5fe-2d11-4ef3-acac-2e2e5c6c0029",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
    ]
  },
  "extension" : [
    {
      "url" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-messaging-reportOfAdmissionExtension",
      "valueBoolean" : true
    },
    {
      "url" : "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-messaging-reportOfAdmissionRecipientExtension",
      "valueReference" : {
        "reference" : "Organization/1f5882b4-81d1-11ed-a1eb-0242ac120002"
      }
    }
  ],
  "eventCoding" : {
    "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-eventCodes",
    "code" : "hospital-notification-message"
  },
  "destination" : [
    {
      "extension" : [
        {
          "url" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-destinationUseExtension",
          "valueCoding" : {
            "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-destinationUse",
            "code" : "primary"
          }
        }
      ],
      "endpoint" : "https://sor2.sum.dsdn.dk/#id=953741000016009",
      "receiver" : {
        "reference" : "Organization/103fbebe-81d1-11ed-a1eb-0242ac120002"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/1f5882b4-81d1-11ed-a1eb-0242ac120002"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=265161000016000"
  },
  "focus" : [
    {
      "reference" : "Encounter/h2cb16ce-af8c-46f3-be9e-89406ef3e7b5"
    }
  ]
}

```
