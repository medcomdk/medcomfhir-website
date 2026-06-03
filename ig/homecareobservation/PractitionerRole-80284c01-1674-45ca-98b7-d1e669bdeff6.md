# PractitionerRole with a role and reference to a practitioner - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole with a role and reference to a practitioner**

## Example PractitionerRole: PractitionerRole with a role and reference to a practitioner

Profile: [MedComCorePractitionerRole](http://medcomfhir.dk/ig/core/2.4.0/StructureDefinition-medcom-core-practitionerrole.html)

**practitioner**: [Practitioner Mia ](Practitioner-70f14d25-0979-4192-8da2-0c0a3950f4b1.md)

**code**: Sygeplejerske



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "80284c01-1674-45ca-98b7-d1e669bdeff6",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/70f14d25-0979-4192-8da2-0c0a3950f4b1"
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
