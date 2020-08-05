# Getting started

# HaitiPay API description

**The HaitiPay platform** is designed to support several types of transactions and payment applications. HaitiPay allows any phone to be used as for electronic transactions, such as bill payment, money transfers to others, point of sale purchases, etc. The HaitiPay platform offers the following features to users:
purchase goods and services at their favorite local stores. Unbanked merchants will be able to accept payments and formalize their business transactions. 
 
**HaitiPay electronic wallet:** Anyone with a mobile phone can easily and securely: store, send and spend money using the HaitiPay electronic wallet. The funds are placed in the wallet in different ways, by recharging in cash of the counter at agent locations, by wallet to wallet transfers, by disbursement of wages or by linking it to a bank account. The HaitiPay wallet can be used to pay bills, shop in stores on the web, or transfer money to other users.

> 💡 Follow instructions below to request access to this workspace and test the HaitiPay API.

---

## Request an invitation to Access the HaitiPay API 
 
 Please request an invitation to access the HaitiPay API
 by sending an email to [admin@haitipay.com](mailto:admin@haitipay.com)
 With your name and company information.
 
 Within 24 hrs you will receive a confirmation that will allow you to access the 
 HaitiPay workspace.
  

## We're Here to Help

It is important we understand the Business Models you want to implement.
Get in touch and let us know how we can help.

Contact support at [devsupport@haitipay.com](mailto:devsupport@haitipay.com)
to get help from our team.

#  Acceptor API Description

In the HaitiPay ecosystem, acceptors are defined as entities accepting electronic money. This can be either an agent receiving electronic money against cash in an Over The Counter (OTC) cash-in  transaction, or a merchant providing goods and services against electronic money from clients. This API exposes methods to search clients, accounts, to authorize and post various transactions such as: Cash-in, Cash-out, Payment, Paybill, or Reversal of transaction.

# Base URI

The API uses the following base URI:
``` https://sandbox.haitipay.com/api/acceptor/v1 ```


# Authentication

## OAuth2
### Pre-requisites
To access the HaitiPay Acceptor API you must have a registered acceptor account on the HaitiPay platform. An API key for this acceptor must be created for you by HaitiPay Administration.

### Obtaining an Access Token
In order to obtain an Access Token, you must `POST`to the URL https://sandbox.haitipay.com/api/acceptor/v1/oauth2/ token using a `Content-type: application/json` header and a JSON body containing the following items:

|                |                         |                        |
|----------------|-------------------------------|-----------------------------|
|grant_type|string|MUST be `client_credentials`          |
|client_id         |string            |the `API key identifier`            |
|client_secret        |string|The `API key secret`|

**Request body example**

```json
{ 
"grant_type":"client_credentials", 
"client_id":"eza9eza21eaz951ea8f2ffs9fgdfsdd3", 
"client_secret":"eb5d1477-0dab-4b36-bc3e-9da6d6cc25ba"
}
```

Calling the URL as described above will yield a response similar to this (actual token cut off with `[...]` for brevity):

```json
{
"token_type": "Bearer",
"expires_in":59940,
"access_token":"eyJ0eXAiOiJKV1Qi0MzI5Oi0MzI5ODDNiMzJj[...]"
}
```

### Now that you have an Access Token
The thus obtained access token must be provided in the HTTP request header `Authorization` for each **API call** prefixed by the word `Bearer` (with the trailing space):

`Authorization: Bearer your_api_token`

### Access token lifetime
The access token has the **same lifetime as a user's session**, with the significant difference that it's lifetime is not extended upon each API action.

Therefore, the access token will expire after it's predefined lifetime has expired, resulting in a HTTP 401 Unauthorized response with the message Access token is invalid.

It is the API consumer's responsibility to detect such response, to obtain a new access token using the process described above, and optionally to issue the failed request anew.

