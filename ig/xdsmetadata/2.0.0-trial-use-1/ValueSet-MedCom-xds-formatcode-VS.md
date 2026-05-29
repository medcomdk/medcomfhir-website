# DK XDS FormatCode - Danish profile of the IHE XDS Metadata Standard v2.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK XDS FormatCode**

## ValueSet: DK XDS FormatCode 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsmetadata/ValueSet/MedCom-xds-formatcode-VS | *Version*:1.0.0 |
| Active as of 2026-01-15 | *Computable Name*:MedCom_XDS_FormatCode |

 
ValueSet containing FormatCode. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

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
  "id" : "MedCom-xds-formatcode-VS",
  "url" : "http://medcomfhir.dk/ig/xdsmetadata/ValueSet/MedCom-xds-formatcode-VS",
  "version" : "1.0.0",
  "name" : "MedCom_XDS_FormatCode",
  "title" : "DK XDS FormatCode",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-15",
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
  "description" : "ValueSet containing FormatCode.",
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
        "system" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-formatcode-CS"
      }
    ]
  }
}

```
