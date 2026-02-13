# MedComDestinationUseExtension - DK MedCom Messaging v4.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComDestinationUseExtension**

## Extension: MedComDestinationUseExtension 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-destinationUseExtension | *Version*:4.0.2 |
| Active as of 2026-02-13 | *Computable Name*:MedComMessagingDestinationUseExtension |

Indicates whether the use of a destination in a MedCom message header is as a primary or a carbon copy recipient of the message

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [MedComMessagingMessageHeader](StructureDefinition-medcom-messaging-messageHeader.md)
* Examples for this Extension: [Bundle/eb26be85-fdb7-454d-a980-95cba6d1745b](Bundle-eb26be85-fdb7-454d-a980-95cba6d1745b.md), [MessageHeader/3881874e-2042-4a00-aee8-23512799f512](MessageHeader-3881874e-2042-4a00-aee8-23512799f512.md), [MessageHeader/42c01434-8feb-11ec-b909-0242ac120002](MessageHeader-42c01434-8feb-11ec-b909-0242ac120002.md), [MessageHeader/cb0b2ef0-8feb-11ec-b909-0242ac120002](MessageHeader-cb0b2ef0-8feb-11ec-b909-0242ac120002.md) and [MessageHeader/d28b9cb4-8feb-11ec-b909-0242ac120002](MessageHeader-d28b9cb4-8feb-11ec-b909-0242ac120002.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.messaging|current/StructureDefinition/medcom-messaging-destinationUseExtension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-messaging-destinationUseExtension.csv), [Excel](StructureDefinition-medcom-messaging-destinationUseExtension.xlsx), [Schematron](StructureDefinition-medcom-messaging-destinationUseExtension.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-messaging-destinationUseExtension",
  "url" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-destinationUseExtension",
  "version" : "4.0.2",
  "name" : "MedComMessagingDestinationUseExtension",
  "title" : "MedComDestinationUseExtension",
  "status" : "active",
  "date" : "2026-02-13T09:22:59+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.medcom.dk"
        }
      ]
    }
  ],
  "description" : "Indicates whether the use of a destination in a MedCom message header is as a primary or a carbon copy recipient of the message",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    }
  ],
  "kind" : "complex-type",
  "abstract" : false,
  "context" : [
    {
      "type" : "element",
      "expression" : "Element"
    }
  ],
  "type" : "Extension",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Extension",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Extension",
        "path" : "Extension",
        "short" : "MedComDestinationUseExtension",
        "definition" : "Indicates whether the use of a destination in a MedCom message header is as a primary or a carbon copy recipient of the message"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-destinationUseExtension"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "min" : 1,
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Extension.value[x].system",
        "path" : "Extension.value[x].system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Extension.value[x].code",
        "extension" : [
          {
            "extension" : [
              {
                "url" : "code",
                "valueCode" : "SHALL:in-narrative"
              },
              {
                "url" : "actor",
                "valueCanonical" : "http://medcomfhir.dk/ig/messaging/ActorDefinition/ProducerActor"
              }
            ],
            "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
          }
        ],
        "path" : "Extension.value[x].code",
        "min" : 1,
        "mustSupport" : true
      }
    ]
  }
}

```
