# MessageHeader for a HospitalNotification message. Valid only if used in a bundle (message) - DK MedCom Messaging v4.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MessageHeader for a HospitalNotification message. Valid only if used in a bundle (message)**

## Example MessageHeader: MessageHeader for a HospitalNotification message. Valid only if used in a bundle (message)

Profile: [MedComMessagingMessageHeader](StructureDefinition-medcom-messaging-messageHeader.md)

**event**: [MedComMessagingEventCodes: hospital-notification-message](http://medcomfhir.dk/ig/terminology/2.0.1/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-hospital-notification-message) (Hospital Notification Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [http://medcomfhir.dk/unknown](http://medcomfhir.dk/unknown) | [Organization Receiver Organization](Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.md) |

**sender**: [Organization Sender Organization](Organization-d7056980-a8b2-42aa-8a0e-c1fc85d1f40d.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [http://medcomfhir.dk/unknown](http://medcomfhir.dk/unknown) |



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "cb0b2ef0-8feb-11ec-b909-0242ac120002",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-messageHeader"
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
      "endpoint" : "http://medcomfhir.dk/unknown",
      "receiver" : {
        "reference" : "Organization/74cdf292-abf3-4f5f-80ea-60a48013ff6d"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/d7056980-a8b2-42aa-8a0e-c1fc85d1f40d"
  },
  "source" : {
    "endpoint" : "http://medcomfhir.dk/unknown"
  }
}

```