|  **Security Scheme Type** |  **OAuth2**  |   
|---------------------------|-------------------------------------|
|  |**Token URL: /oauth2/token** |                                     
|  |**Refresh URL: /oauth2/refresh** |
|  | **Scopes:**  |                                                      
|  | `clients_view` - View clients information |                                                    
|  | `accounts_view` -  View acceptor accounts information   |                                                                                     
|  | `client_accounts_view` - View client accounts information |                                            
|  | `cashin` - Make cashin transaction |                                 
|  | `cashout`-  Make cashout transaction |                                               
|  | `bill_payment`-  Make cashout transaction|     
|  | `authentication_pincode_acceptor`-  Authenticate acceptor with it's pincode|
|  | `authentication_pincode_client` -  Authenticate client with it's pincode|                                                                                     
|  | `authentication_pincode_client_ivr` - Authenticate client with it's pincode through IVR |                                            
|  | `authentication_otp_client` - Authenticate client with a one time password|                                 
|  | `authentication_nsdt`-  Authenticate client with NSDT |                      
|  | `authentication_qr_code`- Authenticate client with QR Code|                    
|  | `authentication_cancel -Cancel an ongoing transaction|
|  | `authentication_nsdt`-  Authenticate client with NSDT |                       
|  | `authentication_qr_code`- Authenticate client with QR Code|                    
|  | `authentication_cancel` -Cancel an ongoing transaction|
|  | `authentication_transaction_code` - Generate a transaction code|






# A MOBILE-CENTRIC BANKING PLATFORM

### THE MOBILE
> HaitiPay uses an omni-channel platform, built to be fundamentally inclusive, while remaining `independent from telecom` operator channels.

End-users can activate their wallets/accounts with any phone, even with a feature phone that only handles audio, IVR, SMS and USSD. They can also use the HaitiPay mobile wallet app (IOS or Android), as well as a responsive web portal.

HaitiPay agents and merchants can use a wide range of devices from an entry level Android smartphone to Mobiwire and Ingenico terminals.

HaitiPay uses enablers to integrate and manage channels supplied by third parties.


### COMPANION CARD
> A `companion card` can be issued for the HaitiPay end-user, linked to his wallet/account. This allows the end-user to pay in MasterCard and VISA networks.



#### **DIGITAL FINANCIAL SERVICES**

**The HaitiPay platform** is designed to support several types of transactions and payment applications. HaitiPay allows any phone to be used as for electronic transactions, such as bill payment, money transfers to others, point of sale purchases. Here is a list of Digital Financial Services that can be delivered with the HaitiPay Platform: 

| |    |
| -------------------------- | ------------------------------------ |
|  ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168453742_tel_wallet.png) universalMobilephone               | **WALLET/ACCOUNT** : The end-user’s mobile phone number is his wallet/account number.  The wallet can be used with a feature phone, using IVR or USSD or with the smartphone app Haiwhich can be downloaded onto any Android or IOS device. The end-user then has easy access to his balance and transaction history. The wallet/account is mutli-currency. To create a wallet/account, clients are onboarded by an agent, with KYC tools.|
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168474365_Cash-in_Cash_out.png)   | **OTC CASH-IN & CASH-OUT** : The end-user can visit an agent, representing the bank in the field, to securely perform a cash-in or a cash-out, crediting or debiting his wallet/account. |
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168483633_Bill_Voucher.png)       | **BILL PAYMENT/VOUCHERS** : The end-user can pay his bills securely and conveniently on his feature phone or mobile wallet app, or by paying with cash at a point of service. The HaitiPay platform connects to the partner’s billing back-office to verify reference numbers and authorize transactions. For this service it is possible to use IVR, app or USSD channels , as well as the responsive web portal. |
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168493639_airtime_topUp.png)      | **AIR TIME TOP-UP** : The end-user can top-up his airtime by using his feature phone, with IVR or USSD, or with his smartphone, through the web portal or with the HaitiPay mobile wallet. The end-user can also visit an agent to perform this service. |
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168502176_P2P_TP.png)             |**P2P TRANSFERS** : End-users can send money in many different ways, be it over the counter with an agent or directly from their feature phone or mobile wallet app. It is also possible to use IVR, USSD, app and web channels for transfers without the assistance of an agent. When receiving cash from another individual, the recipient can choose to leave it on his wallet/account.  |
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168511220_Savings_TP.png)         | **SAVINGS** : Real-time transactions are transforming the end-user’s behavior around saving. He can credit a savings account as soon as he receives money (salary, pension, transfer). This flexibility, with the balances of his different accounts, gives him the opportunity to organize and manage hhiser savings in a completely new way. |
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168533518_Loans_TP.png)           | **LOANS** : Real-time technology and wide scale mobile phone deployment will transform the loan distribution process. With new forms of scoring and risk management, end-users will be able to obtain loans directly on their phones in a fraction of the time classically required. HaitiPay will power microcredit and meso-finance loans. |
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168541363_Salary+BulkP2P_TP.png)  | **SALARIES & PENSIONS (BULK2P)** : End-users can receive their salaries directly on their wallet/account. Companies can partner with HaitiPay to send payroll to their employees. SMS, USSD and the mobile wallet app are used for this service.|
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168557005_Merchant_TP.png)        | **MERCHANT PAYMENTS** : End-users can securely and conveniently pay in stores with their phones using their wallets/accounts. Any cell phone can be used, no matter the telecom operator or type of phone. Merchants can partner with the HaitiPay HaitiPay to accept HaitiPay payments in their stores, offering their customers a convenient contactless payment experience that is extremely secure and user-friendly. The merchant downloads the Merchant app from Google Play or from the App Store, onto a POS terminal or Android device. NSDT™is used for securing transactions at the point of sale.   |
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168567191_ePAYMENT_TP.png)        | **E-PAYMENTS** : End-users can pay online with their wallets/accounts. At checkout on the e-commerce website, the end- user is redirected to the HaitiPay online payment system. E-commerce companies can partner with HaitiPay to offer a secure and simple payment experience to their customers. HaitiPay includes a Woocommerce payment module that allows any e-commerce website powered by Woocommerce to accept payments online by incorporating the HaitiPay payment solution into its website. This service is only available in countries with  HaitiPay HaitiPay.   |
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168575287_Subsidies_TP.png)       | **SUBSIDIES** : The HaitiPay  can partner with non-governmental organizations to distribute subsidies digitally. The recipients of the subsidies are notified and can then visit a network of dedicated merchants in order to buy the subsidized goods. The administrator of the service decides what percentage, if any, the beneficiary of the service must personally pay. During the transaction in the store, the merchant is paid in real-time for the full cost of the product, directly on his HaitiPay account. HaitiPay  partners with non-governmental organizations and merchants in order to set up the service. |
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168584543_Cash2Good_TP.png)       | **CASH2GOOD** : HaitiPay’s Cash2Good enables P2P transfers that can be used in a dedicated network of stores. An end-user receiving Cash2Good will be able to spend the money at a specific network of merchants, chosen by the sender. |
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168592814_Cash_Collection_TP.png) | **CASH COLLECTION** : The network of agents set up by HaitiPay can be used for cash collection by third parties. For example, a loan recipient of a local microfinance institution can visit a point of service to perform weekly loan repayments. This is done over the counter.   |
| ![](https://paper-attachments.dropbox.com/s_49ED6FB24CD8D267294A2C87BEAA57320D554EDC44C2CF475C7395FBC14CA423_1596168600303_ATM_WithDrawal_TP.png)  | **ATM WITHDRAWAL** : End-users can withdraw cash from their wallets/accounts at an ATM. HaitiPay’s APIs enable simple integration with existing ATMs. For smartphones with the HaitiPay app or from the dedicated web portal, a one-time passcode is generated, that is then immediately used to withdraw cash from the ATM. With a feature phone, USSD is used to generate the passcode. It is also possible to install a solution that works directly with NSDT™ on the ATMs.   |

# ECOSYSTEM DEFINITIONS

#### **API DESCRIPTION**

This  API allows third party platforms to request HaitiPay to execute transactions on 
behalf of a `Merchant` or an `Agent`.

A `Client` user  in HaitiPay has one Wallet account named 
`reserve account` and as many `dedicated account`  as he owns dedicated money at 
merchants or group of merchants.

This API offers the following features:
> - Credit or Debit a client's `reserve` or `dedicated` accounts. 
> - On Behalf of an Agent execute `Cash-In` and `Cash-Out`.
> - On Behalf of a Merchant `Credit` or `Debit` dedicated merchant or merchant group 
> account).
> - `Transfer Money` from a Sender to a ecipient. This transfer can be from `reserve account` to `reserve account` or from `dedicated account` to `dedicated account` or from `reserve account` to `dedicated account`.
> - `Change PIN` the client's 4 digits secret code.

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the HaitiPayAcceptorAPI library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=HaitiPay%20Acceptor%20API-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| oAuthClientId | OAuth 2 Client ID |
| oAuthClientSecret | OAuth 2 Client Secret |



API client can be initialized as following.

```php
$oAuthClientId = 'oAuthClientId'; // OAuth 2 Client ID
$oAuthClientSecret = 'oAuthClientSecret'; // OAuth 2 Client Secret

