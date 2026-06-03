# Instance of a MessageHeader resource used in a new Homecare Observation message. - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Instance of a MessageHeader resource used in a new Homecare Observation message.**

## Example MessageHeader: Instance of a MessageHeader resource used in a new Homecare Observation message.

Profile: [MedComHomeCareObservationMessageHeader](StructureDefinition-medcom-homecareobservation-messageheader.md)

**event**: [MedComMessagingEventCodes: homecareobservation-message](http://medcomfhir.dk/ig/terminology/2.0.2/CodeSystem-medcom-messaging-eventCodes.html#medcom-messaging-eventCodes-homecareobservation-message) (HomeCare Observation Message)

### Destinations

| | | | |
| :--- | :--- | :--- | :--- |
| - | **Extension** | **Endpoint** | **Receiver** |
| * |  | [https://sor2.sum.dsdn.dk/#id=52581000016005](https://sor2.sum.dsdn.dk/#id=52581000016005) | [Organization Skødstrup Lægepraksis](Organization-42541447-b58c-4a1a-9514-02b80494bbd3.md) |

**sender**: [Organization Pleje og Rehabilitering](Organization-ef5cb9a6-835f-4d18-a34e-179c578b9a2a.md)

### Sources

| | |
| :--- | :--- |
| - | **Endpoint** |
| * | [https://sor2.sum.dsdn.dk/#id=1144561000016002](https://sor2.sum.dsdn.dk/#id=1144561000016002) |

**focus**: [Diagnostic Report for 'HomeCareDiagnosticReport' for '->Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)'](DiagnosticReport-870333ac-3134-4ae6-8257-86e0b0537c5f.md)

**definition**: [http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComHomeCareObservationMessageDefinition|1.1](http://medcomfhir.dk/ig/messagedefinitions/1.0.1-trial-use/MessageDefinition-MedComHomeCareObservationMessageDefinitionV1.1.html)



## Resource Content

```json
{
  "resourceType" : "MessageHeader",
  "id" : "8dbf63f4-b784-4d40-8802-c1bdb1ecfa63",
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
        "reference" : "Organization/42541447-b58c-4a1a-9514-02b80494bbd3"
      }
    }
  ],
  "sender" : {
    "reference" : "Organization/ef5cb9a6-835f-4d18-a34e-179c578b9a2a"
  },
  "source" : {
    "endpoint" : "https://sor2.sum.dsdn.dk/#id=1144561000016002"
  },
  "focus" : [
    {
      "reference" : "DiagnosticReport/870333ac-3134-4ae6-8257-86e0b0537c5f"
    }
  ],
  "definition" : "http://medcomfhir.dk/ig/messagedefinitions/MessageDefinition/MedComHomeCareObservationMessageDefinition|1.1"
}

```
