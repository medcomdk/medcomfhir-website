# DK XDS HealthcareFacilityTypeCode - Danish profile of the IHE XDS Metadata Standard v2.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK XDS HealthcareFacilityTypeCode**

## ValueSet: DK XDS HealthcareFacilityTypeCode 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsmetadata/ValueSet/MedCom-xds-HealthcareFacilityTypeCode-VS | *Version*:1.0.0 |
| Active as of 2024-01-19 | *Computable Name*:MedCom_XDS_HealthcareFacilityTypeCode |

 
Value set for healthcare facility type code represents the type of organizational setting of the clinical encounter during which the documented act occurred. 

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
  "id" : "MedCom-xds-HealthcareFacilityTypeCode-VS",
  "url" : "http://medcomfhir.dk/ig/xdsmetadata/ValueSet/MedCom-xds-HealthcareFacilityTypeCode-VS",
  "version" : "1.0.0",
  "name" : "MedCom_XDS_HealthcareFacilityTypeCode",
  "title" : "DK XDS HealthcareFacilityTypeCode",
  "status" : "active",
  "experimental" : false,
  "date" : "2024-01-19",
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
  "description" : "Value set for healthcare facility type code represents the type of organizational setting of the clinical encounter during which the documented act occurred.",
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
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "concept" : [
          {
            "code" : "557511000005107"
          },
          {
            "code" : "550871000005101"
          },
          {
            "code" : "394761003"
          },
          {
            "code" : "264372000"
          },
          {
            "code" : "557501000005109"
          },
          {
            "code" : "554851000005102"
          },
          {
            "code" : "557531000005103"
          },
          {
            "code" : "20078004"
          },
          {
            "code" : "722173008"
          },
          {
            "code" : "309964003"
          },
          {
            "code" : "554221000005108"
          },
          {
            "code" : "56781000005109"
          },
          {
            "code" : "557881000005104"
          },
          {
            "code" : "554031000005103"
          },
          {
            "code" : "557891000005101"
          },
          {
            "code" : "546821000005103"
          },
          {
            "code" : "702871004"
          },
          {
            "code" : "554061000005105"
          },
          {
            "code" : "557901000005102"
          },
          {
            "code" : "550861000005106"
          },
          {
            "code" : "547011000005103"
          },
          {
            "code" : "546811000005109"
          },
          {
            "code" : "554881000005108"
          },
          {
            "code" : "554861000005100"
          },
          {
            "code" : "554821000005109"
          },
          {
            "code" : "550621000005101"
          },
          {
            "code" : "284546000"
          },
          {
            "code" : "22232009"
          },
          {
            "code" : "702824005"
          },
          {
            "code" : "309904001"
          },
          {
            "code" : "557591000005104"
          },
          {
            "code" : "554411000005101"
          },
          {
            "code" : "550631000005103"
          },
          {
            "code" : "550641000005106"
          },
          {
            "code" : "557521000005101"
          },
          {
            "code" : "550851000005109"
          },
          {
            "code" : "547211000005108"
          },
          {
            "code" : "557561000005105"
          },
          {
            "code" : "557541000005106"
          },
          {
            "code" : "550651000005108"
          },
          {
            "code" : "550661000005105"
          },
          {
            "code" : "551611000005102"
          },
          {
            "code" : "557581000005102"
          },
          {
            "code" : "557671000005101"
          },
          {
            "code" : "309939001"
          },
          {
            "code" : "42665001"
          },
          {
            "code" : "550891000005100"
          },
          {
            "code" : "554211000005102"
          },
          {
            "code" : "554871000005105"
          },
          {
            "code" : "550711000005101"
          },
          {
            "code" : "556841000005105"
          },
          {
            "code" : "702916001"
          },
          {
            "code" : "225728007"
          },
          {
            "code" : "550671000005100"
          },
          {
            "code" : "264361005"
          },
          {
            "code" : "554041000005106"
          },
          {
            "code" : "554021000005101"
          },
          {
            "code" : "554071000005100"
          },
          {
            "code" : "703069008"
          },
          {
            "code" : "550681000005102"
          },
          {
            "code" : "550691000005104"
          },
          {
            "code" : "550701000005104"
          },
          {
            "code" : "554231000005106"
          },
          {
            "code" : "554051000005108"
          },
          {
            "code" : "550811000005108"
          }
        ]
      }
    ]
  }
}

```