$client = new HaitiPayAcceptorAPILib\HaitiPayAcceptorAPIClient($oAuthClientId, $oAuthClientSecret);
```

You must authorize now authorize the client.

### Authorizing your client

This SDK uses *OAuth 2.0 authorization* to authorize the client.

The `authorize()` method will exchange the OAuth client credentials for an *access token*.
The access token is an object containing information for authorizing client requests.

 You must pass the *[scopes](#scopes)* for which you need permission to access.
```php
try {
    $client->auth()->authorize([OAuthScopeEnum::CLIENTS_VIEW, OAuthScopeEnum::ACCOUNTS_VIEW]);
} catch (HaitiPayAcceptorAPILib\Exceptions\OAuthProviderException $ex) {
    // handle exception
}
```

The client can now make authorized endpoint calls.


### Scopes

Scopes enable your application to only request access to the resources it needs while enabling users to control the amount of access they grant to your application. Available scopes are defined in the `HaitiPayAcceptorAPILib\Models\OAuthScopeEnum` enumeration.

| Scope Name | Description |
| --- | --- |
| `CLIENTS_VIEW` | View clients information |
| `ACCOUNTS_VIEW` | View acceptor accounts information |
| `CLIENT_ACCOUNTS_VIEW` | View client accounts information |
| `CASHIN` | Make cashin transaction |
| `CASHOUT` | Make cashout transaction |
| `BILL_PAYMENT` | Make bill payment transaction |
| `PAYMENT` | Make payment transaction |
| `REVERSAL` | Make reversal transaction |
| `AUTHENTICATION_PINCODE_ACCEPTOR` | Authenticate acceptor with it's pincode |
| `AUTHENTICATION_PINCODE_CLIENT` | Authenticate client with it's pincode |
| `AUTHENTICATION_PINCODE_CLIENT_IVR` | Authenticate client with it's pincode through IVR |
| `AUTHENTICATION_OTP_CLIENT` | Authenticate client with a one time password |
| `AUTHENTICATION_NSDT` | Authenticate client with NSDT |
| `AUTHENTICATION_QR_CODE` | Authenticate client with QR Code |
| `AUTHENTICATION_CANCEL` | Cancel an ongoing transaction |
| `AUTHENTICATION_TRANSACTION_CODE` | Generate a transaction code |

### Storing an access token for reuse

It is recommended that you store the access token for reuse.

You can store the access token in the `$_SESSION` global:

```php
// store token
$_SESSION['access_token'] = HaitiPayAcceptorAPILib\Configuration::$oAuthToken;
```

### Creating a client from a stored token

To authorize a client from a stored access token, just set the access token in `Configuration` along with the other configuration parameters before creating the client:

```php
// load token later...
HaitiPayAcceptorAPILib\Configuration::$oAuthToken = $_SESSION['access_token'];

