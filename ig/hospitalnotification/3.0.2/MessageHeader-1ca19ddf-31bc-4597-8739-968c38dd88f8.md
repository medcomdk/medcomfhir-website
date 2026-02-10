# HospitalNotification MessageHeader - STIN (With two episodeOfCare-identifiers) - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HospitalNotification MessageHeader - STIN (With two episodeOfCare-identifiers)**

## Example MessageHeader: HospitalNotification MessageHeader - STIN (With two episodeOfCare-identifiers)

Profile: [MedComHospitalNotificationMessageHeader](StructureDefinition-medcom-hospitalNotification-messageHeader.md)

**event**: [MedComMessagingEventCodes: hospital-notification-message](http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-hospital-notification-message) (Hospital Notification Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=953741000016009](https://sor2.sum.dsdn.dk/#id=953741000016009) | [Organization Plejecenter Herlev](Organization-a8ec5ae1-e324-453d-9d9f-39ffe41f308a.md) |

**sender**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-2565d3de-082e-4368-9160-4c719071026b.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=265161000016000](https://sor2.sum.dsdn.dk/#id=265161000016000) |

**focus**: [Encounter: status = in-progress; class = inpatient encounter (ActCode#IMP); period = 2022-12-07 12:00:00+0200 --> (ongoing)](Encounter-ne70f2b8-a924-11ed-afa1-0242ac120002.md)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "1ca19ddf-31bc-4597-8739-968c38dd88f8",
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
        "reference" : "Organization/a8ec5ae1-e324-453d-9d9f-39ffe41f308a"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/2565d3de-082e-4368-9160-4c719071026b"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=265161000016000"
  },
  "focus" : [
    {
      "reference" : "Encounter/ne70f2b8-a924-11ed-afa1-0242ac120002"
    }
  ]
}

```
