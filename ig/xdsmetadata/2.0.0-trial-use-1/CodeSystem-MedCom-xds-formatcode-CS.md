# DK XDS FormatCode - Danish profile of the IHE XDS Metadata Standard v2.0.0-trial-use-1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DK XDS FormatCode**

## CodeSystem: DK XDS FormatCode 

| | |
| :--- | :--- |
| *Official URL*:http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-formatcode-CS | *Version*:1.0.0 |
| Active as of 2026-01-15 | *Computable Name*:MedCom_XDS_FormatCode_CS |
| *Other Identifiers:*1.2.208.184.100.10 | |

 
CodeSystem for FormatCode 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MedCom_XDS_FormatCode](ValueSet-MedCom-xds-formatcode-VS.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MedCom-xds-formatcode-CS",
  "url" : "http://medcomfhir.dk/ig/xdsmetadata/CodeSystem/MedCom-xds-formatcode-CS",
  "identifier" : [
    {
      "value" : "1.2.208.184.100.10"
    }
  ],
  "version" : "1.0.0",
  "name" : "MedCom_XDS_FormatCode_CS",
  "title" : "DK XDS FormatCode",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-15",
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
  "description" : "CodeSystem for FormatCode",
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
  "content" : "complete",
  "count" : 36,
  "property" : [
    {
      "code" : "deprecationDate",
      "uri" : "http://hl7.org/fhir/concept-properties#deprecationDate",
      "description" : "The date from which the concept is considered deprecated.",
      "type" : "dateTime"
    }
  ],
  "concept" : [
    {
      "code" : "urn:ad:dk:medcom:apd-v2.0.1:full",
      "display" : "DK APD schema"
    },
    {
      "code" : "urn:ad:dk:medcom:appointmentsummary:full",
      "display" : "DK Appointment Summary Document schema"
    },
    {
      "code" : "urn:ad:dk:medcom:cmr-v1.0:full",
      "display" : "DK CMR schema"
    },
    {
      "code" : "urn:ad:dk:medcom:cpd-v1.0.1:full",
      "display" : "DK CPD schema"
    },
    {
      "code" : "urn:ad:dk:medcom:sds:cpd-v1.0.1:maternity",
      "display" : "DK CPD schema for maternity",
      "property" : [
        {
          "code" : "deprecationDate",
          "valueDateTime" : "2023-12-31"
        }
      ]
    },
    {
      "code" : "urn:ad:dk:medcom:labreports:svareksponeringsservice",
      "display" : "Laboratoriesvar (samling af svar)"
    },
    {
      "code" : "urn:ad:dk:medcom:pdc-v2.0:full",
      "display" : "DK PDC schema"
    },
    {
      "code" : "urn:ad:dk:medcom:phmr-v1.3:full",
      "display" : "DK PHMR schema",
      "property" : [
        {
          "code" : "deprecationDate",
          "valueDateTime" : "2025-05-13"
        }
      ]
    },
    {
      "code" : "urn:ad:dk:medcom:prvs-v1.0:full",
      "display" : "DK PRVS schema"
    },
    {
      "code" : "urn:ad:dk:medcom:qfdd-v1.1:full",
      "display" : "DK QFDD schema"
    },
    {
      "code" : "urn:ad:dk:medcom:qfdd-v1.2:full",
      "display" : "DK QFDD schema"
    },
    {
      "code" : "urn:ad:dk:medcom:qrd-v1.1:full",
      "display" : "DK QRD schema"
    },
    {
      "code" : "urn:ad:dk:medcom:qrd-v1.2:full",
      "display" : "DK QRD schema"
    },
    {
      "code" : "urn:ad:dk:medcom:qrd-v1.3:full",
      "display" : "DK QRD schema"
    },
    {
      "code" : "urn:ad:dk:medcom:pdc-v3.0:full",
      "display" : "DK PDC schema"
    },
    {
      "code" : "urn:ad:dk:medcom:cpd-v2.0:full",
      "display" : "DK CPD schema"
    },
    {
      "code" : "urn:ad:dk:medcom:phad-v1.0:full",
      "display" : "DK PHAD schema"
    },
    {
      "code" : "urn:ad:dk:medcom:plr-v1.0:full",
      "display" : "DK PLR schema"
    },
    {
      "code" : "urn:ad:dk:medcom:nauf-v500:full",
      "display" : "Noah Audiogram format 500"
    },
    {
      "code" : "urn:ad:dk:medcom:nauf-v502:full",
      "display" : "Noah Audiogram format 502"
    },
    {
      "code" : "urn:ad:dk:medcom:nimf-v500:full",
      "display" : "Noah Impedance format 500"
    },
    {
      "code" : "urn:ad:dk:medcom:nadf-v501:full",
      "display" : "Noah Admittance format 501"
    },
    {
      "code" : "urn:ad:dk:medcom:nhisf-v500:full",
      "display" : "Noah Hearing Instrument Selection format 500"
    },
    {
      "code" : "urn:ad:dk:medcom:prf-v1.0:full",
      "display" : "DK PRF schema",
      "property" : [
        {
          "code" : "deprecationDate",
          "valueDateTime" : "2025-12-01"
        }
      ]
    },
    {
      "code" : "urn:ad:dk:medcom:pscr-v1.0:full",
      "display" : "DK PSCR schema",
      "property" : [
        {
          "code" : "deprecationDate",
          "valueDateTime" : "2025-12-01"
        }
      ]
    },
    {
      "code" : "urn:ad:dk:medcom:pmr-v1.0:full",
      "display" : "DK PMR schema",
      "property" : [
        {
          "code" : "deprecationDate",
          "valueDateTime" : "2025-12-01"
        }
      ]
    },
    {
      "code" : "urn:ad:dk:medcom:prf-v2.0:full",
      "display" : "DK PRF schema",
      "property" : [
        {
          "code" : "deprecationDate",
          "valueDateTime" : "2025-12-01"
        }
      ]
    },
    {
      "code" : "urn:ad:dk:medcom:pscr-v2.0:full",
      "display" : "DK PSCR schema"
    },
    {
      "code" : "urn:ad:dk:medcom:pmr-v2.0:full",
      "display" : "DK PMR schema"
    },
    {
      "code" : "urn:ad:dk:medcom:phmr-v2.1:full",
      "display" : "DK PHMR schema"
    },
    {
      "code" : "urn:ad:dk:medcom:prf-v3.0:full",
      "display" : "DK PRF schema"
    },
    {
      "code" : "urn:ad:dk:medcom:phn-v1.0:full",
      "display" : "DK Patient's Home Note"
    },
    {
      "code" : "urn:ad:dk:medcom:ekg-v1.0:full",
      "display" : "DK EKG schema"
    },
    {
      "code" : "urn:ad:dk:medcom:hcom-v1.1:full",
      "display" : "DK HomeCareObservation message v1.1"
    },
    {
      "code" : "urn:ad:dk:medcom:hcom-v1.2:full",
      "display" : "DK HomeCareObservation message v1.2"
    },
    {
      "code" : "urn:ad:dk:medcom:ecn-v1.0:full",
      "display" : "DK ECN schema"
    }
  ]
}

```
