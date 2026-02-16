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
  "id" : "5d37f9e1-2beb-4528-81bf-d521d108c738",
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
