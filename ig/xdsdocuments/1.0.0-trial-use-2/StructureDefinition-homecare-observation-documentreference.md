# HomeCareObservationDocumentReference - Danish XDS Documents profiles v1.0.0-trial-use-2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **HomeCareObservationDocumentReference**

## Resource Profile: HomeCareObservationDocumentReference 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/homecare-observation-documentreference | *Version*:1.0.0-trial-use-2 |
| Draft as of 2026-06-17 | *Computable Name*:HomeCareObservationDocumentReference |

 
A profile stating the rules, when exchanging a document including homecare observation (DA: Kommunale Prøvesvar). 

**Usages:**

* Examples for this Profile: [DocumentReference/16002002-ac41-45de-ad6b-eb02b098e859](DocumentReference-16002002-ac41-45de-ad6b-eb02b098e859.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.xdsdocuments|current/StructureDefinition/homecare-observation-documentreference)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-homecare-observation-documentreference.csv), [Excel](StructureDefinition-homecare-observation-documentreference.xlsx), [Schematron](StructureDefinition-homecare-observation-documentreference.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "homecare-observation-documentreference",
  "url" : "http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/homecare-observation-documentreference",
  "version" : "1.0.0-trial-use-2",
  "name" : "HomeCareObservationDocumentReference",
  "status" : "draft",
  "date" : "2026-06-17T08:43:36+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://medcom.dk/"
        },
        {
          "system" : "email",
          "value" : "fhir@medcom.dk"
        }
      ]
    }
  ],
  "description" : "A profile stating the rules, when exchanging a document including homecare observation (DA: Kommunale Prøvesvar).",
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
      "identity" : "DocumentEntry-Mapping",
      "uri" : "urn:ihe:iti:xds:documententry",
      "name" : "XDS and MHD Mapping"
    },
    {
      "identity" : "workflow",
      "uri" : "http://hl7.org/fhir/workflow",
      "name" : "Workflow Pattern"
    },
    {
      "identity" : "fhircomposition",
      "uri" : "http://hl7.org/fhir/composition",
      "name" : "FHIR Composition"
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
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "xds",
      "uri" : "http://ihe.net/xds",
      "name" : "XDS metadata equivalent"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "DocumentReference",
  "baseDefinition" : "http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/medcom-contained-documentreference",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "DocumentReference",
        "path" : "DocumentReference"
      },
      {
        "id" : "DocumentReference.extension:versionid",
        "path" : "DocumentReference.extension",
        "sliceName" : "versionid"
      },
      {
        "id" : "DocumentReference.extension:versionid.extension",
        "path" : "DocumentReference.extension.extension",
        "max" : "0"
      },
      {
        "id" : "DocumentReference.extension:versionid.value[x]",
        "path" : "DocumentReference.extension.value[x]",
        "patternString" : "2.0"
      },
      {
        "id" : "DocumentReference.type.coding",
        "path" : "DocumentReference.type.coding",
        "patternCoding" : {
          "system" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-typecode-CS",
          "code" : "HCOM",
          "display" : "HomeCareObservation message"
        }
      }
    ]
  }
}

```
