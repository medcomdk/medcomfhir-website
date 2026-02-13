# Instance of Communication resource used in a reply message. A reply to an OIOXML message - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Instance of Communication resource used in a reply message. A reply to an OIOXML message**

## Example Communication: Instance of Communication resource used in a reply message. A reply to an OIOXML message

Profile: [MedComCareCommunication](StructureDefinition-medcom-careCommunication-communication.md)

**identifier**: urn:uuid:59aac95e-ca57-4b04-b075-9880b7e6441c

**status**: Unknown

**category**: Forløbskoordinering

**subject**: [Elmer (official) (no stated gender), DoB Unknown ( urn:oid:1.2.208.176.1.2#2509479989)](Patient-23ebfcd8-e4f2-4ce8-908b-aa7cfb9ffef5.md)

**encounter**: [Encounter: status = in-progress; class = inpatient encounter (ActCode#IMP)](Encounter-303b2782-e2bf-4780-a8a5-c4b02b0e1c66.md)

> **payload****DateTimeExtension**: 2024-05-07 18:00:00+0200**IdentifierExtension**: urn:uuid:1813b23d-195e-4b28-8221-24247035bf08**PractitionerExtension**: [PractitionerRole Sygeplejerske](PractitionerRole-8dc790ba-8d93-4585-b91c-af8225b0796d.md)**ContactExtension**: ph: 38683868**content**: We have a question regarding the referal...



## Resource Content

```json
{
  "resourceType" : "Communication",
  "id" : "f54efd18-5520-11ed-bdc3-0242ac120002",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/carecommunication/StructureDefinition/medcom-careCommunication-communication"
    ]
  },
  "identifier" : [
    {
      "value" : "urn:uuid:59aac95e-ca57-4b04-b075-9880b7e6441c"
    }
  ],
  "status" : "unknown",
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-careCommunication-categoryCodes",
          "code" : "carecoordination"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "Patient/23ebfcd8-e4f2-4ce8-908b-aa7cfb9ffef5"
  },
  "encounter" : {
    "reference" : "Encounter/303b2782-e2bf-4780-a8a5-c4b02b0e1c66"
  },
  "payload" : [
    {
      "extension" : [
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-datetime-extension",
          "valueDateTime" : "2024-05-07T18:00:00+02:00"
        },
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-identifier-extension",
          "valueIdentifier" : {
            "value" : "urn:uuid:1813b23d-195e-4b28-8221-24247035bf08",
            "assigner" : {
              "reference" : "Organization/e17d03b8-e7fd-4654-bc9c-cb2eb5dda71f"
            }
          }
        },
        {
          "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner-extension",
          "valueReference" : {
            "reference" : "PractitionerRole/8dc790ba-8d93-4585-b91c-af8225b0796d"
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
      "contentString" : "We have a question regarding the referal..."
    }
  ]
}

```
