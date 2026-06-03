# Example of a reciever organization with a SOR, an EAN and Ydrenummer identifier. - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example of a reciever organization with a SOR, an EAN and Ydrenummer identifier.**

## Example Organization: Example of a reciever organization with a SOR, an EAN and Ydrenummer identifier.

Profile: [MedComMessagingRequesterOrganization](http://medcomfhir.dk/ig/messaging/3.0.0/StructureDefinition-medcom-requesterorganization.html)

**identifier**: `https://www.gs1.org/gln`/5790000127092, `urn:oid:1.2.208.176.1.1`/52581000016005, `urn:oid:1.2.208.176.1.4`/061654

**name**: Skødstrup Lægepraksis

### Contacts

| | |
| :--- | :--- |
| - | **Name** |
| * | O.K.M. |



## Resource Content

```json
{
  "resourceType" : "Organization",
  "id" : "1ab9c2d9-c348-4d75-9122-60ea8a6fdcf1",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/messaging/StructureDefinition/medcom-requesterorganization"
    ]
  },
  "identifier" : [
    {
      "system" : "https://www.gs1.org/gln",
      "value" : "5790000127092"
    },
    {
      "system" : "urn:oid:1.2.208.176.1.1",
      "value" : "52581000016005"
    },
    {
      "system" : "urn:oid:1.2.208.176.1.4",
      "value" : "061654"
    }
  ],
  "name" : "Skødstrup Lægepraksis",
  "contact" : [
    {
      "name" : {
        "given" : ["O.K.M."]
      }
    }
  ]
}

```
