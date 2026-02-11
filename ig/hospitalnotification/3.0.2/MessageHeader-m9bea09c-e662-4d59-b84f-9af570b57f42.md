# HospitalNotification MessageHeader - SLHJ (acute ambulant). - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HospitalNotification MessageHeader - SLHJ (acute ambulant).**

## Example MessageHeader: HospitalNotification MessageHeader - SLHJ (acute ambulant).

Profile: [MedComHospitalNotificationMessageHeader](StructureDefinition-medcom-hospitalNotification-messageHeader.md)

**event**: [MedComMessagingEventCodes: hospital-notification-message](http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-hospital-notification-message) (Hospital Notification Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=953741000016009](https://sor2.sum.dsdn.dk/#id=953741000016009) | [Organization Plejecenter Herlev](Organization-e5682f5e-81d1-11ed-a1eb-0242ac120002.md) |

**sender**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-0465ec66-81d2-11ed-a1eb-0242ac120002.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=265161000016000](https://sor2.sum.dsdn.dk/#id=265161000016000) |

**focus**: [Encounter: status = finished; class = emergency (ActCode#EMER); period = 2022-12-01 10:00:04+0200 --> 2022-12-02 22:00:09+0200](Encounter-kbbad98c-3310-404a-af0c-7e3739d7b49f.md)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "m9bea09c-e662-4d59-b84f-9af570b57f42",
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
        "reference" : "Organization/e5682f5e-81d1-11ed-a1eb-0242ac120002"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/0465ec66-81d2-11ed-a1eb-0242ac120002"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=265161000016000"
  },
  "focus" : [
    {
      "reference" : "Encounter/kbbad98c-3310-404a-af0c-7e3739d7b49f"
    }
  ]
}

```
