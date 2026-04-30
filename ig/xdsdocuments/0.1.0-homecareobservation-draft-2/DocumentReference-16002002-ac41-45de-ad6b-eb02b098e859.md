# Example HomeCareObservation DocumentReference - Danish XDS Documents profiles v0.1.0-homecareobservation-draft-2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Example HomeCareObservation DocumentReference**

## Example DocumentReference: Example HomeCareObservation DocumentReference

DocumentReference resource



## Resource Content

```json
{
  "resourceType" : "DocumentReference",
  "id" : "16002002-ac41-45de-ad6b-eb02b098e859",
  "meta" : {
    "profile" : [
      "http://medcomfhir.dk/ig/xdsdocuments/StructureDefinition/homecare-observation-documentreference"
    ]
  },
  "contained" : [
    {
      "resourceType" : "Patient",
      "id" : "769e04f2-6c09-45fe-8037-31ec1d59ce3b",
      "meta" : {
        "profile" : [
          "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-patient"
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">CPR: 0602631234, Name: Grethe KGBTest</div>"
      },
      "identifier" : [
        {
          "system" : "urn:oid:1.2.208.176.1.2",
          "value" : "0602631234"
        }
      ],
      "name" : [
        {
          "use" : "official",
          "family" : "KGBTest",
          "given" : ["Grethe"]
        }
      ],
      "gender" : "female",
      "birthDate" : "1963-02-06"
    },
    {
      "resourceType" : "Organization",
      "id" : "a7e61c7a-c2e7-40a5-ba9f-58d44cc2f6e1",
      "meta" : {
        "profile" : [
          "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-organization"
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Name: Aarhus Kommune, Identifier: 937961000016000, GLN: 5790000123117</div>"
      },
      "identifier" : [
        {
          "system" : "urn:oid:1.2.208.176.1.1",
          "value" : "937961000016000"
        },
        {
          "system" : "http://www.gs1.org/gln",
          "value" : "5790000123117"
        }
      ],
      "name" : "Aarhus Kommune"
    },
    {
      "resourceType" : "Practitioner",
      "id" : "6f7bf020-4417-4f29-a896-4ee70fcb1780",
      "meta" : {
        "profile" : [
          "http://medcomfhir.dk/ig/document/StructureDefinition/medcom-document-practitioner"
        ]
      },
      "text" : {
        "status" : "generated",
        "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\">Name: Mia null</div>"
      },
      "identifier" : [
        {
          "system" : "http://cura.systematic.com",
          "value" : "6f7bf020-4417-4f29-a896-4ee70fcb1780"
        }
      ],
      "name" : [
        {
          "family" : "null",
          "given" : ["Mia"]
        }
      ]
    }
  ],
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DocumentReference.version",
      "valueString" : "2.0"
    }
  ],
  "masterIdentifier" : {
    "use" : "usual",
    "system" : "https://systematic.dk/columna/cura",
    "value" : "urn:uuid:acf1f0c6-d9e1-404c-a580-392f2e38395d"
  },
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:uuid:16002002-ac41-45de-ad6b-eb02b098e859"
    }
  ],
  "status" : "current",
  "type" : {
    "coding" : [
      {
        "system" : "urn:oid:1.2.208.184.100.1",
        "code" : "HCOM",
        "display" : "HomeCareObservation message"
      }
    ]
  },
  "category" : [
    {
      "coding" : [
        {
          "system" : "http://medcomfhir.dk/ig/document/CodeSystem/MedCom-ihe-classcode-CS-TEMP",
          "code" : "001",
          "display" : "Klinisk rapport"
        }
      ]
    }
  ],
  "subject" : {
    "reference" : "#769e04f2-6c09-45fe-8037-31ec1d59ce3b"
  },
  "author" : [
    {
      "reference" : "#a7e61c7a-c2e7-40a5-ba9f-58d44cc2f6e1"
    },
    {
      "reference" : "#6f7bf020-4417-4f29-a896-4ee70fcb1780"
    }
  ],
  "securityLabel" : [
    {
      "coding" : [
        {
          "system" : "http://terminology.hl7.org/CodeSystem/v3-Confidentiality",
          "code" : "N"
        }
      ]
    }
  ],
  "content" : [
    {
      "attachment" : {
        "contentType" : "application/fhir+xml",
        "language" : "da",
        "url" : "HCOM-8bc6cf81-47b0-4cdf-bb89-75311909d35b.xml",
        "title" : "HCOM-8bc6cf81-47b0-4cdf-bb89-75311909d35b.xml",
        "creation" : "2026-04-28T10:15:52+02:00"
      },
      "format" : {
        "system" : "http://medcomfhir.dk/ig/xdsdocuments/CodeSystem/MedComHCOFormatCodeCS",
        "code" : "urn:ad:dk:medcom:msg:hco-v1.2:full",
        "display" : "DK HomeCareObservation message v1.2"
      }
    }
  ],
  "context" : {
    "period" : {
      "start" : "2026-04-28T10:15:52+02:00"
    },
    "facilityType" : {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/554471000005108",
          "code" : "550621000005101",
          "display" : "hjemmesygeplejeenhed"
        }
      ]
    },
    "practiceSetting" : {
      "coding" : [
        {
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/554471000005108",
          "code" : "658161000005107",
          "display" : "hjemmesygepleje"
        }
      ]
    },
    "sourcePatientInfo" : {
      "reference" : "#769e04f2-6c09-45fe-8037-31ec1d59ce3b",
      "identifier" : {
        "system" : "urn:oid:1.2.208.176.1.2",
        "value" : "0602631234"
      }
    }
  }
}

```
