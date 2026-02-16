# Simple practitioner with a name - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Simple practitioner with a name**

## Example Practitioner: Simple practitioner with a name

Profile: [MedComCorePractitioner](http://medcomfhir.dk/ig/core/3.0.1/StructureDefinition-medcom-core-practitioner.html)

**name**: Ann Marie Wounds 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "ed8d4f6a-a2e4-4343-b823-37ca90c1872a",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner"
    ]
  },
  "name" : [
    {
      "family" : "Wounds",
      "given" : ["Ann", "Marie"]
    }
  ]
}

```
