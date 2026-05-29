# OID to CodeSystem Reference ConceptMap - Danish profile of the IHE XDS Metadata Standard v2.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **OID to CodeSystem Reference ConceptMap**

## ConceptMap: OID to CodeSystem Reference ConceptMap 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsmetadata/ConceptMap/MedComConceptMapOIDToCodeSystemReference | *Version*:2.0.0-trial-use-1 |
| Draft as of 2026-05-29 | *Computable Name*:MedComConceptMapOIDToCodeSystemReference |

 
Maps OIDs to their corresponding FHIR CodeSystem references where available. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "MedComConceptMapOIDToCodeSystemReference",
  "url" : "http://medcomfhir.dk/ig/xdsmetadata/ConceptMap/MedComConceptMapOIDToCodeSystemReference",
  "version" : "2.0.0-trial-use-1",
  "name" : "MedComConceptMapOIDToCodeSystemReference",
  "title" : "OID to CodeSystem Reference ConceptMap",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-05-29T11:30:26+00:00",
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
  "description" : "Maps OIDs to their corresponding FHIR CodeSystem references where available.",
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
  "group" : [
    {
      "source" : "oid-registry",
      "target" : "XDS-Metadata-CodeSystems",
      "element" : [
        {
          "code" : "2.16.840.1.113883.6.96",
          "display" : "SCT",
          "target" : [
            {
              "code" : "http://snomed.info/sct|http://snomed.info/sct/554471000005108/version/20260331",
              "display" : "http://snomed.info/sct|http://snomed.info/sct/554471000005108/version/20260331",
              "equivalence" : "equivalent",
              "comment" : "Latest SNOMED CT Danish Edition as of 2026-03-31 is used."
            }
          ]
        },
        {
          "code" : "2.16.840.1.113883.6.1",
          "display" : "LOINC",
          "target" : [
            {
              "code" : "http://loinc.org",
              "display" : "http://loinc.org",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "2.16.840.1.113883.5.79",
          "display" : "mediaType",
          "target" : [
            {
              "code" : "urn:ietf:bcp:13",
              "display" : "urn:ietf:bcp:13",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "2.16.840.1.113883.6.121",
          "display" : "ieft3066",
          "target" : [
            {
              "code" : "urn:ietf:bcp:47",
              "display" : "urn:ietf:bcp:47",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "2.16.840.1.113883.5.25",
          "display" : "Confidentiality",
          "target" : [
            {
              "code" : "http://npu-terminology.org",
              "display" : "http://npu-terminology.org",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "1.2.208.176.2.4",
          "display" : "SKS",
          "target" : [
            {
              "equivalence" : "unmatched",
              "comment" : "No CodeSystem reference provided in the source table."
            }
          ]
        },
        {
          "code" : "1.2.208.176.2.1",
          "display" : "NPU"
        },
        {
          "code" : "1.2.208.176.7.3.1",
          "display" : "schema-list",
          "target" : [
            {
              "equivalence" : "unmatched",
              "comment" : "No CodeSystem reference provided in the source table."
            }
          ]
        },
        {
          "code" : "1.2.208.176.8.1",
          "display" : "ihe",
          "target" : [
            {
              "code" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-homeCommunityId-CS",
              "display" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-homeCommunityId-CS",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "1.2.208.184.100.9",
          "display" : "classcode",
          "target" : [
            {
              "code" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-classcode-CS",
              "display" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-classcode-CS",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "1.2.208.184.100.1",
          "display" : "message-codes",
          "target" : [
            {
              "code" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-ihe-typecode-CS",
              "display" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-ihe-typecode-CS",
              "equivalence" : "equivalent"
            }
          ]
        },
        {
          "code" : "1.2.208.184.100.10",
          "display" : "formatcode",
          "target" : [
            {
              "code" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-ihe-formatcode-CS",
              "display" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-ihe-formatcode-CS",
              "equivalence" : "equivalent"
            }
          ]
        }
      ]
    }
  ]
}

```
