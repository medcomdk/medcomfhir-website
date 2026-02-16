# Simple practitioner with a name - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Simple practitioner with a name**

## Example Practitioner: Simple practitioner with a name

Profile: [MedComCorePractitioner](http://medcomfhir.dk/ig/core/3.0.1/StructureDefinition-medcom-core-practitioner.html)

**name**: Michael Burns 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "e081a7fc-2df6-47e9-b6cd-77d8aaf7e8df",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner"
    ]
  },
  "name" : [
    {
      "family" : "Burns",
      "given" : ["Michael"]
    }
  ]
}

```
