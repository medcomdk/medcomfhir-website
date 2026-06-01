# MedCom Document HomeCommunityID - Danish XDS Documents profiles v1.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedCom Document HomeCommunityID**

## Extension: MedCom Document HomeCommunityID 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/medcom-document-homecommunityid-extension | *Version*:1.0.0-trial-use-1 |
| Draft as of 2026-06-01 | *Computable Name*:MedComDocumentHomeCommunityID |

Extension containing information about operational and in production home communities (XCA) in Danish Document Sharing

**Context of Use**

**Usage info**

**Usages:**

* Use this Extension: [MedComContainedDocumentReference](StructureDefinition-medcom-contained-documentreference.md)
* Examples for this Extension: [DocumentReference/4daf727f-f116-4e49-ad31-4018f0cc638a](DocumentReference-4daf727f-f116-4e49-ad31-4018f0cc638a.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/medcom.fhir.dk.xdsdocuments|current/StructureDefinition/medcom-document-homecommunityid-extension)

### Formal Views of Extension Content

 [Description of Profiles, Differentials, Snapshots, and how the XML and JSON presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-medcom-document-homecommunityid-extension.csv), [Excel](StructureDefinition-medcom-document-homecommunityid-extension.xlsx), [Schematron](StructureDefinition-medcom-document-homecommunityid-extension.sch) 

#### Constraints



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "medcom-document-homecommunityid-extension",
  "url" : "http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/medcom-document-homecommunityid-extension",
  "version" : "1.0.0-trial-use-1",
  "name" : "MedComDocumentHomeCommunityID",
  "title" : "MedCom Document HomeCommunityID",
  "status" : "draft",
  "date" : "2026-06-01T09:36:40+00:00",
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
  "description" : "Extension containing information about operational and in production home communities (XCA) in Danish Document Sharing",
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
        "short" : "MedCom Document HomeCommunityID",
        "definition" : "Extension containing information about operational and in production home communities (XCA) in Danish Document Sharing"
      },
      {
        "id" : "Extension.extension",
        "path" : "Extension.extension",
        "max" : "0"
      },
      {
        "id" : "Extension.url",
        "path" : "Extension.url",
        "fixedUri" : "http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/medcom-document-homecommunityid-extension"
      },
      {
        "id" : "Extension.value[x]",
        "path" : "Extension.value[x]",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "type",
              "path" : "$this"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        },
        "min" : 1
      },
      {
        "id" : "Extension.value[x]:valueCoding",
        "path" : "Extension.value[x]",
        "sliceName" : "valueCoding",
        "min" : 1,
        "max" : "1",
        "type" : [
          {
            "code" : "Coding"
          }
        ],
        "mustSupport" : true
      },
      {
        "id" : "Extension.value[x]:valueCoding.system",
        "path" : "Extension.value[x].system",
        "min" : 1,
        "mustSupport" : true
      },
      {
        "id" : "Extension.value[x]:valueCoding.code",
        "path" : "Extension.value[x].code",
        "min" : 1,
        "mustSupport" : true
      }
    ]
  }
}

```
