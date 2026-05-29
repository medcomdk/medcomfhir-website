# DK MedCom analysis codes - Danish profile of the IHE XDS Metadata Standard v2.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK MedCom analysis codes**

## CodeSystem: DK MedCom analysis codes 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-analysis-codes-CS | *Version*:1.0.0 |
| Active as of 2015-01-01 | *Computable Name*:MedCom_XDS_AnalysisCodes |
| *Other Identifiers:*1.2.208.184.100.8 | |

 
CodeSystem for MedCom analysis codes 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedCom_XDS_EventCodeLists](ValueSet-MedCom-xds-eventcodelist-VS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedCom-xds-analysis-codes-CS",
  "url" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-analysis-codes-CS",
  "identifier" : [
    {
      "value" : "1.2.208.184.100.8"
    }
  ],
  "version" : "1.0.0",
  "name" : "MedCom_XDS_AnalysisCodes",
  "title" : "DK MedCom analysis codes",
  "status" : "active",
  "experimental" : false,
  "date" : "2015-01-01",
  "publisher" : "MedCom",
  "contact" : [
    {
      "name" : "MedCom",
      "telecom" : [
        {
          "system" : "url",
          "value" : "http://www.medcom.dk"
        }
      ]
    }
  ],
  "description" : "CodeSystem for MedCom analysis codes",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "DK",
          "display" : "Denmark"
        }
      ]
    }
  ],
  "caseSensitive" : false,
  "content" : "fragment",
  "concept" : [
    {
      "code" : "MCS88100",
      "display" : "Lunge—Lungefunktionsundersøgelse COPD FEV6; vol. = ? L"
    },
    {
      "code" : "MCS88015",
      "display" : "Lunge—Lungefunktionsundersøgelse FEV1; vol. = ? L"
    },
    {
      "code" : "MCS88019",
      "display" : "Arm—Blodtryk(systolisk) hjemme; tryk = ? mmHg"
    },
    {
      "code" : "MCS88020",
      "display" : "Arm—Blodtryk(diastolisk) hjemme; tryk = ? mmHg"
    },
    {
      "code" : "MCS88050",
      "display" : "Pt—Rejse sætte sig testen; antal (værdi 0-50) = × 1/30s"
    },
    {
      "code" : "MCS88137",
      "display" : "Pt—COPD Assessment Test (CAT) score; antal(værdi 0-40) = ?"
    },
    {
      "code" : "MCS88021",
      "display" : "Pt(KOL) —MRC skala; arb.antal(værdi 1-5) = ?"
    }
  ]
}

```
