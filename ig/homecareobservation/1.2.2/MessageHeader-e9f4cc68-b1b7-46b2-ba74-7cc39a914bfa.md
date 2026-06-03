# Instance of a MessageHeader resource used in a new message. - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Instance of a MessageHeader resource used in a new message.**

## Example MessageHeader: Instance of a MessageHeader resource used in a new message.

Profile: [MedComHomeCareObservationMessageHeader](StructureDefinition-medcom-homecareobservation-messageheader.md)

**event**: [MedComMessagingEventCodes: homecareobservation-message](http://medcomfhir.dk/ig/terminology/2.0.2/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-homecareobservation-message) (HomeCare Observation Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=52581000016005](https://sor2.sum.dsdn.dk/#id=52581000016005) | [Organization Skødstrup Lægepraksis](Organization-d1c1fa90-2c7e-4dd7-b2e8-e40281635a98.md) |

**sender**: [Organization Pleje og Rehabilitering](Organization-72cc3a2c-1dda-4b95-b50a-0f7ac19640f4.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=1144561000016002](https://sor2.sum.dsdn.dk/#id=1144561000016002) |

**focus**: [Diagnostic Report for 'HomeCareDiagnosticReport' for '->Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)'](DiagnosticReport-6d08f000-33cc-41f3-a7c2-c086d53d31a7.md)

**definition**: [http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComHomeCareObservationMessageDefinition|1.1](http://medcomfhir.dk/ig/messagedefinitions/1.0.1-trial-use/MessageDefinition-MedComHomeCareObservationMessageDefinitionV1.1.html)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "e9f4cc68-b1b7-46b2-ba74-7cc39a914bfa",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/homecareobservation/StructureDefinition/medcom-homecareobservation-messageheader"
    ]
  },
  "eventCoding" : {
    "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-messaging-eventCodes",
    "code" : "homecareobservation-message"
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
      "endpoint" : "https://sor2.sum.dsdn.dk/#id=52581000016005",
      "receiver" : {
        "reference" : "Organization/d1c1fa90-2c7e-4dd7-b2e8-e40281635a98"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/72cc3a2c-1dda-4b95-b50a-0f7ac19640f4"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=1144561000016002"
  },
  "focus" : [
    {
      "reference" : "DiagnosticReport/6d08f000-33cc-41f3-a7c2-c086d53d31a7"
    }
  ],
  "definition" : "http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComHomeCareObservationMessageDefinition|1.1"
}

```
