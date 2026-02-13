# Example of a sender organization with a SOR and an EAN identifier. - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of a sender organization with a SOR and an EAN identifier.**

## Example Organization: Example of a sender organization with a SOR and an EAN identifier.

Profile: [MedComMessagingOrganization](http://medcomfhir.dk/ig/messaging/4.0.2/StructureDefinition-medcom-messaging-organization.html)

**identifier**: `https://www.gs1.org/gln`/5790000209354, `urn:oid:1.2.208.176.1.1`/265161000016000

**name**: Hjerteafdelingen på Herlev og Gentofte hospital



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "fae4c8cf-e5d6-404d-867d-97ffa49a1c58",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "https://www.gs1.org/gln",
      "value" : "5790000209354"
    },
    {
      "system" : "urn:oid:1.2.208.176.1.1",
      "value" : "265161000016000"
    }
  ],
  "name" : "Hjerteafdelingen på Herlev og Gentofte hospital"
}

```
