# Example of a sender organization with a SOR and an EAN identifier. - DK MedCom acknowledgement v2.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of a sender organization with a SOR and an EAN identifier.**

## Example Organization: Example of a sender organization with a SOR and an EAN identifier.

Profile: [MedComMessagingOrganization](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-organization.html)

**identifier**: `https://www.gs1.org/gln`/5790001348120, `urn:oid:1.2.208.176.1.1`/953741000016009

**name**: Sender Organization



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "d7056980-a8b2-42aa-8a0e-c1fc85d1f40d",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-messaging-organization"
    ]
  },
  "identifier" : [
    {
      "system" : "https://www.gs1.org/gln",
      "value" : "5790001348120"
    },
    {
      "system" : "urn:oid:1.2.208.176.1.1",
      "value" : "953741000016009"
    }
  ],
  "name" : "Sender Organization"
}

```
