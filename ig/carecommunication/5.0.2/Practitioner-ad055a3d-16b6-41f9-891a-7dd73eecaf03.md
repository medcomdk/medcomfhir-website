# Simple practitioner with a name - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Simple practitioner with a name**

## Example Practitioner: Simple practitioner with a name

Profile: [MedComCorePractitioner](http://medcomfhir.dk/ig/core/3.0.1/StructureDefinition-medcom-core-practitioner.html)

**name**: Emma Waters 



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "ad055a3d-16b6-41f9-891a-7dd73eecaf03",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner"
    ]
  },
  "name" : [
    {
      "family" : "Waters",
      "given" : ["Emma"]
    }
  ]
}

```
