# Two Factor Authentication Starter App

This is an elementary  login authentication use case of two-factor authentication via SMS using PHP SDK.

Steps for Installation : 
1. Copy `.env.example` and rename to `.env` and add the appropriate values. 
Example :

		EMAIL=tonystark@domain.com
		PASSWORD=domain@123
		CLIENT_ID=abcde123-12a1-1a23-1234-123a12345a1a
		CLIENT_SECRET=123abcde-a123-1234-abcd-ab12345c67d8
		BASE_URL=baseurl.domain.com
		PHONE_NUMBER=+16543219870
		DESTINATION_EMAIL=test@domain.com

2. To install dependencies, run:
composer install

3. Step into public folder:
cd public

4. To start the server, run:
php -S localhost:8888

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
> + On opening the application in the browser, the login screen is presented. The user needs to enter the `Email` / `Password` that are specified in the `.env` file and click on the `Login` button.
> + Once the credentials are verified, the verification page is presented to user. Here the user has 2 options, either receive 2FA via SMS or via EMAIL. This phone number/email corresponds to the one entered in the `.env` file as DESTINATION_NUMBER/DESTINATION_EMAIL.
> + The user now needs to enter the verification code received in the mentioned phone number and click `Verify` button.
> + The application verifies the entered code. If the code validates, the user is redirected to the dashboard section; else the user will be promoted with an error alert `Code invalid or expired` and is required to re-enter the verification code.
> + As the user is authenticated, the dashboard opens up. The user can logout from the dashboard and login screen would be presented.