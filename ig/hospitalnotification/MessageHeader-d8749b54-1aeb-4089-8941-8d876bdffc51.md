# HospitalNotification MessageHeader - AN_STIN. - DK MedCom HospitalNotification v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HospitalNotification MessageHeader - AN_STIN.**

## Example MessageHeader: HospitalNotification MessageHeader - AN_STIN.

Profile: [MedComHospitalNotificationMessageHeader](StructureDefinition-medcom-hospitalNotification-messageHeader.md)

**event**: [MedComMessagingEventCodes: hospital-notification-message](http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-hospital-notification-message) (Hospital Notification Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=953741000016009](https://sor2.sum.dsdn.dk/#id=953741000016009) | [Organization Plejecenter Herlev](Organization-eefc2dfa-81c6-11ed-a1eb-0242ac120002.md) |

**sender**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-05266a00-81c7-11ed-a1eb-0242ac120002.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=265161000016000](https://sor2.sum.dsdn.dk/#id=265161000016000) |

**focus**: [Encounter: status = entered-in-error; class = inpatient encounter (ActCode#IMP); period = 2022-12-07 12:00:00+0200 --> (ongoing)](Encounter-c9782061-ce63-41b5-8be6-655812d23332.md)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "d8749b54-1aeb-4089-8941-8d876bdffc51",
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
        "reference" : "Organization/eefc2dfa-81c6-11ed-a1eb-0242ac120002"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/05266a00-81c7-11ed-a1eb-0242ac120002"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=265161000016000"
  },
  "focus" : [
    {
      "reference" : "Encounter/c9782061-ce63-41b5-8be6-655812d23332"
    }
  ]
}

```
