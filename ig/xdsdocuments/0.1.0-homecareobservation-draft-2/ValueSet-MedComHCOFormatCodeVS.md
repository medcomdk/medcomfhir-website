# MedComHCOFormatCodeVS - Danish XDS Documents profiles v0.1.0-homecareobservation-draft-2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **MedComHCOFormatCodeVS**

## ValueSet: MedComHCOFormatCodeVS 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsdocuments/ValueSet/MedComHCOFormatCodeVS | *Version*:0.1.0-homecareobservation-draft-2 |
| Draft as of 2026-04-30 | *Computable Name*:MedComHCOFormatCodeVS |

 
Valueset containing the format codes for HomeCareObservation documents (DA: Kommunale Prøvesvar). 

 **References** 

* [HomeCareObservationDocumentReference](StructureDefinition-homecare-observation-documentreference.md)

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
  "id" : "MedComHCOFormatCodeVS",
  "url" : "http://medcomfhir.dk/ig/xdsdocuments/ValueSet/MedComHCOFormatCodeVS",
  "version" : "0.1.0-homecareobservation-draft-2",
  "name" : "MedComHCOFormatCodeVS",
  "title" : "MedComHCOFormatCodeVS",
  "status" : "draft",
  "date" : "2026-04-30T11:34:05+00:00",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://medcom.dk/"
        }
      ]
    }
  ],
  "description" : "Valueset containing the format codes for HomeCareObservation documents (DA: Kommunale Prøvesvar).",
  "compose" : {
    "include" : [
      {
        "system" : "http://medcomfhir.dk/ig/xdsdocuments/CodeSystem/MedComHCOFormatCodeCS"
      }
    ]
  }
}

```
