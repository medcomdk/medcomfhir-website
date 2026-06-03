# PractitionerRole with a role and reference to a practitioner - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole with a role and reference to a practitioner**

## Example PractitionerRole: PractitionerRole with a role and reference to a practitioner

Profile: [MedComCorePractitionerRole](http://medcomfhir.dk/ig/core/2.4.0/StructureDefinition-medcom-core-practitionerrole.html)

**practitioner**: [Practitioner Mia ](Practitioner-b56708c6-2df3-4e4a-a110-2f924b9fc072.md)

**code**: Sygeplejerske



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "6ff69f1c-690d-11ed-9022-0242ac120002",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/b56708c6-2df3-4e4a-a110-2f924b9fc072"
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
