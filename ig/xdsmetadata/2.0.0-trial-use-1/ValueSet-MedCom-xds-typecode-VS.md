# DK XDS TypeCode ValueSet - Danish profile of the IHE XDS Metadata Standard v2.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK XDS TypeCode ValueSet**

## ValueSet: DK XDS TypeCode ValueSet 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsmetadata/ValueSet/MedCom-xds-typecode-VS | *Version*:1.0.0 |
| Active as of 2026-01-15 | *Computable Name*:MedCom_XDS_TypeCode |

 
ValueSet containing TypeCode. 

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
  "id" : "MedCom-xds-typecode-VS",
  "url" : "http://medcomfhir.dk/ig/xdsmetadata/ValueSet/MedCom-xds-typecode-VS",
  "version" : "1.0.0",
  "name" : "MedCom_XDS_TypeCode",
  "title" : "DK XDS TypeCode ValueSet",
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
  "description" : "ValueSet containing TypeCode.",
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
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "53576-5"
          },
          {
            "code" : "74468-0"
          },
          {
            "code" : "56446-8"
          },
          {
            "code" : "39289-4"
          },
          {
            "code" : "39290-2"
          },
          {
            "code" : "103140-0"
          },
          {
            "code" : "74465-6"
          },
          {
            "code" : "55188-7"
          },
          {
            "code" : "11450-4"
          },
          {
            "code" : "81215-6"
          },
          {
            "code" : "11502-2"
          },
          {
            "code" : "57059-8"
          },
          {
            "code" : "28615-3"
          },
          {
            "code" : "11524-6"
          },
          {
            "code" : "75503-3"
          }
        ]
      },
      {
        "system" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-typecode-CS",
        "concept" : [
          {
            "code" : "CMR"
          },
          {
            "code" : "PDC"
          },
          {
            "code" : "MADC"
          },
          {
            "code" : "PRF"
          },
          {
            "code" : "PSCR"
          },
          {
            "code" : "PMR"
          },
          {
            "code" : "HCOM"
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "866144008"
          }
        ]
      }
    ]
  }
}

```
