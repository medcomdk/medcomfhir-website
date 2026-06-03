# PractitionerRole with a role and reference to a practitioner - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole with a role and reference to a practitioner**

## Example PractitionerRole: PractitionerRole with a role and reference to a practitioner

Profile: [MedComCorePractitionerRole](http://medcomfhir.dk/ig/core/2.4.0/StructureDefinition-medcom-core-practitionerrole.html)

**practitioner**: [Practitioner Mia ](Practitioner-be9f367d-a84a-4815-90a8-c83a03813fd8.md)

**code**: Sygeplejerske



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "4b3b6f0f-a475-4b04-8a92-105e8ce6a7bf",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/be9f367d-a84a-4815-90a8-c83a03813fd8"
  },
  "code" : [
    {
      "coding" : [
        {
          "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-core-PractitionerRolesSKSadministrativ",
          "code" : "sygeplejerske"
        }
      ]
    }
  ]
}

```
