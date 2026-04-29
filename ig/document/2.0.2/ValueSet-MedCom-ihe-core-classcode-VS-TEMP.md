# IHE ClassCode_TEMP - DK MedCom Document v2.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IHE ClassCode_TEMP**

## ValueSet: IHE ClassCode_TEMP 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-classcode-VS-TEMP | *Version*:2.0.2 |
| Active as of 2022-01-26 | *Computable Name*:MedComIHE_CoreClassCode_TEMP |

 
_TEMP Value set for the classCode attribute. classCode used in DK IHE Document sharing 

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
  "id" : "MedCom-ihe-core-classcode-VS-TEMP",
  "url" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-classcode-VS-TEMP",
  "version" : "2.0.2",
  "name" : "MedComIHE_CoreClassCode_TEMP",
  "title" : "IHE ClassCode_TEMP",
  "status" : "active",
  "experimental" : false,
  "date" : "2022-01-26",
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
  "description" : "_TEMP Value set for the classCode attribute. classCode used in DK IHE Document sharing",
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
        "system" : "http://medcomfhir.dk/ig/document/CodeSystem/MedCom-ihe-classcode-CS-TEMP",
        "concept" : [
          {
            "code" : "001"
          }
        ]
      }
    ]
  }
}

```
