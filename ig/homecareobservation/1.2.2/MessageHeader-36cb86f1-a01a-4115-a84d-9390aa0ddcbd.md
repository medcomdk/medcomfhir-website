# Instance of a MessageHeader resource used in a cancelled message. - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Instance of a MessageHeader resource used in a cancelled message.**

## Example MessageHeader: Instance of a MessageHeader resource used in a cancelled message.

Profile: [MedComHomeCareObservationMessageHeader](StructureDefinition-medcom-homecareobservation-messageheader.md)

**event**: [MedComMessagingEventCodes: homecareobservation-message](http://medcomfhir.dk/ig/terminology/2.0.2/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-homecareobservation-message) (HomeCare Observation Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=52581000016005](https://sor2.sum.dsdn.dk/#id=52581000016005) | [Organization Skødstrup Lægepraksis](Organization-1ab9c2d9-c348-4d75-9122-60ea8a6fdcf1.md) |

**sender**: [Organization Pleje og Rehabilitering](Organization-a0330c62-fe29-4719-83fa-a94959084f29.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=1144561000016002](https://sor2.sum.dsdn.dk/#id=1144561000016002) |

**focus**: [Diagnostic Report for 'HomeCareDiagnosticReport' for '->Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)'](DiagnosticReport-4f013d3a-575c-447d-83e1-7a5fb7f7b0de.md)

**definition**: [http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComHomeCareObservationMessageDefinition|1.1](http://medcomfhir.dk/ig/messagedefinitions/1.0.1-trial-use/MessageDefinition-MedComHomeCareObservationMessageDefinitionV1.1.html)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "36cb86f1-a01a-4115-a84d-9390aa0ddcbd",
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
        "reference" : "Organization/1ab9c2d9-c348-4d75-9122-60ea8a6fdcf1"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/a0330c62-fe29-4719-83fa-a94959084f29"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=1144561000016002"
  },
  "focus" : [
    {
      "reference" : "DiagnosticReport/4f013d3a-575c-447d-83e1-7a5fb7f7b0de"
    }
  ],
  "definition" : "http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComHomeCareObservationMessageDefinition|1.1"
}

```
