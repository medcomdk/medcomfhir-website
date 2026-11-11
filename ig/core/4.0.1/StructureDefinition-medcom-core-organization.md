# MedComCoreOrganization - DK MedCom Core v4.0.1

## Resource Profile: MedComCoreOrganization 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-organization | *Version*:4.0.1 |
| Active as of 2026-11-11 | *Computable Name*:MedComCoreOrganization |

 
A formally recognized organizations within danish healthcare, registered with a SOR identifier issued by The Danish Health Data Authority 

### Scope and usage

This profile describes the MedComCoreOrganization. The MedComCoreOrganization is inherited from the [DkCoreOrganization](https://hl7.dk/fhir/core/2.0.0/StructureDefinition-dk-core-organization.html) profile defined by HL7 Denmark. The base expectations when describing an organisation in a Danish context is to include an identifier, in terms of a Sundhundsvæsenets Organisations Register (SOR)-identifier. This profile is used to describe e.g. the organisation responsible for an encounter.

When using an organisation for exchange purposes, such as a sender, receiver or carbon-copy, please refer to the [MedComMessagingOrganization](http://medcomfhir.dk/ig/messaging/StructureDefinition-medcom-messaging-organization.html).

Please refer to the tab "Snapshot Table" below for the definition of the required content of a MedComCoreOrganization.

**Usages:**

* Refer to this Profile: [AssignedIdentifier](StructureDefinition-medcom-assigned-identifier.md), [MedComCoreCareTeam](StructureDefinition-medcom-core-careteam.md), [MedComCoreDiagnosticReport](StructureDefinition-medcom-core-diagnosticreport.md), [MedComCoreEncounter](StructureDefinition-medcom-core-encounter.md)... Show 4 more, [MedComMedia](StructureDefinition-medcom-core-media.md), [MedComCoreObservation](StructureDefinition-medcom-core-observation.md), [MedComCorePatient](StructureDefinition-medcom-core-patient.md) and [MedComCorePractitionerRole](StructureDefinition-medcom-core-practitionerrole.md)
* Examples for this Profile: [Aros Burn Center](Organization-12ee0dde-a672-462f-820d-5efe832d73c9.md) and [Organization/bca68510-fe3b-4161-aba0-908a693eb54f](Organization-bca68510-fe3b-4161-aba0-908a693eb54f.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/resource/medcom.fhir.dk.core|current/StructureDefinition/StructureDefinition-medcom-core-organization.json)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-core-organization.csv), [Excel](StructureDefinition-medcom-core-organization.xlsx), [Schematron](StructureDefinition-medcom-core-organization.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-core-organization",
  "url" : "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-organization",
  "version" : "4.0.1",
  "name" : "MedComCoreOrganization",
  "status" : "active",
  "date" : "2026-11-11T07:42:01+00:00",
  "publisher" : "MedCom",
  "contact" : [{
    "name" : "MedCom",
    "telecom" : [{
      "system" : "url",
      "value" : "http://www.medcom.dk"
    }]
  }],
  "description" : "A formally recognized organizations within danish healthcare, registered with a SOR identifier issued by The Danish Health Data Authority",
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
  "baseDefinition" : "http://hl7.dk/fhir/core/StructureDefinition/dk-core-organization",
  "derivation" : "constraint",
  "differential" : {
    "element" : [{
      "id" : "Organization",
      "path" : "Organization"
    },
    {
      "id" : "Organization.id",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:in-narrative"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://medcomfhir.dk/ig/core/ActorDefinition/ProducerActor"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "Organization.id",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Organization.text",
      "path" : "Organization.text",
      "short" : "The narrative text SHALL always be included when exchanging a MedCom FHIR Bundle.",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Organization.text.status",
      "path" : "Organization.text.status",
      "mustSupport" : true
    },
    {
      "id" : "Organization.text.div",
      "path" : "Organization.text.div",
      "mustSupport" : true
    },
    {
      "id" : "Organization.identifier:SOR-ID",
      "path" : "Organization.identifier",
      "sliceName" : "SOR-ID",
      "short" : "Sundhedsvæsenets Organisationsregister (SOR) identifier",
      "min" : 1,
      "mustSupport" : true
    },
    {
      "id" : "Organization.identifier:SOR-ID.system",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:in-narrative"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://medcomfhir.dk/ig/core/ActorDefinition/ProducerActor"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "Organization.identifier.system",
      "mustSupport" : true
    },
    {
      "id" : "Organization.identifier:SOR-ID.value",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:in-narrative"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://medcomfhir.dk/ig/core/ActorDefinition/ProducerActor"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "Organization.identifier.value",
      "mustSupport" : true
    },
    {
      "id" : "Organization.name",
      "extension" : [{
        "extension" : [{
          "url" : "code",
          "valueCode" : "SHALL:in-narrative"
        },
        {
          "url" : "actor",
          "valueCanonical" : "http://medcomfhir.dk/ig/core/ActorDefinition/ProducerActor"
        }],
        "url" : "http://hl7.org/fhir/StructureDefinition/obligation"
      }],
      "path" : "Organization.name",
      "definition" : "Name of the organization. Shall be present if known by the sender.",
      "mustSupport" : true
    }]
  }
}

```
