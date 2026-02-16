# Instance of a MessageHeader resource used in a new message. - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Instance of a MessageHeader resource used in a new message.**

## Example MessageHeader: Instance of a MessageHeader resource used in a new message.

Profile: [MedComCareCommunicationMessageHeader](StructureDefinition-medcom-careCommunication-messageHeader.md)

**event**: [MedComMessagingEventCodes: care-communication-message](http://medcomfhir.dk/ig/terminology/2.0.1/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-care-communication-message) (Care Communication Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=953741000016009](https://sor2.sum.dsdn.dk/#id=953741000016009) | [Organization Plejecenter Herlev](Organization-b2f762be-6994-44da-a214-72c765655b3e.md) |

**sender**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-0ece868c-6a72-4aa3-8a96-2d985ab630c7.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=265161000016000](https://sor2.sum.dsdn.dk/#id=265161000016000) |

**focus**: [Communication: identifier = urn:uuid:cefe0dee-13b5-4bec-a843-09b4d58e4fe6; status = unknown; category = Undersøgelsessvar](Communication-d8434eb5-8286-48f8-a590-4a27175ed82f.md)

**definition**: [http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComCareCommunicationMessageDefinition|5.0](http://medcomfhir.dk/ig/messagedefinitions/1.0.0/MessageDefinition-MedComCareCommunicationMessageDefinitionV5.0.html)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "025bdfdd-397b-43e2-9e8c-272664a6e471",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-messageHeader"
    ]
  },
  "eventCoding" : {
    "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-eventCodes",
    "code" : "care-communication-message"
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
        "reference" : "Organization/b2f762be-6994-44da-a214-72c765655b3e"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/0ece868c-6a72-4aa3-8a96-2d985ab630c7"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=265161000016000"
  },
  "focus" : [
    {
      "reference" : "Communication/d8434eb5-8286-48f8-a590-4a27175ed82f"
    }
  ],
  "definition" : "http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComCareCommunicationMessageDefinition|5.0"
}

```
