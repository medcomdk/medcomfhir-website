# 3rd message - Example of a reciever organization with a SOR and an EAN identifier. - DK MedCom Carecommunication v5.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **3rd message - Example of a reciever organization with a SOR and an EAN identifier.**

## Example Organization: 3rd message - Example of a reciever organization with a SOR and an EAN identifier.

Profile: [MedComMessagingOrganization](http://medcomfhir.dk/ig/messaging/4.0.2/StructureDefinition-medcom-messaging-organization.html)

**identifier**: `https://www.gs1.org/gln`/5790001348120, `urn:oid:1.2.208.176.1.1`/953741000016009

**name**: Plejecenter Herlev



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "f20f31cd-5dd2-4a80-ab00-97f7109864a7",
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
