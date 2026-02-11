# HospitalNotification MessageHeader - MORS (inpatient). - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HospitalNotification MessageHeader - MORS (inpatient).**

## Example MessageHeader: HospitalNotification MessageHeader - MORS (inpatient).

Profile: [MedComHospitalNotificationMessageHeader](StructureDefinition-medcom-hospitalNotification-messageHeader.md)

**event**: [MedComMessagingEventCodes: hospital-notification-message](http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-hospital-notification-message) (Hospital Notification Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=953741000016009](https://sor2.sum.dsdn.dk/#id=953741000016009) | [Organization Plejecenter Herlev](Organization-753bdcba-81ce-11ed-a1eb-0242ac120002.md) |

**sender**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-840b4046-81ce-11ed-a1eb-0242ac120002.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=265161000016000](https://sor2.sum.dsdn.dk/#id=265161000016000) |

**focus**: [Encounter: status = finished; class = inpatient encounter (ActCode#IMP); period = 2022-12-07 12:00:00+0200 --> 2022-12-09 09:45:30+0200](Encounter-gcab7218-9584-11ec-b909-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "hefc6d95-6161-4493-99c9-f359488dedb8",
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
        "reference" : "Organization/753bdcba-81ce-11ed-a1eb-0242ac120002"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/840b4046-81ce-11ed-a1eb-0242ac120002"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=265161000016000"
  },
  "focus" : [
    {
      "reference" : "Encounter/gcab7218-9584-11ec-b909-0242ac120002"
    }
  ]
}

```
