# HospitalNotification MessageHeader - SLOR. - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HospitalNotification MessageHeader - SLOR.**

## Example MessageHeader: HospitalNotification MessageHeader - SLOR.

Profile: [MedComHospitalNotificationMessageHeader](StructureDefinition-medcom-hospitalNotification-messageHeader.md)

**event**: [MedComMessagingEventCodes: hospital-notification-message](http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-hospital-notification-message) (Hospital Notification Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=953741000016009](https://sor2.sum.dsdn.dk/#id=953741000016009) | [Organization Plejecenter Herlev](Organization-55ba5884-81ca-11ed-a1eb-0242ac120002.md) |

**sender**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-5961ade8-81ca-11ed-a1eb-0242ac120002.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=265161000016000](https://sor2.sum.dsdn.dk/#id=265161000016000) |

**focus**: [Encounter: extension = 2022-12-13 14:00:10+0200 --> 2022-12-14 15:30:00+0200; status = in-progress; class = inpatient encounter (ActCode#IMP); period = 2022-12-07 12:00:00+0200 --> (ongoing)](Encounter-e07c4bd4-cfad-4c4d-9c4b-e4ba3424a65b.md)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "f47254da-f170-46f0-b624-4778a9c92b1f",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/hospitalnotification/StructureDefinition/medcom-hospitalNotification-messageHeader"
    ]
  },
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
        "reference" : "Organization/55ba5884-81ca-11ed-a1eb-0242ac120002"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/5961ade8-81ca-11ed-a1eb-0242ac120002"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=265161000016000"
  },
  "focus" : [
    {
      "reference" : "Encounter/e07c4bd4-cfad-4c4d-9c4b-e4ba3424a65b"
    }
  ]
}

```
