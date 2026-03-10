# IHE TypeCode_TEMP - DK MedCom Document v2.0.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IHE TypeCode_TEMP**

## ValueSet: IHE TypeCode_TEMP 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-typecode-VS-TEMP | *Version*:2.0.1 |
| Active as of 2026-03-10 | *Computable Name*:MedComIHE_CoreTypeCode_TEMP |

 
_TEMP ValueSet containing TypeCode. 

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
  "id" : "MedCom-ihe-core-typecode-VS-TEMP",
  "url" : "http://medcomfhir.dk/ig/document/ValueSet/MedCom-ihe-core-typecode-VS-TEMP",
  "version" : "2.0.1",
  "name" : "MedComIHE_CoreTypeCode_TEMP",
  "title" : "IHE TypeCode_TEMP",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-03-10",
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
  "description" : "_TEMP ValueSet containing TypeCode.",
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
            "code" : "53576-5",
            "display" : "Personal health monitoring report Document"
          },
          {
            "code" : "74468-0",
            "display" : "Questionnaire Form Definition Document"
          },
          {
            "code" : "56446-8",
            "display" : "Appointment Summary Document"
          },
          {
            "code" : "39289-4",
            "display" : "Follow-up (referred to) provider /specialist, appointment date CPHS"
          },
          {
            "code" : "39290-2",
            "display" : "Follow-up (referred to) program, appointment date CPHS"
          },
          {
            "code" : "103140-0",
            "display" : "Personal health attachment Document"
          },
          {
            "code" : "74465-6",
            "display" : "Questionnaire Response Document"
          },
          {
            "code" : "11450-4",
            "display" : "Problem list - Reported"
          },
          {
            "code" : "81215-6",
            "display" : "Care plan - recommended C-CDA R2.0 and R2.1 sections"
          },
          {
            "code" : "11502-2",
            "display" : "Laboratory report"
          },
          {
            "code" : "57059-8",
            "display" : "Pregnancy visit summary note Narrative"
          },
          {
            "code" : "28615-3",
            "display" : "Audiology Study"
          },
          {
            "code" : "11524-6",
            "display" : "EKG study"
          }
        ]
      },
      {
        "system" : "http://medcomfhir.dk/ig/document/CodeSystem/MedCom-message-codes-CS-TEMP",
        "concept" : [
          {
            "code" : "CMR",
            "display" : "Clinical Mesurement Report"
          },
          {
            "code" : "PDC",
            "display" : "Stamkort"
          },
          {
            "code" : "MADC",
            "display" : "MADC"
          },
          {
            "code" : "PRF",
            "display" : "Pregnancy Referral Form"
          },
          {
            "code" : "PSCR",
            "display" : "Pregnancy Shared Care Report"
          },
          {
            "code" : "PMR",
            "display" : "Pregnancy Measurement Report"
          }
        ]
      },
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/554471000005108",
        "concept" : [
          {
            "code" : "866144008",
            "display" : "Encounter note"
          }
        ]
      }
    ]
  }
}

```
