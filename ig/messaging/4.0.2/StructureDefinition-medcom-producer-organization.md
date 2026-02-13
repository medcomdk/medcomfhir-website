# MedComCoreProducerOrganization - DK MedCom Messaging v4.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComCoreProducerOrganization**

## Resource Profile: MedComCoreProducerOrganization 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-producer-organization | *Version*:4.0.2 |
| Active as of 2026-02-13 | *Computable Name*:MedComProducerOrganization |

 
This profile is intended to be used to represent the producer of the observations. 

**Usages:**

* Examples for this Profile: [Pleje og Rehabilitering](Organization-ef5cb9a6-835f-4d18-a34e-179c578b9a2a.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.messaging|current/StructureDefinition/medcom-producer-organization)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-producer-organization.csv), [Excel](StructureDefinition-medcom-producer-organization.xlsx), [Schematron](StructureDefinition-medcom-producer-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-producer-organization",
  "url" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-producer-organization",
  "version" : "4.0.2",
  "name" : "MedComProducerOrganization",
  "title" : "MedComCoreProducerOrganization",
  "status" : "active",
  "date" : "2026-02-13T09:21:25+00:00",
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
  "description" : "This profile is intended to be used to represent the producer of the observations.",
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
        "id" : "Organization.identifier:ProducentID",
        "path" : "Organization.identifier",
        "sliceName" : "ProducentID",
        "short" : "Offical MedCom code describing the producer of the observation."
      },
      {
        "id" : "Organization.identifier:ProducentID.system",
        "path" : "Organization.identifier.system",
        "mustSupport" : true
      },
      {
        "id" : "Organization.identifier:ProducentID.value",
        "path" : "Organization.identifier.value",
        "mustSupport" : true
      }
    ]
  }
}

```
