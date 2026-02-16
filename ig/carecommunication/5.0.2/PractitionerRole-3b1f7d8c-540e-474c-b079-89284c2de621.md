# PractitionerRole with a role and reference to a practitioner - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole with a role and reference to a practitioner**

## Example PractitionerRole: PractitionerRole with a role and reference to a practitioner

Profile: [MedComCorePractitionerRole](http://medcomfhir.dk/ig/core/3.0.1/StructureDefinition-medcom-core-practitionerrole.html)

**practitioner**: [Practitioner Michael Burns ](Practitioner-6397c13d-7cb2-4834-871c-47f528bb79cf.md)

**organization**: [Organization Hjerteafdelingen på Herlev og Gentofte hospital](Organization-c39b114b-a9c1-46bb-ac30-e3ce71f28c3a.md)

**code**: Sygeplejerske



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "3b1f7d8c-540e-474c-b079-89284c2de621",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/core/StructureDefinition/medcom-core-practitionerrole"
    ]
  },
  "practitioner" : {
    "reference" : "Practitioner/6397c13d-7cb2-4834-871c-47f528bb79cf"
  },
  "organization" : {
    "reference" : "Organization/c39b114b-a9c1-46bb-ac30-e3ce71f28c3a"
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
