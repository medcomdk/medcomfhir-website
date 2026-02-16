# 5th message - Instance of a MessageHeader resource used in a reply message. - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **5th message - Instance of a MessageHeader resource used in a reply message.**

## Example MessageHeader: 5th message - Instance of a MessageHeader resource used in a reply message.

Profile: [MedComCareCommunicationMessageHeader](StructureDefinition-medcom-careCommunication-messageHeader.md)

**event**: [MedComMessagingEventCodes: care-communication-message](http://medcomfhir.dk/ig/terminology/2.0.1/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-care-communication-message) (Care Communication Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=953741000016009](https://sor2.sum.dsdn.dk/#id=953741000016009) | [Organization Plejecenter Herlev](Organization-f20f31cd-5dd2-4a80-ab00-97f7109864a7.md) |

**sender**: [Organization: identifier = https://www.gs1.org/gln#5790001348120,urn:oid:1.2.208.176.1.1#1042981000016003](Organization-f98ed410-54fe-11ed-bdc3-0242ac120002.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=1042981000016003](https://sor2.sum.dsdn.dk/#id=1042981000016003) |

**focus**: [Communication: identifier = urn:uuid:546b19ba-3e50-4da8-b9ec-7caeefad6928; status = unknown; category = Undersøgelsessvar](Communication-d148fa55-3201-4a18-a7b0-bce67bf597a6.md)

**definition**: [http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComCareCommunicationMessageDefinition|5.0](http://medcomfhir.dk/ig/messagedefinitions/1.0.0/MessageDefinition-MedComCareCommunicationMessageDefinitionV5.0.html)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "2654e182-cfee-4537-b744-e36231ebe2f3",
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
    "reference" : "Organization/f98ed410-54fe-11ed-bdc3-0242ac120002"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=1042981000016003"
  },
  "focus" : [
    {
      "reference" : "Communication/d148fa55-3201-4a18-a7b0-bce67bf597a6"
    }
  ],
  "definition" : "http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComCareCommunicationMessageDefinition|5.0"
}

```
