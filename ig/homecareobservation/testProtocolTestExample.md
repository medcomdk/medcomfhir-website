# Test Protocol Test Example - MedCom HomeCareObservation v1.2.2

* [**Table of Contents**](toc.md)
* **Test Protocol Test Example**

## Test Protocol Test Example

The examples presented below are intended to be used in the test protocol for receiving a HomeCareObservation (HCO) message. Testprotocols can be found on the [GitHub pages for HomeCareObservation](https://medcomdk.github.io/dk_HomeCareObservations/#2-test-and-certification). All test examples are created by MedCom.

#### Test patient/citizens

The examples are based on the test patient:

* Name: Bruno Elmer
* CPR-nr.: 250947-9989

#### Test examples for receiving HomeCareObservation

| | |
| :--- | :--- |
| [Example1](./Bundle-ReceiveTestExample1.md) | Two observations without clinical or analysis comments and the requesting doctor's initials is known |
| [Example2](./Bundle-ReceiveTestExample2.md) | With a clinical comment and requesting doctor's initials are unknown. Two observations: One with an analysis comment + an NPU code and the other without an analysis comment and a result using the MedComObservation valueset. Both observations use a comparator ('<' or '>') |
| [Example3](./Bundle-ReceiveTestExample3.md) | E-CPR, no comments, requesting doctor's initials unknown |
| [Example4](./Bundle-ReceiveTestExample4.md) | Many observations, requesting doctor's initials are known |
| [Example5](./Bundle-ReceiveTestExample5.md) | Invalid example with a practitioner role that does not include a code and no value for a observation result |

