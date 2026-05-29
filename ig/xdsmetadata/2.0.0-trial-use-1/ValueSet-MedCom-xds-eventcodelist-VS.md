# DK XDS EventCodeLists - Danish profile of the IHE XDS Metadata Standard v2.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK XDS EventCodeLists**

## ValueSet: DK XDS EventCodeLists 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsmetadata/ValueSet/MedCom-xds-eventcodelist-VS | *Version*:1.0.0 |
| Active as of 2022-01-26 | *Computable Name*:MedCom_XDS_EventCodeLists |

 
ValueSet containing EventCodeLists. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

No Expansion for this valueset (not supported by Publication Tooling)

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
  "id" : "MedCom-xds-eventcodelist-VS",
  "url" : "http://medcomfhir.dk/ig/xdsmetadata/ValueSet/MedCom-xds-eventcodelist-VS",
  "version" : "1.0.0",
  "name" : "MedCom_XDS_EventCodeLists",
  "title" : "DK XDS EventCodeLists",
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
        }
      ]
    }
  ],
  "description" : "ValueSet containing EventCodeLists.",
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
        "system" : "urn:oid:1.2.208.176.2.4",
        "concept" : [
          {
            "code" : "ALAL01"
          },
          {
            "code" : "ALAL02"
          },
          {
            "code" : "ALAL03"
          },
          {
            "code" : "ALAL21"
          },
          {
            "code" : "ALAL22"
          },
          {
            "code" : "ALAL23"
          },
          {
            "code" : "ALAL51"
          },
          {
            "code" : "ALAL52"
          }
        ]
      },
      {
        "system" : "urn:oid:1.2.208.176.7.3.1",
        "concept" : [
          {
            "code" : "3d3d6f46-ea42-4d64-a2bb-52646dcd6513"
          },
          {
            "code" : "1de279ff-99fd-4544-9e41-300f56bc08e4"
          },
          {
            "code" : "898cba44-c668-41e8-ac25-c2b880ac7090"
          },
          {
            "code" : "c820effc-91d3-45cd-b2df-53ae95284349"
          }
        ]
      },
      {
        "system" : "http://npu-terminology.org",
        "concept" : [
          {
            "code" : "NPU03804"
          },
          {
            "code" : "NPU19748"
          },
          {
            "code" : "NPU22089"
          },
          {
            "code" : "NPU03963"
          },
          {
            "code" : "NPU21692"
          }
        ]
      },
      {
        "system" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-analysis-codes-CS",
        "concept" : [
          {
            "code" : "MCS88100"
          },
          {
            "code" : "MCS88015"
          },
          {
            "code" : "MCS88019"
          },
          {
            "code" : "MCS88020"
          },
          {
            "code" : "MCS88050"
          },
          {
            "code" : "MCS88137"
          },
          {
            "code" : "MCS88021"
          }
        ]
      },
      {
        "system" : "urn:ad:dk:medcom:noah:action-categories",
        "concept" : [
          {
            "code" : "1"
          },
          {
            "code" : "15"
          },
          {
            "code" : "16"
          },
          {
            "code" : "129"
          },
          {
            "code" : "130"
          }
        ]
      }
    ]
  }
}

```
