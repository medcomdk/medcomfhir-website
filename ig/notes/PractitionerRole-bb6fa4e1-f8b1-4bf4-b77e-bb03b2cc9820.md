# PractitionerRole - DK MedCom Notes v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PractitionerRole**

## Example PractitionerRole: PractitionerRole

Profile: [MedComDocumentPractitionerRoleversion: null2.0.1)](http://medcomfhir.dk/ig/document/2.0.1/StructureDefinition-medcom-document-practitionerrole.html)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/7.0.0/NamingSystem-uri.html)/urn:uuid:9a6fb982-ba4a-41d0-ac09-f04cc51c8f38

**practitioner**: [Practitioner Sidsel Andersen ](Practitioner-48ed6310-3095-44da-9e34-d1cd6bd830c9.md)

**organization**: [Organization Lægerne Hasseris Bymidte](Organization-f8d0eb07-5336-4005-9081-b065f9a82663.md)

**code**: Speciallæge i praksis



## Resource Content

```json
{
  "resourceType" : "PractitionerRole",
  "id" : "bb6fa4e1-f8b1-4bf4-b77e-bb03b2cc9820",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitionerrole|2.0.0"
    ]
  },
  "identifier" : [
    {
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:9a6fb982-ba4a-41d0-ac09-f04cc51c8f38"
    }
  ],
  "practitioner" : {
    "reference" : "Practitioner/48ed6310-3095-44da-9e34-d1cd6bd830c9"
  },
  "organization" : {
    "reference" : "Organization/f8d0eb07-5336-4005-9081-b065f9a82663"
  },
  "code" : [
    {
      "coding" : [
        {
          "system" : "http://medcomfhir.dk/ig/terminology/CodeSystem/medcom-core-PractitionerRolesSKSadministrativ",
          "code" : "speciallaegeipraksis"
        }
      ]
    }
  ]
}

```
