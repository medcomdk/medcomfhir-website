# 3rd message - Instance of a MessageHeader resource used in a reply message. - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **3rd message - Instance of a MessageHeader resource used in a reply message.**

## Example MessageHeader: 3rd message - Instance of a MessageHeader resource used in a reply message.

Profile: [MedComCareCommunicationMessageHeader](StructureDefinition-medcom-careCommunication-messageHeader.md)

**event**: [MedComMessagingEventCodes: care-communication-message](http://medcomfhir.dk/ig/terminology/2.0.1/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-care-communication-message) (Care Communication Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=953741000016009](https://sor2.sum.dsdn.dk/#id=953741000016009) | [Organization Plejecenter Herlev](Organization-f20f31cd-5dd2-4a80-ab00-97f7109864a7.md) |

**sender**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-82210440-6826-44fc-9fc8-2a29bab6a5c2.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=265161000016000](https://sor2.sum.dsdn.dk/#id=265161000016000) |

**focus**: [Communication: identifier = urn:uuid:b2eb3d0e-5de5-4de9-b2a3-0ff321ad1c3a; status = unknown; category = Undersøgelsessvar; topic = ](Communication-d2b79da8-acda-4985-a8ad-5ed7ec9a2800.md)

**definition**: [http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComCareCommunicationMessageDefinition|5.0](http://medcomfhir.dk/ig/messagedefinitions/1.0.0/MessageDefinition-MedComCareCommunicationMessageDefinitionV5.0.html)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "4dff3695-218d-4878-838a-5f23cbba6f82",
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
        "reference" : "Organization/f20f31cd-5dd2-4a80-ab00-97f7109864a7"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/82210440-6826-44fc-9fc8-2a29bab6a5c2"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=265161000016000"
  },
  "focus" : [
    {
      "reference" : "Communication/d2b79da8-acda-4985-a8ad-5ed7ec9a2800"
    }
  ],
  "definition" : "http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComCareCommunicationMessageDefinition|5.0"
}

```
