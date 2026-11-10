# Test and Certification - DK MedCom Core v1.0.0-test

### Test and certification

Before using the implemented standard in a production environment to exchange patient data, it must be tested and certified by MedCom to ensure it fulfills the standard and business requirements. In addition to the usual [MedCom test setup](https://medcom.dk/standarder/test-og-certificering/) - with a pre- and live test - [Interoperability Test Bed (ITB)](https://test.itb.medcom.dk/) is used as a tool to validate FHIR messages and documents sent in different use cases.

The ITB is an infrastructure that allows for automated tests. MedCom will develope test cases for each standard, available in the ITB. These test scripts can be used both during implementation/development and as a part of the test and certification. [Click here to get started with ITB](itb-getting-started.md)

#### Test of FHIR Messages and Documents

Since MedCom's FHIR messages are sent over the VANS network, vendors implementing messaging standards must be able to include the message in a VANSenvelope before sending the message. Vendors implementing MedCom's FHIR document standards must be able to share documents in the relevant infrastructure, typically in the Danish national Document Sharing infrastructure (DDS). Vendors should expect to demonstrate this as a part of test and certification.

