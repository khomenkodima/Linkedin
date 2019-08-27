# Backend Developer Test

> Please note that this is a fictional client and not a specific client requirement.
> The scenario is meant to serve as a basic technical test to help us gauge your level of experience using Magento.
> If you cannot complete the task then please present the code you wrote and then an explanation of how you would have completed any remaining tasks.

## Client Brief

We have been asked by a fictional client to create a custom extension for a Magento store, called `Linkedin`, within the `Redbox` namespace. The purpose of the module is to require customers to also provide a link to their Linkedin profile when creating a new account.

## Technical Requirements

- A new customer attribute is created called `linkedin_profile`.
- The new attribute should be included on the front end registration forms, including registration during checkout, and the admin forms (registration and checkout).
- The new attribute should also be editable in the customer form for admin users in the Magento back office interface and for customers in the 'My Account' section of Magento.
- Whether the field is invisible/optional/required in the forms should be configurable from the admin and enforced both client and server side.
- The entry should be validated for being a valid url and having a maximum length of 250 characters both client and server side.
- The attribute value should also be persisted when doing a guest checkout.
- The attribute should be included in the API customer related operations (e.g. list customer info, create customer, checkout).

## Constraints

- The module MUST use the correct namespace/vendor as described above.
- The module SHOULD preferably be implemented in the latest [Magento 2 Open Source](https://github.com/magento/magento2) edition.
- The module SHOULD be installable through composer and hosted in a private repository. We suggest using [Bitbucket](https://bitbucket.org/account/signup/) given it is free to use for private packages. Please do not add your solution to packagist.org, or any other publically available repository, satis or packagist instance, but rather give us access to the repository and keep it private.
- No skinning is required, however we do expect to receive theming assets (templates, layout, ..) applicable when using the Luma theme.
- MUST not use a third party module.
- MUST adhere to [MEQP Coding standards](https://github.com/magento/marketplace-eqp). Submissions that do _not_ adhere, will be ignored.
- We not _only_ expect the module to satisfy the requirements and work on a vanilla installation, but a clean solution which applies common Magento development patterns and architecture is what we look for.

Good luck!

##### Disclaimer
Candidates are entirely responsible for their own time and costs associated in completing the technical test, and Redbox Digital Limited are under no obligation to progress the interview process beyond this stage.
