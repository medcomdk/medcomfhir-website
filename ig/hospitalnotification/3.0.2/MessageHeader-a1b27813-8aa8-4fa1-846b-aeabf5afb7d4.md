# HospitalNotification MessageHeader - STIN - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HospitalNotification MessageHeader - STIN**

## Example MessageHeader: HospitalNotification MessageHeader - STIN

Profile: [MedComHospitalNotificationMessageHeader](StructureDefinition-medcom-hospitalNotification-messageHeader.md)

**event**: [MedComMessagingEventCodes: hospital-notification-message](http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-hospital-notification-message) (Hospital Notification Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=953741000016009](https://sor2.sum.dsdn.dk/#id=953741000016009) | [Organization Plejecenter Herlev](Organization-o4cdf292-abf3-4f5f-80ea-60a48013ff6d.md) |

**sender**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-o7056980-a8b2-42aa-8a0e-c1fc85d1f40d.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=265161000016000](https://sor2.sum.dsdn.dk/#id=265161000016000) |

**focus**: [Encounter: status = in-progress; class = inpatient encounter (ActCode#IMP); period = 2022-12-07 12:00:00+0200 --> (ongoing)](Encounter-a790f964-88d3-4652-bbc8-81d2f3d035f8.md)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "a1b27813-8aa8-4fa1-846b-aeabf5afb7d4",
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
        "reference" : "Organization/o4cdf292-abf3-4f5f-80ea-60a48013ff6d"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/o7056980-a8b2-42aa-8a0e-c1fc85d1f40d"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=265161000016000"
  },
  "focus" : [
    {
      "reference" : "Encounter/a790f964-88d3-4652-bbc8-81d2f3d035f8"
    }
  ]
}

```
