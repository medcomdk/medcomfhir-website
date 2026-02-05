# Acknowledgement MessageHeader - ok message - DK MedCom acknowledgement v2.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Acknowledgement MessageHeader - ok message**

## Example MessageHeader: Acknowledgement MessageHeader - ok message

Profile: [MedComAcknowledgementMessageHeader](StructureDefinition-medcom-messaging-acknowledgementHeader.md)

**event**: [MedComMessagingEventCodes: acknowledgement-message](http://medcomfhir.dk/ig/terminology/1.5.0/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-acknowledgement-message) (Acknowledgement Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=265161000016000](https://sor2.sum.dsdn.dk/#id=265161000016000) | [Organization Receiver Organization](Organization-74cdf292-abf3-4f5f-80ea-60a48013ff6d.md) |

**sender**: [Organization Sender Organization](Organization-d7056980-a8b2-42aa-8a0e-c1fc85d1f40d.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=953741000016009](https://sor2.sum.dsdn.dk/#id=953741000016009) |

### Responses

| | | |
| :--- | :--- | :--- |
| - | **Identifier** | **Code** |
| * | 42cb9200-f421-4d08-8391-7d51a2503cb4 | OK |



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "aba2d9bf-2c6c-47e8-bce4-7928bcd51019",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/acknowledgement/StructureDefinition/medcom-messaging-acknowledgementHeader"
    ]
  },
  "eventCoding" : {
    "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-eventCodes",
    "code" : "acknowledgement-message"
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
      "endpoint" : "https://sor2.sum.dsdn.dk/#id=265161000016000",
      "receiver" : {
        "reference" : "Organization/74cdf292-abf3-4f5f-80ea-60a48013ff6d"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/d7056980-a8b2-42aa-8a0e-c1fc85d1f40d"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=953741000016009"
  },
  "response" : {
    "identifier" : "42cb9200-f421-4d08-8391-7d51a2503cb4",
    "code" : "ok"
  }
}

```
