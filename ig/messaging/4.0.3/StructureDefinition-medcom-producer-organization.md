# MedComCoreProducerOrganization - DK MedCom Messaging v4.0.3

## Resource Profile: MedComCoreProducerOrganization 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-producer-organization | *Version*:4.0.3 |
| Active as of 2026-11-11 | *Computable Name*:MedComProducerOrganization |

 
This profile is intended to be used to represent the producer of the observations. 

## Scope and usage

This profile is a MedCom messaging profile for the producer of the observation and is intended to represent the producer organization of the observation for a variety cases including:

* laboratory observations
* homeCareObservations

**Usages:**

* Examples for this Profile: [Pleje og Rehabilitering](Organization-ef5cb9a6-835f-4d18-a34e-179c578b9a2a.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.messaging|current/StructureDefinition/StructureDefinition-medcom-producer-organization.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-producer-organization.csv), [Excel](StructureDefinition-medcom-producer-organization.xlsx), [Schematron](StructureDefinition-medcom-producer-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-producer-organization",
  "url" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-producer-organization",
  "version" : "4.0.3",
  "name" : "MedComProducerOrganization",
  "title" : "MedComCoreProducerOrganization",
  "status" : "active",
  "date" : "2026-11-11T07:53:00+00:00",
  "publisher" : "MedCom",
  "contact" : [{
    "name" : "MedCom",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.medcom.dk"
    }]
  }],
  "description" : "This profile is intended to be used to represent the producer of the observations.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "DK",
      "display" : "Denmark"
    }]
  }],
  "fhirVersion" : "4.0.1",
  "mapping" : [{
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
  }],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Organization",
  "baseDefinition" : "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
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
    }]
  }
}

```
