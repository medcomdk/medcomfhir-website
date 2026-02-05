# Example of a reciever organization with a SOR and an EAN identifier. - DK MedCom acknowledgement v2.0.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of a reciever organization with a SOR and an EAN identifier.**

## Example Organization: Example of a reciever organization with a SOR and an EAN identifier.

Profile: [MedComMessagingOrganization](http://medcomfhir.dk/ig/messaging/2.1.0/StructureDefinition-medcom-messaging-organization.html)

**identifier**: `https://www.gs1.org/gln`/5790000209354, `urn:oid:1.2.208.176.1.1`/265161000016000

**name**: Receiver Organization



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "74cdf292-abf3-4f5f-80ea-60a48013ff6d",
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
  "name" : "Receiver Organization"
}

```