// Set other configuration, then instantiate client
$client = new HaitiPayAcceptorAPILib\HaitiPayAcceptorAPIClient();
```

### Complete example

```php
<?php
require_once __DIR__.'/vendor/autoload.php';

use HaitiPayAcceptorAPILib\Models\OAuthScopeEnum;

session_start();

// Client configuration
$oAuthClientId = 'oAuthClientId';
$oAuthClientSecret = 'oAuthClientSecret';

$client = new HaitiPayAcceptorAPILib\HaitiPayAcceptorAPIClient($oAuthClientId, $oAuthClientSecret);

// try to restore access token from session
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    HaitiPayAcceptorAPILib\Configuration::$oAuthToken = $_SESSION['access_token'];
} else {
    try {
        // obtain a new access token
        $token = $client->auth()->authorize([OAuthScopeEnum::CLIENTS_VIEW, OAuthScopeEnum::ACCOUNTS_VIEW]);
        $_SESSION['access_token'] = $token;
    } catch (HaitiPayAcceptorAPILib\Exceptions\OAuthProviderException $ex) {
        // handle exception
        die();
    }
}

// the client is now authorized; you can use $client to make endpoint calls
```



# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [ClientsController](#clients_controller)
* [AccountsController](#accounts_controller)
* [CashinController](#cashin_controller)
* [CashoutController](#cashout_controller)
* [PaymentController](#payment_controller)
* [BillPaymentController](#bill_payment_controller)
* [ReversalController](#reversal_controller)
* [AuthenticationController](#authentication_controller)

## <a name="clients_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ClientsController") ClientsController

### Get singleton instance

The singleton instance of the ``` ClientsController ``` class can be accessed from the API Client.

```php
$clients = $client->getClients();
```

### <a name="search_clients"></a>![Method: ](https://apidocs.io/img/method.png ".ClientsController.searchClients") searchClients

> Search for a client


```php
function searchClients(
        $phone = null,
        $idNumber = null,
        $externalId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| phone |  ``` Optional ```  | the client mobile phone number |
| idNumber |  ``` Optional ```  | the client identity number |
| externalId |  ``` Optional ```  | the client external identifier |



#### Example Usage

```php
$phone = '50937027447';
$idNumber = 'idNumber';
$externalId = 'EXT123';

$result = $clients->searchClients($phone, $idNumber, $externalId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



[Back to List of Controllers](#list_of_controllers)

## <a name="accounts_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AccountsController") AccountsController

### Get singleton instance

The singleton instance of the ``` AccountsController ``` class can be accessed from the API Client.

```php
$accounts = $client->getAccounts();
```

### <a name="search_accounts"></a>![Method: ](https://apidocs.io/img/method.png ".AccountsController.searchAccounts") searchAccounts

> Search accounts


```php
function searchAccounts(
        $id = null,
        $iban = null,
        $status = null,
        $type = null,
        $offset = 0,
        $limit = 20,
        $sort = 'id')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Optional ```  | TODO: Add a parameter description |
| iban |  ``` Optional ```  | TODO: Add a parameter description |
| status |  ``` Optional ```  ``` Collection ```  | TODO: Add a parameter description |
| type |  ``` Optional ```  | TODO: Add a parameter description |
| offset |  ``` Optional ```  ``` DefaultValue ```  | Pagination page number |
| limit |  ``` Optional ```  ``` DefaultValue ```  | The number of items per page |
| sort |  ``` Optional ```  ``` DefaultValue ```  | Field to define the sort order. To indicate sorting direction, ascending (oldest first) fields may be prefixed with +. Descending (newer first) fields may be prefixed with - |



#### Example Usage

```php
$id = '1421';
$iban = 'iban';
$status = array(AccountStatus::OPENED);
$type = 'type';
$offset = 0;
$limit = 20;
$sort = 'id';

$result = $accounts->searchAccounts($id, $iban, $status, $type, $offset, $limit, $sort);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="search_client_accounts"></a>![Method: ](https://apidocs.io/img/method.png ".AccountsController.searchClientAccounts") searchClientAccounts

> Search client accounts


```php
function searchClientAccounts(
        $clientId,
        $id = null,
        $iban = null,
        $status = null,
        $type = null,
        $offset = 0,
        $limit = 20,
        $sort = 'id')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| clientId |  ``` Required ```  | TODO: Add a parameter description |
| id |  ``` Optional ```  | TODO: Add a parameter description |
| iban |  ``` Optional ```  | TODO: Add a parameter description |
| status |  ``` Optional ```  ``` Collection ```  | TODO: Add a parameter description |
| type |  ``` Optional ```  | TODO: Add a parameter description |
| offset |  ``` Optional ```  ``` DefaultValue ```  | Pagination page number |
| limit |  ``` Optional ```  ``` DefaultValue ```  | The number of items per page |
| sort |  ``` Optional ```  ``` DefaultValue ```  | Field to define the sort order. To indicate sorting direction, ascending (oldest first) fields may be prefixed with +. Descending (newer first) fields may be prefixed with - |



#### Example Usage

```php
$clientId = '1421';
$id = 'id';
$iban = 'iban';
$status = array(AccountStatus::OPENED);
$type = 'type';
$offset = 0;
$limit = 20;
$sort = 'id';

$result = $accounts->searchClientAccounts($clientId, $id, $iban, $status, $type, $offset, $limit, $sort);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



[Back to List of Controllers](#list_of_controllers)

## <a name="cashin_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CashinController") CashinController

### Get singleton instance

The singleton instance of the ``` CashinController ``` class can be accessed from the API Client.

```php
$cashin = $client->getCashin();
```

### <a name="create_cashin_preauth"></a>![Method: ](https://apidocs.io/img/method.png ".CashinController.createCashinPreauth") createCashinPreauth

> Cashin pre-authorization


```php
function createCashinPreauth($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new TransactionsCashinRequest();

$result = $cashin->createCashinPreauth($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="create_cashin_make"></a>![Method: ](https://apidocs.io/img/method.png ".CashinController.createCashinMake") createCashinMake

> Cashin transaction


```php
function createCashinMake($transactionToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';

$result = $cashin->createCashinMake($transactionToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



[Back to List of Controllers](#list_of_controllers)

## <a name="cashout_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CashoutController") CashoutController

### Get singleton instance

The singleton instance of the ``` CashoutController ``` class can be accessed from the API Client.

```php
$cashout = $client->getCashout();
```

### <a name="create_cashout_preauth"></a>![Method: ](https://apidocs.io/img/method.png ".CashoutController.createCashoutPreauth") createCashoutPreauth

> Cashout pre-authorization


```php
function createCashoutPreauth($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new TransactionsCashoutRequest();

$result = $cashout->createCashoutPreauth($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="create_cashout_make"></a>![Method: ](https://apidocs.io/img/method.png ".CashoutController.createCashoutMake") createCashoutMake

> Cashout transaction


```php
function createCashoutMake($transactionToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';

$result = $cashout->createCashoutMake($transactionToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



[Back to List of Controllers](#list_of_controllers)

## <a name="payment_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PaymentController") PaymentController

### Get singleton instance

The singleton instance of the ``` PaymentController ``` class can be accessed from the API Client.

```php
$payment = $client->getPayment();
```

### <a name="create_payment_preauth"></a>![Method: ](https://apidocs.io/img/method.png ".PaymentController.createPaymentPreauth") createPaymentPreauth

> Payment pre-authorization


```php
function createPaymentPreauth($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new TransactionsPaymentRequest();

$result = $payment->createPaymentPreauth($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="create_payment_make"></a>![Method: ](https://apidocs.io/img/method.png ".PaymentController.createPaymentMake") createPaymentMake

> Payment transaction


```php
function createPaymentMake($transactionToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';

$result = $payment->createPaymentMake($transactionToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



[Back to List of Controllers](#list_of_controllers)

## <a name="bill_payment_controller"></a>![Class: ](https://apidocs.io/img/class.png ".BillPaymentController") BillPaymentController

### Get singleton instance

The singleton instance of the ``` BillPaymentController ``` class can be accessed from the API Client.

```php
$billPayment = $client->getBillPayment();
```

### <a name="load_biller_tree"></a>![Method: ](https://apidocs.io/img/method.png ".BillPaymentController.loadBillerTree") loadBillerTree

> Bill issuers list


```php
function loadBillerTree($billItemId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| billItemId |  ``` Optional ```  | root item to use to get a subset of this tree |



#### Example Usage

```php
$billItemId = 'billItemId';

$result = $billPayment->loadBillerTree($billItemId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="create_init_paybill"></a>![Method: ](https://apidocs.io/img/method.png ".BillPaymentController.createInitPaybill") createInitPaybill

> 
> <details>
>   <summary>An example of paybill call flow (click to expand)</summary>
>   
>   ```js
>   function paybill(apiClient, billIssuerId, clientIdentifier) {
>       // initiate paybill transaction
>       let response = apiClient.post("/transactions/paybill", {billIssuerId: billIssuerId, clientIdentifier: clientIdentifier});
>       let transactionToken = response.body.transactionToken;
>       let userSubmittedValues = null;
>   
>       // making multiple preauth
>       while(true) {
>           response = apiClient.patch("/transactions/paybill/" + transactionToken, {inputs: userSubmittedValues});
>           if (response.code === 201) {
>               break;
>           }
>           userSubmittedValues = askUserInput(response.body.inputs);
>       }
>       
>       // making authentification
>       makeAuth(transactionToken)
>   
>       // making transaction
>       apiClient.post("/transactions/paybill/" + transactionToken);
>   }
>   
>   function askUserInput(inputs) {
>       // ui logic to ask user to fill inputs
>   }
>   
>   function makeAuth(transactionToken)
>   {
>       // logic to make authentication
>   }
>   ```
> 
> </details>
> 


```php
function createInitPaybill($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = array('key' => 'value');

$result = $billPayment->createInitPaybill($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="update_submit_paybill_info"></a>![Method: ](https://apidocs.io/img/method.png ".BillPaymentController.updateSubmitPaybillInfo") updateSubmitPaybillInfo

> Paybill pre-authorization


```php
function updateSubmitPaybillInfo(
        $transactionToken,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';
$body = new TransactionsPaybillRequest();

$result = $billPayment->updateSubmitPaybillInfo($transactionToken, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="create_paybill"></a>![Method: ](https://apidocs.io/img/method.png ".BillPaymentController.createPaybill") createPaybill

> Paybill transaction


```php
function createPaybill($transactionToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';

$result = $billPayment->createPaybill($transactionToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



[Back to List of Controllers](#list_of_controllers)

## <a name="reversal_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ReversalController") ReversalController

### Get singleton instance

The singleton instance of the ``` ReversalController ``` class can be accessed from the API Client.

```php
$reversal = $client->getReversal();
```

### <a name="create_reversal_preauth"></a>![Method: ](https://apidocs.io/img/method.png ".ReversalController.createReversalPreauth") createReversalPreauth

> Reversal pre-authorization


```php
function createReversalPreauth($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new TransactionsReversalRequest();

$result = $reversal->createReversalPreauth($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="create_reversal_make"></a>![Method: ](https://apidocs.io/img/method.png ".ReversalController.createReversalMake") createReversalMake

> Reversal transaction


```php
function createReversalMake($transactionToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';

$result = $reversal->createReversalMake($transactionToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



[Back to List of Controllers](#list_of_controllers)

## <a name="authentication_controller"></a>![Class: ](https://apidocs.io/img/class.png ".AuthenticationController") AuthenticationController

### Get singleton instance

The singleton instance of the ``` AuthenticationController ``` class can be accessed from the API Client.

```php
$authentication = $client->getAuthentication();
```

### <a name="update_verify_acceptor_pincode"></a>![Method: ](https://apidocs.io/img/method.png ".AuthenticationController.updateVerifyAcceptorPincode") updateVerifyAcceptorPincode

> Should be called when requested authentication mode is `PINCODE_ACCEPTOR`


```php
function updateVerifyAcceptorPincode(
        $transactionToken,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';
$body = new AuthenticationsPincodeAcceptorVerifyRequest();

$result = $authentication->updateVerifyAcceptorPincode($transactionToken, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="update_verify_client_pincode"></a>![Method: ](https://apidocs.io/img/method.png ".AuthenticationController.updateVerifyClientPincode") updateVerifyClientPincode

> Should be called when requested authentication mode is `PINCODE_CLIENT`


```php
function updateVerifyClientPincode(
        $transactionToken,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';
$body = new AuthenticationsPincodeClientVerifyRequest();

$result = $authentication->updateVerifyClientPincode($transactionToken, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="update_verify_pincode_client_ivr"></a>![Method: ](https://apidocs.io/img/method.png ".AuthenticationController.updateVerifyPincodeClientIVR") updateVerifyPincodeClientIVR

> Should be called when requested authentication mode is `PINCODE_CLIENT_IVR`.
> 
> This endpoint uses [Server Sent Events](#section/Server-Sent-Events)
> 


```php
function updateVerifyPincodeClientIVR($transactionToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';

$result = $authentication->updateVerifyPincodeClientIVR($transactionToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="update_send_client_otp"></a>![Method: ](https://apidocs.io/img/method.png ".AuthenticationController.updateSendClientOTP") updateSendClientOTP

> Should be called when requested authentication mode is `OTP_CLIENT`


```php
function updateSendClientOTP($transactionToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';

$authentication->updateSendClientOTP($transactionToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="update_verify_client_otp"></a>![Method: ](https://apidocs.io/img/method.png ".AuthenticationController.updateVerifyClientOTP") updateVerifyClientOTP

> Should be called when requested authentication mode is `OTP_CLIENT`, after that OTP was sent


```php
function updateVerifyClientOTP(
        $transactionToken,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';
$body = new AuthenticationsOtpClientVerifyRequest();

$result = $authentication->updateVerifyClientOTP($transactionToken, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="update_verify_nsdt"></a>![Method: ](https://apidocs.io/img/method.png ".AuthenticationController.updateVerifyNSDT") updateVerifyNSDT

> Should be called when requested authentication mode is `NSDT_CLIENT`.
> 
> This endpoint uses [Server Sent Events](#section/Server-Sent-Events)
> 
> When event call status is `CONNECTED`, the API Client should start playing NSDT token.
> 
> When event call status is in `SUCCESS`, `HANG_UP`, `TIMEOUT`, the API Client should stop playing NSDT token.
> 


```php
function updateVerifyNSDT($transactionToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';

$result = $authentication->updateVerifyNSDT($transactionToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="update_verify_qr_code"></a>![Method: ](https://apidocs.io/img/method.png ".AuthenticationController.updateVerifyQrCode") updateVerifyQrCode

> Should be called when requested authentication mode is `QR_CODE_CLIENT`.
> 
> This endpoint uses [Server Sent Events](#section/Server-Sent-Events)
> 


```php
function updateVerifyQrCode($transactionToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';

$result = $authentication->updateVerifyQrCode($transactionToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



### <a name="delete_cancel_transaction"></a>![Method: ](https://apidocs.io/img/method.png ".AuthenticationController.deleteCancelTransaction") deleteCancelTransaction

> Can cancel an ongoing transaction


```php
function deleteCancelTransaction($transactionToken)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionToken |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionToken = 'transactionToken';

$authentication->deleteCancelTransaction($transactionToken);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 0 | Request could not be processed |



[Back to List of Controllers](#list_of_controllers)



