# MedComDocumentBundle - DK MedCom Document v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComDocumentBundle**

## Resource Profile: MedComDocumentBundle 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-bundle | *Version*:2.0.1 |
| Active as of 2026-03-10 | *Computable Name*:MedComDocumentBundle |

 
The Bundle profile for a document 

### Scope and usage

The MedComDocumentBundle profile describes the Bundle resource that shall be used in all MedCom FHIR Documents. MedComDocumentBundle is the container for the content in a document. As this profile is the used in a document, the element type shall always be 'document'. This entails that the first resource in the entry element shall be a MedComDocumentComposition.

#### Mapping from IHE-XDS metadata to FHIR Bundle

MedCom has developed a mapping. Find the [mapping from IHE XDS metadata to FHIR Bundle here](https://medcomdk.github.io/dk-medcom-document/assets/documents/Mapping_from_IHE-XDS_metadata_to_FHIR.html).

**Usages:**

* Examples for this Profile: [Bundle/0a74554f-ded3-4bc7-bef1-535699565c5b](Bundle-0a74554f-ded3-4bc7-bef1-535699565c5b.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.document|current/StructureDefinition/medcom-document-bundle)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-document-bundle.csv), [Excel](StructureDefinition-medcom-document-bundle.xlsx), [Schematron](StructureDefinition-medcom-document-bundle.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-document-bundle",
  "url" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-bundle",
  "version" : "2.0.1",
  "name" : "MedComDocumentBundle",
  "status" : "active",
  "date" : "2026-03-10T10:51:18+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.medcom.dk"
        },
        {
          "system" : "email",
          "value" : "fhir@medcom.dk"
        }
      ]
    }
  ],
  "description" : "The Bundle profile for a document",
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
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Bundle",
  "baseDefinition" : "http://hl7.org/fhir/StructureDefinition/Bundle",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Bundle",
        "path" : "Bundle"
      },
      {
        "id" : "Bundle.id",
        "path" : "Bundle.id",
        "min" : 1,
        "constraint" : [
          {
            "key" : "medcom-document-bundle-id-uuid",
            "severity" : "error",
            "human" : "The value shall correspond to the structure of an UUID",
            "expression" : "$this.matches('(?i)^[0-9a-f]{8}-[0-9a-f]{4}-[45][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$')",
            "source" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-bundle"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.identifier",
        "path" : "Bundle.identifier",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Bundle.type",
        "path" : "Bundle.type",
        "short" : "Always a document",
        "patternCode" : "document",
        "mustSupport" : true
      },
      {
        "id" : "Bundle.timestamp",
        "path" : "Bundle.timestamp",
        "short" : "[DocumentEntry.creationTime] Date and time that the FHIR Document is created.",
        "min" : 1,
        "constraint" : [
          {
            "key" : "medcom-datetime-has-time-offset-zulu",
            "severity" : "error",
            "human" : "dateTime must include date, time, and time zone.",
            "expression" : "$this.toString().matches('^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])T([01][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]([.][0-9]+)?(Z|[+-][0-9]{2}:[0-9]{2})$')",
            "source" : "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-bundle"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry",
        "path" : "Bundle.entry",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry.fullUrl",
        "path" : "Bundle.entry.fullUrl",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Bundle.entry.resource",
        "path" : "Bundle.entry.resource",
        "min" : 1,
        "mustSupport" : true
      }
    ]
  }
}

```
