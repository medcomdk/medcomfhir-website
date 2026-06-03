# Acute nurse - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Acute nurse**

## Example Practitioner: Acute nurse

Profile: [MedComCorePractitioner](http://medcomfhir.dk/ig/core/2.4.0/StructureDefinition-medcom-core-practitioner.html)

**name**: Mia 

**telecom**: [+45 05577668](tel:+4505577668)



## Resource Content

```json
{
  "resourceType" : "Practitioner",
  "id" : "be9f367d-a84a-4815-90a8-c83a03813fd8",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitioner"
    ]
  },
  "name" : [
    {
      "given" : ["Mia"]
    }
  ],
  "telecom" : [
    {
      "system" : "phone",
      "value" : "+45 05577668"
    }
  ]
}

```
