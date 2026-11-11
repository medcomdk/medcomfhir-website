# Itb Getting Started - DK MedCom Core v4.0.1

### Interoperability Test Bed (ITB) - Getting Started

The test tool 'Interoperability Test Bed' (ITB), is used to perform tests of MedCom FHIR standards.

#### How to register

1. Go to[ITB Login](https://test.itb.medcom.dk/)
1. Check within your organization whether or not your organization has been created for this MedCom Community in ITB. If your organization has**already been registered**, please**contact your local admin**to make them create a user for you. Login with your credentials and skip the rest of these steps. If your organization has**not been registered**, you must**contact MedCom**at[fhir@medcom.dk](mailto:fhir@medcom.dk). MedCom will create an organisation and an associated organisation administration user, who can then create organisation users. In the email, please provide:**Organization name**,**system name**,**administrator name**, and**administrator e-mail**.

#### Create users

1. As administrator you can now create users for people in your organization that needs to test using the ITB. Create them under "My organization" found in the lefthand navigation menu, click "Users" and fill in the information.


#### Create system and add conformance statement

1. As adminstrator you can also create the system(s) that represents your software that is being tested in the ITB. Example: Let's say our organization is Microsoft, then we might have many systems such as Outlook, Word, PowerPoint etc.


1. In the lefthand navigation menu you can find "Conformance statements" which is where you will find the tests that your system are to conform to. Click "Create statements" and add the statement that your system should be conformant to.


1. Click "Create" and you can now perform test cases in the selected Conformance statement(s).

#### Perform a test

1. Select which conformance statement you want to test your system against.


1. Click "run" for the test case you want to perform.


1. You are now on the test execution page, where you can see what is expected of you, and which tests and/or validation the test engine will perform. Click "Start" to start the test, click "Minimize" to see the test execution overview, and click "View pending interaction" to continue the test.*Tip: Sometimes, detailed instructions for the test case can be found by clicking the information button (i).*


1. When testing that your system can generate a valid message or document, it will most often be required that you submit a file in the pop-up window. When testing FHIR, the file may be added in json or xml. Depending on the test case, there mig be some information or requirements before submitting, as in the picture below.


1. As part of the documentation that you must provide for the test cases, you are often asked to provide relevant screenshots from the user interface. It is possible to add either one image or alternatively a group of images as a ZIP file.
1. The test engine then performs the tests and validation, and the result can be seen on the test execution page. Click on each step to see the result.


1. If your test sessions are part of a pre-test, aka. a pre-test as part of your certification, please use the 'flag' feature, as seen below to send them to us at MedCom.

These flags gives MedCom an easy overview of exactly which test sessions it is that you want us to review. Notify us through email that you've submitted self-test using the flags and we will review it. Include your organisation name and test suite so we know which flags you are referring to.
1. To see the result for the entire conformance statement you can click on the "My conformance statement" on the left and you can see a general overview of your systems conformance to the test suite. You can also click on "My test session" on the left to see the result of the execution, as displayed below, as well as previous executions.


#### Need help?

Help to set up organization and system, getting through a test case or something similar? Please write to fhir@medcom.dk If you need help getting through a test case, it is very helpful if you send the link to the test execution you are struggling with, please click "Copy link" and send it to MedCom.

