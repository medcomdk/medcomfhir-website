# IHE LanguageCode_TEMP - DK MedCom Document v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IHE LanguageCode_TEMP**

## ValueSet: IHE LanguageCode_TEMP 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-languagecode-VS-TEMP | *Version*:2.0.1 |
| Active as of 2015-01-01 | *Computable Name*:MedComIHE_CoreLanguageCode_TEMP |

 
_TEMP Tags for the Identification of Languages (RFC 3066) 

 **References** 

* [MedComContainedDocumentReference](StructureDefinition-medcom-contained-documentreference.md)
* [MedComDocumentComposition](StructureDefinition-medcom-document-composition.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "MedCom-ihe-core-languagecode-VS-TEMP",
  "url" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-languagecode-VS-TEMP",
  "version" : "2.0.1",
  "name" : "MedComIHE_CoreLanguageCode_TEMP",
  "title" : "IHE LanguageCode_TEMP",
  "status" : "active",
  "experimental" : false,
  "date" : "2015-01-01",
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
  "description" : "_TEMP Tags for the Identification of Languages (RFC 3066)",
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
  "compose" : {
    "include" : [
      {
        "system" : "urn:ietf:bcp:47",
        "concept" : [
          {
            "code" : "da-DK",
            "display" : "Danish (Denmark)"
          },
          {
            "code" : "da",
            "display" : "Danish"
          }
        ]
      }
    ]
  }
}

```
