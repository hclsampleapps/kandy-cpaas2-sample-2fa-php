# kandy-cpaas2-sample-2fa-php

This is an elementary login authentication use-case of two-factor authentication via SMS using PHP SDK.

## Installation

1. Copy `.env.example` and rename to `.env` and add the appropriate values. E.g.,
```
EMAIL=tonystark@domain.com
PASSWORD=domain@123
CLIENT_ID=abcde123-12a1-1a23-1234-123a12345a1a
CLIENT_SECRET=123abcde-a123-1234-abcd-ab12345c67d8
BASE_URL=baseurl.domain.com
PHONE_NUMBER=+16543219870
DESTINATION_EMAIL=test@domain.com
```
2. To install dependencies
```
composer install
```
3. Step into public folder
```
cd public
```
4. To start the server
```
php -S localhost:8888
```

ENV KEY           | Description
----------------- | -------------
CLIENT_ID         | Private project key
CLIENT_SECRET     | Private project secret
BASE_URL          | URL of the CPaaS server to use
PHONE_NUMBER      | Phone number that would receive the verification code
EMAIL             | Email used in the login screen of the application
PASSWORD          | Password to be entered against the EMAIL provided in the login screen 
DESTINATION_EMAIL | Email that would receive the verification code

## Usage

The application comprises of three simple pages, login, code verification, dashboard/portal

1. Open this application in the browser.
2. When login screen appears, enter the `Email` and `Password` as specified in the `.env` file. Click the `Login` button.
3. When verification page appears, choose out of 2 available options
   1. 2FA via SMS
      1. Enter the phone number that should be same that is present in the `.env` file as DESTINATION_NUMBER.
   2. 2FA via Email. 
      1. Enter the email address that should be same that is present in the `.env` file as DESTINATION_EMAIL.
4. Enter the verification-code received after entering the phone number. Click the `Verify` button.
5. Dashboard appears after validating the verification-code. In case of invalid credentials, an error `Code invalid or expired` gets prompted. Re-enter the verification-code.
6. You can logout from the Dashboard anytime. Login screen would appear again.
