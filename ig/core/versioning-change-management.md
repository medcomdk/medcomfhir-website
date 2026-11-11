# Versioning Change Management - DK MedCom Core v4.0.1

### Versioning and Change Management

#### Versioning of Medcom FHIR standards

MedComs FHIR standards follow the [semantic versioning, version 2.0](https://semver.org/), which is adjusted to the workflow in MedCom. Some documents, such as use cases or test protocols, will have an individual version and a release note, to keep track of the changes in the document. The IG will have one version that covers all the included artefacts. Versioning of the clinical guidelines, use cases, test material, and more will follow the major and minor version of the technical specifications in the IG, but may have a patch version that is different from the IG’s patch-version.

Semantic versioning includes three numbers, which are separated by a dot, e.g. 2.1.4. The numbers are called *major.minor.patch*,which represent different degrees of changes:

* MAJOR version changes when you make incompatible API changes
* MINOR version changed when you add functionality in a backwards compatible manner
* PATCH version changed when you make backwards compatible bug fixes

The major and minor versions are recorded in [Det Rådgivende Udvalg for Standarder og Arkitekturer (RUSA)](https://sundhedsdatastyrelsen.dk/digitale-loesninger/referencearkitektur-og-standarder/udvalg). RUSA is a Danish advisory committee for standards and architecture. RUSA is working to ensure coherence and interoperability in digital solutions in the healthcare field. If a document or an IG has an extra number eg. 2.1.4-a.1 it is a prerelease and therefore not ready for implementation. In this Standard Operating Procedure (SOP) 4.1 you can read more about the use of semantic versioning in MedCom and what it means for changes in the FHIR standards. [Click here to read SOP-4.1.](https://svn.medcom.dk/svn/qms/Offentlig/SOPer/)

##### Terminology versioning

The MedCom Terminology IG and its individual CodeSystems, ValueSets, and ConceptMaps have independent versions. The terminology-specific rules, including how changes affect standards that use the terminology, are maintained in [Terminology governance](https://medcomfhir.dk/ig/terminology).

#### Change requests and improvements

Stakeholders and vendors are alway welcome to submit requests for changes or improvements to the IG or other documentation.

* If the request concerns the IG, it is possible to: 
1. submit an issue to the relevant[MedCom GitHub repository](https://github.com/medcomdk)
1. write an email to[fhir@medcom.dk](mailto:fhir@medcom.dk)describing the request
 
* If the request concerns other documentation, please write an email to [fhir@medcom.dk](mailto:fhir@medcom.dk).

Based on an analysis of the severity of the request, MedCom decides if the changes should be implemented and thus change the version of the artefact or IG to reflect the changes.

#### Want to stay updated?

When a new version of the IG is released you can be notified by GitHub. As of June 2026 MedCom has automated the creation of release noticies (for FHIR), so you can trust that you will be notified.

> Please notice that you must have a GitHub account to be able to "watch" the repository. If you don't have a GitHub account, you can create one at [ GitHub](https://github.com/signup?ref_cta=Sign+up&ref_loc=header+logged+out&ref_page=%2F%3Corg-login%3E&source=header)

Here is how you do it:

1. Go to the[MedCom GitHub repository](https://github.com/medcomdk)
1. Choose the repository that you want to receive information about
1. Choose the “watch” button in the right upper corner and then 'Custom'.


1. Choose 'Releases'


#### Handling multiple versions

Vendors **SHOULD** be prepared to handle multiple versions of a MedCom FHIR standard. The version of the standard is not explicitly stated in a Bundle.

When receiving a MedCom FHIR Bundle, it **SHOULD** be validated against the rules and constraints defined in the associated Implementation guide of the same version. With breaking changes, MedCom will provide specific guidelines for the scenario.

