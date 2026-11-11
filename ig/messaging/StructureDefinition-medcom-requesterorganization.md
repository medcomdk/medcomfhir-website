# MedComMessagingRequesterOrganization - DK MedCom Messaging v4.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComMessagingRequesterOrganization**

## Resource Profile: MedComMessagingRequesterOrganization 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-requesterorganization | *Version*:4.0.2 |
| Active as of 2026-02-13 | *Computable Name*:MedComRequesterOrganization |

 
This profile is intended to be used to represent the requester organization of the observations. 

> Note: This profile is intended to represent the requester organization of the observations. The requester can be the a general practitioner, who orders a number of homecare or laboratory observation.

### Scope and usage

This profile is intended to be used to represent the requester organization of the observations.

#### Contact informations

It is required to specify contact person at the organization that reqests observations. The contact information shall contain either initials of the general practitioner or status "unknown" from the [data-absent-reason ValueSet](http://hl7.org/fhir/R4/valueset-data-absent-reason.html) shall be sent. In MedComMessagingRequesterOrganization the contact.name.given shall be used to express the initials of the general practitioner. The standard follows HL7 rulse to expres initals. [Click here to read the rules](http://hl7.org/fhir/R4/datatypes.html#HumanName)

Furthermore identifiers such as SOR-, EAN and Ydernummer-identifier needs to be specified.

**Usages:**

* Examples for this Profile: [Skødstrup Lægepraksis](Organization-42541447-b58c-4a1a-9514-02b80494bbd3.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.messaging|current/StructureDefinition/medcom-requesterorganization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-requesterorganization.csv), [Excel](StructureDefinition-medcom-requesterorganization.xlsx), [Schematron](StructureDefinition-medcom-requesterorganization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-requesterorganization",
  "url" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-requesterorganization",
  "version" : "4.0.2",
  "name" : "MedComRequesterOrganization",
  "title" : "MedComMessagingRequesterOrganization",
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
  "description" : "This profile is intended to be used to represent the requester organization of the observations.",
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
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "servd",
      "uri" : "http://www.omg.org/spec/ServD/1.0/",
      "name" : "ServD"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Organization",
        "path" : "Organization"
      },
      {
        "id" : "Organization.identifier",
        "path" : "Organization.identifier",
        "min" : 3
      },
      {
        "id" : "Organization.identifier:Ydernummer",
        "path" : "Organization.identifier",
        "sliceName" : "Ydernummer",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Organization.contact",
        "path" : "Organization.contact",
        "min" : 1,
        "max" : "1",
        "constraint" : [
          {
            "key" : "medcom-homecareObservation-4",
            "severity" : "error",
            "human" : "There shall either be a RequesterInitials or a InitialsNotKnown.",
            "expression" : "name.exists() or extension('http://hl7.org/fhir/StructureDefinition/data-absent-reason').exists()",
            "source" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-requesterorganization"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Organization.contact.extension",
        "path" : "Organization.contact.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Organization.contact.extension:InitialsNotKnown",
        "path" : "Organization.contact.extension",
        "sliceName" : "InitialsNotKnown",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/data-absent-reason|5.2.0"
            ]
          }
        ]
      },
      {
        "id" : "Organization.contact.name",
        "path" : "Organization.contact.name",
        "mustSupport" : true
      },
      {
        "id" : "Organization.contact.name.given",
        "path" : "Organization.contact.name.given",
        "short" : "Initials of the practitioner that request the observation.",
        "min" : 1,
        "max" : "1",
        "mustSupport" : true
      }
    ]
  }
}

```
