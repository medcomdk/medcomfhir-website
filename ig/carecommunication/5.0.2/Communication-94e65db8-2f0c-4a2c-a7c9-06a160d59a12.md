# 1st message - Instance of Communication resource used in a new message. - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1st message - Instance of Communication resource used in a new message.**

## Example Communication: 1st message - Instance of Communication resource used in a new message.

Profile: [MedComCareCommunication](StructureDefinition-medcom-careCommunication-communication.md)

**identifier**: urn:uuid:b2eb3d0e-5de5-4de9-b2a3-0ff321ad1c3a

**status**: Unknown

**category**: Undersøgelsessvar

**subject**: [Bruno Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-733cef33-3626-422b-955d-d506aaa65fe1.md)

**topic**: Forspørgsel på seneste resultater

> **payload****DateTimeExtension**: 2024-05-01 12:00:00+0200**IdentifierExtension**: urn:uuid:24d01288-ad36-4af2-96a8-fd1432dadee1**PractitionerExtension**: [PractitionerRole Sygeplejerske](PractitionerRole-eda90bde-54f9-11ed-bdc3-0242ac120002.md)**ContactExtension**: ph: 38683868**content**: Til rette vedkommende. Vi ønsker information om de seneste undersøgelser udført på Bruno. På forhånd tak. Hilsen Michael, sygeplejerske.



## Resource Content

```json
{
  "resourceType" : "Communication",
  "id" : "94e65db8-2f0c-4a2c-a7c9-06a160d59a12",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-communication"
    ]
  },
  "identifier" : [
    {
      "value" : "urn:uuid:b2eb3d0e-5de5-4de9-b2a3-0ff321ad1c3a"
    }
  ],
  "status" : "unknown",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-careCommunication-categoryCodes",
          "code" : "examination-results"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "Patient/733cef33-3626-422b-955d-d506aaa65fe1"
  },
  "topic" : {
    "text" : "Forspørgsel på seneste resultater"
  },
  "payload" : [
    {
      "extension" : [
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension",
          "valueDateTime" : "2024-05-01T12:00:00+02:00"
        },
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension",
          "valueIdentifier" : {
            "value" : "urn:uuid:24d01288-ad36-4af2-96a8-fd1432dadee1",
            "assigner" : {
              "reference" : "Organization/b581c63c-181f-46f6-990d-b9942c576724"
            }
          }
        },
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension",
          "valueReference" : {
            "reference" : "PractitionerRole/eda90bde-54f9-11ed-bdc3-0242ac120002"
          }
        },
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension",
          "valueContactPoint" : {
            "system" : "phone",
            "value" : "38683868"
          }
        }
      ],
      "contentString" : "Til rette vedkommende. Vi ønsker information om de seneste undersøgelser udført på Bruno. På forhånd tak. Hilsen Michael, sygeplejerske."
    }
  ]
}

```
