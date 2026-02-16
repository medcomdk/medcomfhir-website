# Example of a reciever organization with a SOR and an EAN identifier. - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of a reciever organization with a SOR and an EAN identifier.**

## Example Organization: Example of a reciever organization with a SOR and an EAN identifier.

Profile: [MedComMessagingOrganization](http://medcomfhir.dk/ig/messaging/4.0.2/StructureDefinition-medcom-messaging-organization.html)

**identifier**: `https://www.gs1.org/gln`/5790001348120, `urn:oid:1.2.208.176.1.1`/953741000016009

**name**: Plejecenter Herlev



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "ae899cbd-933b-4581-9a16-bd2da73f06a0",
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
  "name" : "Plejecenter Herlev"
}

```
