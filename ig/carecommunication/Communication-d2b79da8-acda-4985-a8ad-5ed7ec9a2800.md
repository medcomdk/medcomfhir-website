# 3rd message - Instance of Communication resource used in a reply message. - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **3rd message - Instance of Communication resource used in a reply message.**

## Example Communication: 3rd message - Instance of Communication resource used in a reply message.

Profile: [MedComCareCommunication](StructureDefinition-medcom-careCommunication-communication.md)

**identifier**: urn:uuid:b2eb3d0e-5de5-4de9-b2a3-0ff321ad1c3a

**status**: Unknown

**category**: Undersøgelsessvar

**subject**: [Bruno Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-22d65545-f98a-4b4d-ba36-51b48b3eb3de.md)

**topic**: Forspørgsel på seneste resultater

> **payload****DateTimeExtension**: 2024-05-01 12:00:00+0200**IdentifierExtension**: urn:uuid:24d01288-ad36-4af2-96a8-fd1432dadee1**PractitionerExtension**: [PractitionerRole Sygeplejerske](PractitionerRole-eda90bde-54f9-11ed-bdc3-0242ac120002.md)**ContactExtension**: ph: 38683868**content**: Til rette vedkommende. Vi ønsker information om de seneste undersøgelser udført på Bruno. På forhånd tak. Hilsen Michael, sygeplejerske.

> **payload****DateTimeExtension**: 2024-05-02 11:30:00+0200**IdentifierExtension**: urn:uuid:a9becf76-fc4c-49aa-8a68-6a0584871fcd**PractitionerExtension**: [PractitionerRole Sygeplejerske](PractitionerRole-8bf63050-5504-11ed-bdc3-0242ac120002.md)**ContactExtension**: ph: 44527000**content**: Hej Michael, Resultaterne for undersøgelsen kommer her. Blodtryk 130/95 mmHg, vægt: 83 kg og højde: 179 cm. Blodprøven påviste ikke tegn på sukkersyge eller vitaminmangel. Se mere i den vedhæftede pdf. Mvh. Emma

> **payload****DateTimeExtension**: 2024-05-02 11:30:00+0200**PractitionerExtension**: [PractitionerRole Sygeplejerske](PractitionerRole-8bf63050-5504-11ed-bdc3-0242ac120002.md)**ContactExtension**: ph: 44527000**IdentifierExtension**: urn:uuid:cd422e42-5bad-11ed-9b6a-0242ac120002**content**: 

> **payload****DateTimeExtension**: 2024-05-03 09:25:00+0200**IdentifierExtension**: urn:uuid:07685582-3a8f-4bf3-bfa0-2f040133e922**PractitionerExtension**: [PractitionerRole Sygeplejerske](PractitionerRole-eda90bde-54f9-11ed-bdc3-0242ac120002.md)**ContactExtension**: ph: 38683868**content**: Mange tak for fremsendte. Kan I desuden hjælpe mig med at finde information vedr. kommunal udredning for sygdommen? / Michael



## Resource Content

```json
{
  "resourceType" : "Communication",
  "id" : "d2b79da8-acda-4985-a8ad-5ed7ec9a2800",
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
    "reference" : "Patient/22d65545-f98a-4b4d-ba36-51b48b3eb3de"
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
              "reference" : "Organization/82210440-6826-44fc-9fc8-2a29bab6a5c2"
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
    },
    {
      "extension" : [
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension",
          "valueDateTime" : "2024-05-02T11:30:00+02:00"
        },
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension",
          "valueIdentifier" : {
            "value" : "urn:uuid:a9becf76-fc4c-49aa-8a68-6a0584871fcd",
            "assigner" : {
              "reference" : "Organization/f20f31cd-5dd2-4a80-ab00-97f7109864a7"
            }
          }
        },
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension",
          "valueReference" : {
            "reference" : "PractitionerRole/8bf63050-5504-11ed-bdc3-0242ac120002"
          }
        },
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension",
          "valueContactPoint" : {
            "system" : "phone",
            "value" : "44527000"
          }
        }
      ],
      "contentString" : "Hej Michael, Resultaterne for undersøgelsen kommer her. Blodtryk 130/95 mmHg, vægt: 83 kg og højde: 179 cm. Blodprøven påviste ikke tegn på sukkersyge eller vitaminmangel. Se mere i den vedhæftede pdf. Mvh. Emma"
    },
    {
      "extension" : [
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension",
          "valueDateTime" : "2024-05-02T11:30:00+02:00"
        },
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension",
          "valueReference" : {
            "reference" : "PractitionerRole/8bf63050-5504-11ed-bdc3-0242ac120002"
          }
        },
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-contact-extension",
          "valueContactPoint" : {
            "system" : "phone",
            "value" : "44527000"
          }
        },
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension",
          "valueIdentifier" : {
            "value" : "urn:uuid:cd422e42-5bad-11ed-9b6a-0242ac120002",
            "assigner" : {
              "reference" : "Organization/f20f31cd-5dd2-4a80-ab00-97f7109864a7"
            }
          }
        }
      ],
      "contentAttachment" : {
        "contentType" : "application/pdf",
        "title" : "Blodprøveresultater",
        "creation" : "2024-04-30T08:00:00+02:00"
      }
    },
    {
      "extension" : [
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension",
          "valueDateTime" : "2024-05-03T09:25:00+02:00"
        },
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension",
          "valueIdentifier" : {
            "value" : "urn:uuid:07685582-3a8f-4bf3-bfa0-2f040133e922",
            "assigner" : {
              "reference" : "Organization/82210440-6826-44fc-9fc8-2a29bab6a5c2"
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
      "contentString" : "Mange tak for fremsendte. Kan I desuden hjælpe mig med at finde information vedr. kommunal udredning for sygdommen? / Michael"
    }
  ]
}

```
