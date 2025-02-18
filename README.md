# Getting started

Pagarme API

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=PagarmeCoreApi-PHP)

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

The following section explains how to use the PagarmeCoreApi library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=PagarmeCoreApi-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=PagarmeCoreApi-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=PagarmeCoreApi-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=PagarmeCoreApi-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=PagarmeCoreApi-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=PagarmeCoreApi-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=PagarmeCoreApi-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=PagarmeCoreApi-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=PagarmeCoreApi-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=PagarmeCoreApi-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=PagarmeCoreApi-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=PagarmeCoreApi-PHP)

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
| basicAuthUserName | The username to use with basic authentication |
| basicAuthPassword | The password to use with basic authentication |



API client can be initialized as following.

```php
$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new PagarmeCoreApiLib\PagarmeCoreApiClient($basicAuthUserName, $basicAuthPassword);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [SubscriptionsController](#subscriptions_controller)
* [OrdersController](#orders_controller)
* [PlansController](#plans_controller)
* [InvoicesController](#invoices_controller)
* [CustomersController](#customers_controller)
* [ChargesController](#charges_controller)
* [RecipientsController](#recipients_controller)
* [TokensController](#tokens_controller)
* [TransactionsController](#transactions_controller)
* [TransfersController](#transfers_controller)

## <a name="subscriptions_controller"></a>![Class: ](https://apidocs.io/img/class.png ".SubscriptionsController") SubscriptionsController

### Get singleton instance

The singleton instance of the ``` SubscriptionsController ``` class can be accessed from the API Client.

```php
$subscriptions = $client->getSubscriptions();
```

### <a name="update_subscription_card"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.updateSubscriptionCard") updateSubscriptionCard

> Updates the credit card from a subscription


```php
function updateSubscriptionCard(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription id |
| body |  ``` Required ```  | Request for updating a card |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new UpdateSubscriptionCardRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->updateSubscriptionCard($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="delete_usage"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.deleteUsage") deleteUsage

> Deletes a usage


```php
function deleteUsage(
        $subscriptionId,
        $itemId,
        $usageId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | The subscription id |
| itemId |  ``` Required ```  | The subscription item id |
| usageId |  ``` Required ```  | The usage id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$itemId = 'item_id';
$usageId = 'usage_id';
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->deleteUsage($subscriptionId, $itemId, $usageId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_discount"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.createDiscount") createDiscount

> Creates a discount


```php
function createDiscount(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription id |
| body |  ``` Required ```  | Request for creating a discount |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new CreateDiscountRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->createDiscount($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_an_usage"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.createAnUsage") createAnUsage

> Create Usage


```php
function createAnUsage(
        $subscriptionId,
        $itemId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription id |
| itemId |  ``` Required ```  | Item id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$itemId = 'item_id';
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->createAnUsage($subscriptionId, $itemId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_usages"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.getUsages") getUsages

> Lists all usages from a subscription item


```php
function getUsages(
        $subscriptionId,
        $itemId,
        $page = null,
        $size = null,
        $code = null,
        $group = null,
        $usedSince = null,
        $usedUntil = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | The subscription id |
| itemId |  ``` Required ```  | The subscription item id |
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |
| code |  ``` Optional ```  | Identification code in the client system |
| group |  ``` Optional ```  | Identification group in the client system |
| usedSince |  ``` Optional ```  | TODO: Add a parameter description |
| usedUntil |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$itemId = 'item_id';
$page = 150;
$size = 150;
$code = 'code';
$group = 'group';
$usedSince = date("D M d, Y G:i");
$usedUntil = date("D M d, Y G:i");

$result = $subscriptions->getUsages($subscriptionId, $itemId, $page, $size, $code, $group, $usedSince, $usedUntil);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_current_cycle_status"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.updateCurrentCycleStatus") updateCurrentCycleStatus

> UpdateCurrentCycleStatus


```php
function updateCurrentCycleStatus(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription Id |
| body |  ``` Required ```  | Request for updating the end date of the subscription current status |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new UpdateCurrentCycleStatusRequest();
$idempotencyKey = 'idempotency-key';

$subscriptions->updateCurrentCycleStatus($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_subscription_payment_method"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.updateSubscriptionPaymentMethod") updateSubscriptionPaymentMethod

> Updates the payment method from a subscription


```php
function updateSubscriptionPaymentMethod(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription id |
| body |  ``` Required ```  | Request for updating the paymentmethod from a subscription |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new UpdateSubscriptionPaymentMethodRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->updateSubscriptionPaymentMethod($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="delete_discount"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.deleteDiscount") deleteDiscount

> Deletes a discount


```php
function deleteDiscount(
        $subscriptionId,
        $discountId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription id |
| discountId |  ``` Required ```  | Discount Id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$discountId = 'discount_id';
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->deleteDiscount($subscriptionId, $discountId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_subscription_items"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.getSubscriptionItems") getSubscriptionItems

> Get Subscription Items


```php
function getSubscriptionItems(
        $subscriptionId,
        $page = null,
        $size = null,
        $name = null,
        $code = null,
        $status = null,
        $description = null,
        $createdSince = null,
        $createdUntil = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | The subscription id |
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |
| name |  ``` Optional ```  | The item name |
| code |  ``` Optional ```  | Identification code in the client system |
| status |  ``` Optional ```  | The item statis |
| description |  ``` Optional ```  | The item description |
| createdSince |  ``` Optional ```  | Filter for item's creation date start range |
| createdUntil |  ``` Optional ```  | Filter for item's creation date end range |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$page = 150;
$size = 150;
$name = 'name';
$code = 'code';
$status = 'status';
$description = 'description';
$createdSince = 'created_since';
$createdUntil = 'created_until';

$result = $subscriptions->getSubscriptionItems($subscriptionId, $page, $size, $name, $code, $status, $description, $createdSince, $createdUntil);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_subscription_item"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.createSubscriptionItem") createSubscriptionItem

> Creates a new Subscription item


```php
function createSubscriptionItem(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription id |
| body |  ``` Required ```  | Request for creating a subscription item |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new CreateSubscriptionItemRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->createSubscriptionItem($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_subscription_item"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.getSubscriptionItem") getSubscriptionItem

> Get Subscription Item


```php
function getSubscriptionItem(
        $subscriptionId,
        $itemId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription Id |
| itemId |  ``` Required ```  | Item id |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$itemId = 'item_id';

$result = $subscriptions->getSubscriptionItem($subscriptionId, $itemId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_subscription_item"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.updateSubscriptionItem") updateSubscriptionItem

> Updates a subscription item


```php
function updateSubscriptionItem(
        $subscriptionId,
        $itemId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription Id |
| itemId |  ``` Required ```  | Item id |
| body |  ``` Required ```  | Request for updating a subscription item |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$itemId = 'item_id';
$body = new UpdateSubscriptionItemRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->updateSubscriptionItem($subscriptionId, $itemId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_subscriptions"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.getSubscriptions") getSubscriptions

> Gets all subscriptions


```php
function getSubscriptions(
        $page = null,
        $size = null,
        $code = null,
        $billingType = null,
        $customerId = null,
        $planId = null,
        $cardId = null,
        $status = null,
        $nextBillingSince = null,
        $nextBillingUntil = null,
        $createdSince = null,
        $createdUntil = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |
| code |  ``` Optional ```  | Filter for subscription's code |
| billingType |  ``` Optional ```  | Filter for subscription's billing type |
| customerId |  ``` Optional ```  | Filter for subscription's customer id |
| planId |  ``` Optional ```  | Filter for subscription's plan id |
| cardId |  ``` Optional ```  | Filter for subscription's card id |
| status |  ``` Optional ```  | Filter for subscription's status |
| nextBillingSince |  ``` Optional ```  | Filter for subscription's next billing date start range |
| nextBillingUntil |  ``` Optional ```  | Filter for subscription's next billing date end range |
| createdSince |  ``` Optional ```  | Filter for subscription's creation date start range |
| createdUntil |  ``` Optional ```  | Filter for subscriptions creation date end range |



#### Example Usage

```php
$page = 150;
$size = 150;
$code = 'code';
$billingType = 'billing_type';
$customerId = 'customer_id';
$planId = 'plan_id';
$cardId = 'card_id';
$status = 'status';
$nextBillingSince = date("D M d, Y G:i");
$nextBillingUntil = date("D M d, Y G:i");
$createdSince = date("D M d, Y G:i");
$createdUntil = date("D M d, Y G:i");

$result = $subscriptions->getSubscriptions($page, $size, $code, $billingType, $customerId, $planId, $cardId, $status, $nextBillingSince, $nextBillingUntil, $createdSince, $createdUntil);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_subscription"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.createSubscription") createSubscription

> Creates a new subscription


```php
function createSubscription(
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request for creating a subscription |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CreateSubscriptionRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->createSubscription($body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="cancel_subscription"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.cancelSubscription") cancelSubscription

> Cancels a subscription


```php
function cancelSubscription(
        $subscriptionId,
        $idempotencyKey = null,
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |
| body |  ``` Optional ```  | Request for cancelling a subscription |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$idempotencyKey = 'idempotency-key';
$body = new CreateCancelSubscriptionRequest();

$result = $subscriptions->cancelSubscription($subscriptionId, $idempotencyKey, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_subscription"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.getSubscription") getSubscription

> Gets a subscription


```php
function getSubscription($subscriptionId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription id |



#### Example Usage

```php
$subscriptionId = 'subscription_id';

$result = $subscriptions->getSubscription($subscriptionId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_increment"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.createIncrement") createIncrement

> Creates a increment


```php
function createIncrement(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription id |
| body |  ``` Required ```  | Request for creating a increment |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new CreateIncrementRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->createIncrement($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_discount_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.getDiscountById") getDiscountById

> GetDiscountById


```php
function getDiscountById(
        $subscriptionId,
        $discountId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | The subscription id |
| discountId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$discountId = 'discountId';

$result = $subscriptions->getDiscountById($subscriptionId, $discountId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_subscription_affiliation_id"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.updateSubscriptionAffiliationId") updateSubscriptionAffiliationId

> UpdateSubscriptionAffiliationId


```php
function updateSubscriptionAffiliationId(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | Request for updating a subscription affiliation id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new UpdateSubscriptionAffiliationIdRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->updateSubscriptionAffiliationId($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_subscription_metadata"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.updateSubscriptionMetadata") updateSubscriptionMetadata

> Updates the metadata from a subscription


```php
function updateSubscriptionMetadata(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | The subscription id |
| body |  ``` Required ```  | Request for updating the subscrption metadata |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new UpdateMetadataRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->updateSubscriptionMetadata($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="delete_increment"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.deleteIncrement") deleteIncrement

> Deletes a increment


```php
function deleteIncrement(
        $subscriptionId,
        $incrementId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription id |
| incrementId |  ``` Required ```  | Increment id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$incrementId = 'increment_id';
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->deleteIncrement($subscriptionId, $incrementId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_increment_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.getIncrementById") getIncrementById

> GetIncrementById


```php
function getIncrementById(
        $subscriptionId,
        $incrementId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | The subscription Id |
| incrementId |  ``` Required ```  | The increment Id |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$incrementId = 'increment_id';

$result = $subscriptions->getIncrementById($subscriptionId, $incrementId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_subscription_cycles"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.getSubscriptionCycles") getSubscriptionCycles

> GetSubscriptionCycles


```php
function getSubscriptionCycles(
        $subscriptionId,
        $page,
        $size)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription Id |
| page |  ``` Required ```  | Page number |
| size |  ``` Required ```  | Page size |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$page = 'page';
$size = 'size';

$result = $subscriptions->getSubscriptionCycles($subscriptionId, $page, $size);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="renew_subscription"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.renewSubscription") renewSubscription

> RenewSubscription


```php
function renewSubscription(
        $subscriptionId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | TODO: Add a parameter description |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->renewSubscription($subscriptionId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_discounts"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.getDiscounts") getDiscounts

> GetDiscounts


```php
function getDiscounts(
        $subscriptionId,
        $page,
        $size)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | The subscription id |
| page |  ``` Required ```  | Page number |
| size |  ``` Required ```  | Page size |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$page = 241;
$size = 241;

$result = $subscriptions->getDiscounts($subscriptionId, $page, $size);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_subscription_billing_date"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.updateSubscriptionBillingDate") updateSubscriptionBillingDate

> Updates the billing date from a subscription


```php
function updateSubscriptionBillingDate(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | The subscription id |
| body |  ``` Required ```  | Request for updating the subscription billing date |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new UpdateSubscriptionBillingDateRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->updateSubscriptionBillingDate($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="delete_subscription_item"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.deleteSubscriptionItem") deleteSubscriptionItem

> Deletes a subscription item


```php
function deleteSubscriptionItem(
        $subscriptionId,
        $subscriptionItemId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription id |
| subscriptionItemId |  ``` Required ```  | Subscription item id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$subscriptionItemId = 'subscription_item_id';
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->deleteSubscriptionItem($subscriptionId, $subscriptionItemId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_increments"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.getIncrements") getIncrements

> GetIncrements


```php
function getIncrements(
        $subscriptionId,
        $page = null,
        $size = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | The subscription id |
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$page = 241;
$size = 241;

$result = $subscriptions->getIncrements($subscriptionId, $page, $size);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_subscription_due_days"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.updateSubscriptionDueDays") updateSubscriptionDueDays

> Updates the boleto due days from a subscription


```php
function updateSubscriptionDueDays(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription Id |
| body |  ``` Required ```  | TODO: Add a parameter description |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new UpdateSubscriptionDueDaysRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->updateSubscriptionDueDays($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_subscription_start_at"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.updateSubscriptionStartAt") updateSubscriptionStartAt

> Updates the start at date from a subscription


```php
function updateSubscriptionStartAt(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | The subscription id |
| body |  ``` Required ```  | Request for updating the subscription start date |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new UpdateSubscriptionStartAtRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->updateSubscriptionStartAt($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_latest_period_end_at"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.updateLatestPeriodEndAt") updateLatestPeriodEndAt

> UpdateLatestPeriodEndAt


```php
function updateLatestPeriodEndAt(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | Request for updating the end date of the current signature cycle |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new UpdateCurrentCycleEndDateRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->updateLatestPeriodEndAt($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_subscription_minium_price"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.updateSubscriptionMiniumPrice") updateSubscriptionMiniumPrice

> Atualização do valor mínimo da assinatura


```php
function updateSubscriptionMiniumPrice(
        $subscriptionId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription Id |
| body |  ``` Required ```  | Request da requisição com o valor mínimo que será configurado |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$body = new UpdateSubscriptionMinimumPriceRequest();
$idempotencyKey = 'idempotency-key';

$result = $subscriptions->updateSubscriptionMiniumPrice($subscriptionId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_subscription_cycle_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.getSubscriptionCycleById") getSubscriptionCycleById

> GetSubscriptionCycleById


```php
function getSubscriptionCycleById(
        $subscriptionId,
        $cycleId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | The subscription id |
| cycleId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$cycleId = 'cycleId';

$result = $subscriptions->getSubscriptionCycleById($subscriptionId, $cycleId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_usage_report"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.getUsageReport") getUsageReport

> GetUsageReport


```php
function getUsageReport(
        $subscriptionId,
        $periodId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | The subscription Id |
| periodId |  ``` Required ```  | The period Id |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$periodId = 'period_id';

$result = $subscriptions->getUsageReport($subscriptionId, $periodId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_split_subscription"></a>![Method: ](https://apidocs.io/img/method.png ".SubscriptionsController.updateSplitSubscription") updateSplitSubscription

> UpdateSplitSubscription


```php
function updateSplitSubscription(
        $id,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Subscription's id |
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$body = new UpdateSubscriptionSplitRequest();

$result = $subscriptions->updateSplitSubscription($id, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



[Back to List of Controllers](#list_of_controllers)

## <a name="orders_controller"></a>![Class: ](https://apidocs.io/img/class.png ".OrdersController") OrdersController

### Get singleton instance

The singleton instance of the ``` OrdersController ``` class can be accessed from the API Client.

```php
$orders = $client->getOrders();
```

### <a name="get_orders"></a>![Method: ](https://apidocs.io/img/method.png ".OrdersController.getOrders") getOrders

> Gets all orders


```php
function getOrders(
        $page = null,
        $size = null,
        $code = null,
        $status = null,
        $createdSince = null,
        $createdUntil = null,
        $customerId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |
| code |  ``` Optional ```  | Filter for order's code |
| status |  ``` Optional ```  | Filter for order's status |
| createdSince |  ``` Optional ```  | Filter for order's creation date start range |
| createdUntil |  ``` Optional ```  | Filter for order's creation date end range |
| customerId |  ``` Optional ```  | Filter for order's customer id |



#### Example Usage

```php
$page = 241;
$size = 241;
$code = 'code';
$status = 'status';
$createdSince = date("D M d, Y G:i");
$createdUntil = date("D M d, Y G:i");
$customerId = 'customer_id';

$result = $orders->getOrders($page, $size, $code, $status, $createdSince, $createdUntil, $customerId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_order"></a>![Method: ](https://apidocs.io/img/method.png ".OrdersController.createOrder") createOrder

> Creates a new Order


```php
function createOrder(
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request for creating an order |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CreateOrderRequest();
$idempotencyKey = 'idempotency-key';

$result = $orders->createOrder($body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="delete_all_order_items"></a>![Method: ](https://apidocs.io/img/method.png ".OrdersController.deleteAllOrderItems") deleteAllOrderItems

> DeleteAllOrderItems


```php
function deleteAllOrderItems(
        $orderId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | Order Id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$orderId = 'orderId';
$idempotencyKey = 'idempotency-key';

$result = $orders->deleteAllOrderItems($orderId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_order_item"></a>![Method: ](https://apidocs.io/img/method.png ".OrdersController.createOrderItem") createOrderItem

> CreateOrderItem


```php
function createOrderItem(
        $orderId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | Order Id |
| body |  ``` Required ```  | Order Item Model |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$orderId = 'orderId';
$body = new CreateOrderItemRequest();
$idempotencyKey = 'idempotency-key';

$result = $orders->createOrderItem($orderId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_order_item"></a>![Method: ](https://apidocs.io/img/method.png ".OrdersController.updateOrderItem") updateOrderItem

> UpdateOrderItem


```php
function updateOrderItem(
        $orderId,
        $itemId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | Order Id |
| itemId |  ``` Required ```  | Item Id |
| body |  ``` Required ```  | Item Model |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$orderId = 'orderId';
$itemId = 'itemId';
$body = new UpdateOrderItemRequest();
$idempotencyKey = 'idempotency-key';

$result = $orders->updateOrderItem($orderId, $itemId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="delete_order_item"></a>![Method: ](https://apidocs.io/img/method.png ".OrdersController.deleteOrderItem") deleteOrderItem

> DeleteOrderItem


```php
function deleteOrderItem(
        $orderId,
        $itemId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | Order Id |
| itemId |  ``` Required ```  | Item Id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$orderId = 'orderId';
$itemId = 'itemId';
$idempotencyKey = 'idempotency-key';

$result = $orders->deleteOrderItem($orderId, $itemId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_order_item"></a>![Method: ](https://apidocs.io/img/method.png ".OrdersController.getOrderItem") getOrderItem

> GetOrderItem


```php
function getOrderItem(
        $orderId,
        $itemId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | Order Id |
| itemId |  ``` Required ```  | Item Id |



#### Example Usage

```php
$orderId = 'orderId';
$itemId = 'itemId';

$result = $orders->getOrderItem($orderId, $itemId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="close_order"></a>![Method: ](https://apidocs.io/img/method.png ".OrdersController.closeOrder") closeOrder

> CloseOrder


```php
function closeOrder(
        $id,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Order Id |
| body |  ``` Required ```  | Update Order Model |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$body = new UpdateOrderStatusRequest();
$idempotencyKey = 'idempotency-key';

$result = $orders->closeOrder($id, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_order_metadata"></a>![Method: ](https://apidocs.io/img/method.png ".OrdersController.updateOrderMetadata") updateOrderMetadata

> Updates the metadata from an order


```php
function updateOrderMetadata(
        $orderId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | The order id |
| body |  ``` Required ```  | Request for updating the order metadata |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$orderId = 'order_id';
$body = new UpdateMetadataRequest();
$idempotencyKey = 'idempotency-key';

$result = $orders->updateOrderMetadata($orderId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_order"></a>![Method: ](https://apidocs.io/img/method.png ".OrdersController.getOrder") getOrder

> Gets an order


```php
function getOrder($orderId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| orderId |  ``` Required ```  | Order id |



#### Example Usage

```php
$orderId = 'order_id';

$result = $orders->getOrder($orderId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



[Back to List of Controllers](#list_of_controllers)

## <a name="plans_controller"></a>![Class: ](https://apidocs.io/img/class.png ".PlansController") PlansController

### Get singleton instance

The singleton instance of the ``` PlansController ``` class can be accessed from the API Client.

```php
$plans = $client->getPlans();
```

### <a name="get_plan"></a>![Method: ](https://apidocs.io/img/method.png ".PlansController.getPlan") getPlan

> Gets a plan


```php
function getPlan($planId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| planId |  ``` Required ```  | Plan id |



#### Example Usage

```php
$planId = 'plan_id';

$result = $plans->getPlan($planId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_plan"></a>![Method: ](https://apidocs.io/img/method.png ".PlansController.updatePlan") updatePlan

> Updates a plan


```php
function updatePlan(
        $planId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| planId |  ``` Required ```  | Plan id |
| body |  ``` Required ```  | Request for updating a plan |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$planId = 'plan_id';
$body = new UpdatePlanRequest();
$idempotencyKey = 'idempotency-key';

$result = $plans->updatePlan($planId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="delete_plan"></a>![Method: ](https://apidocs.io/img/method.png ".PlansController.deletePlan") deletePlan

> Deletes a plan


```php
function deletePlan(
        $planId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| planId |  ``` Required ```  | Plan id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$planId = 'plan_id';
$idempotencyKey = 'idempotency-key';

$result = $plans->deletePlan($planId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_plan_metadata"></a>![Method: ](https://apidocs.io/img/method.png ".PlansController.updatePlanMetadata") updatePlanMetadata

> Updates the metadata from a plan


```php
function updatePlanMetadata(
        $planId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| planId |  ``` Required ```  | The plan id |
| body |  ``` Required ```  | Request for updating the plan metadata |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$planId = 'plan_id';
$body = new UpdateMetadataRequest();
$idempotencyKey = 'idempotency-key';

$result = $plans->updatePlanMetadata($planId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_plan_item"></a>![Method: ](https://apidocs.io/img/method.png ".PlansController.updatePlanItem") updatePlanItem

> Updates a plan item


```php
function updatePlanItem(
        $planId,
        $planItemId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| planId |  ``` Required ```  | Plan id |
| planItemId |  ``` Required ```  | Plan item id |
| body |  ``` Required ```  | Request for updating the plan item |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$planId = 'plan_id';
$planItemId = 'plan_item_id';
$body = new UpdatePlanItemRequest();
$idempotencyKey = 'idempotency-key';

$result = $plans->updatePlanItem($planId, $planItemId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_plan_item"></a>![Method: ](https://apidocs.io/img/method.png ".PlansController.getPlanItem") getPlanItem

> Gets a plan item


```php
function getPlanItem(
        $planId,
        $planItemId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| planId |  ``` Required ```  | Plan id |
| planItemId |  ``` Required ```  | Plan item id |



#### Example Usage

```php
$planId = 'plan_id';
$planItemId = 'plan_item_id';

$result = $plans->getPlanItem($planId, $planItemId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="delete_plan_item"></a>![Method: ](https://apidocs.io/img/method.png ".PlansController.deletePlanItem") deletePlanItem

> Removes an item from a plan


```php
function deletePlanItem(
        $planId,
        $planItemId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| planId |  ``` Required ```  | Plan id |
| planItemId |  ``` Required ```  | Plan item id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$planId = 'plan_id';
$planItemId = 'plan_item_id';
$idempotencyKey = 'idempotency-key';

$result = $plans->deletePlanItem($planId, $planItemId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_plan_item"></a>![Method: ](https://apidocs.io/img/method.png ".PlansController.createPlanItem") createPlanItem

> Adds a new item to a plan


```php
function createPlanItem(
        $planId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| planId |  ``` Required ```  | Plan id |
| body |  ``` Required ```  | Request for creating a plan item |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$planId = 'plan_id';
$body = new CreatePlanItemRequest();
$idempotencyKey = 'idempotency-key';

$result = $plans->createPlanItem($planId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_plan"></a>![Method: ](https://apidocs.io/img/method.png ".PlansController.createPlan") createPlan

> Creates a new plan


```php
function createPlan(
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request for creating a plan |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CreatePlanRequest();
$idempotencyKey = 'idempotency-key';

$result = $plans->createPlan($body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_plans"></a>![Method: ](https://apidocs.io/img/method.png ".PlansController.getPlans") getPlans

> Gets all plans


```php
function getPlans(
        $page = null,
        $size = null,
        $name = null,
        $status = null,
        $billingType = null,
        $createdSince = null,
        $createdUntil = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |
| name |  ``` Optional ```  | Filter for Plan's name |
| status |  ``` Optional ```  | Filter for Plan's status |
| billingType |  ``` Optional ```  | Filter for plan's billing type |
| createdSince |  ``` Optional ```  | Filter for plan's creation date start range |
| createdUntil |  ``` Optional ```  | Filter for plan's creation date end range |



#### Example Usage

```php
$page = 241;
$size = 241;
$name = 'name';
$status = 'status';
$billingType = 'billing_type';
$createdSince = date("D M d, Y G:i");
$createdUntil = date("D M d, Y G:i");

$result = $plans->getPlans($page, $size, $name, $status, $billingType, $createdSince, $createdUntil);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



[Back to List of Controllers](#list_of_controllers)

## <a name="invoices_controller"></a>![Class: ](https://apidocs.io/img/class.png ".InvoicesController") InvoicesController

### Get singleton instance

The singleton instance of the ``` InvoicesController ``` class can be accessed from the API Client.

```php
$invoices = $client->getInvoices();
```

### <a name="get_partial_invoice"></a>![Method: ](https://apidocs.io/img/method.png ".InvoicesController.getPartialInvoice") getPartialInvoice

> GetPartialInvoice


```php
function getPartialInvoice($subscriptionId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription Id |



#### Example Usage

```php
$subscriptionId = 'subscription_id';

$result = $invoices->getPartialInvoice($subscriptionId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="cancel_invoice"></a>![Method: ](https://apidocs.io/img/method.png ".InvoicesController.cancelInvoice") cancelInvoice

> Cancels an invoice


```php
function cancelInvoice(
        $invoiceId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| invoiceId |  ``` Required ```  | Invoice id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$invoiceId = 'invoice_id';
$idempotencyKey = 'idempotency-key';

$result = $invoices->cancelInvoice($invoiceId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_invoice"></a>![Method: ](https://apidocs.io/img/method.png ".InvoicesController.getInvoice") getInvoice

> Gets an invoice


```php
function getInvoice($invoiceId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| invoiceId |  ``` Required ```  | Invoice Id |



#### Example Usage

```php
$invoiceId = 'invoice_id';

$result = $invoices->getInvoice($invoiceId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_invoice"></a>![Method: ](https://apidocs.io/img/method.png ".InvoicesController.createInvoice") createInvoice

> Create an Invoice


```php
function createInvoice(
        $subscriptionId,
        $cycleId,
        $idempotencyKey = null,
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| subscriptionId |  ``` Required ```  | Subscription Id |
| cycleId |  ``` Required ```  | Cycle Id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |
| body |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$subscriptionId = 'subscription_id';
$cycleId = 'cycle_id';
$idempotencyKey = 'idempotency-key';
$body = new CreateInvoiceRequest();

$result = $invoices->createInvoice($subscriptionId, $cycleId, $idempotencyKey, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_invoice_metadata"></a>![Method: ](https://apidocs.io/img/method.png ".InvoicesController.updateInvoiceMetadata") updateInvoiceMetadata

> Updates the metadata from an invoice


```php
function updateInvoiceMetadata(
        $invoiceId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| invoiceId |  ``` Required ```  | The invoice id |
| body |  ``` Required ```  | Request for updating the invoice metadata |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$invoiceId = 'invoice_id';
$body = new UpdateMetadataRequest();
$idempotencyKey = 'idempotency-key';

$result = $invoices->updateInvoiceMetadata($invoiceId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_invoices"></a>![Method: ](https://apidocs.io/img/method.png ".InvoicesController.getInvoices") getInvoices

> Gets all invoices


```php
function getInvoices(
        $page = null,
        $size = null,
        $code = null,
        $customerId = null,
        $subscriptionId = null,
        $createdSince = null,
        $createdUntil = null,
        $status = null,
        $dueSince = null,
        $dueUntil = null,
        $customerDocument = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |
| code |  ``` Optional ```  | Filter for Invoice's code |
| customerId |  ``` Optional ```  | Filter for Invoice's customer id |
| subscriptionId |  ``` Optional ```  | Filter for Invoice's subscription id |
| createdSince |  ``` Optional ```  | Filter for Invoice's creation date start range |
| createdUntil |  ``` Optional ```  | Filter for Invoices creation date end range |
| status |  ``` Optional ```  | Filter for Invoice's status |
| dueSince |  ``` Optional ```  | Filter for Invoice's due date start range |
| dueUntil |  ``` Optional ```  | Filter for Invoice's due date end range |
| customerDocument |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$page = 241;
$size = 241;
$code = 'code';
$customerId = 'customer_id';
$subscriptionId = 'subscription_id';
$createdSince = date("D M d, Y G:i");
$createdUntil = date("D M d, Y G:i");
$status = 'status';
$dueSince = date("D M d, Y G:i");
$dueUntil = date("D M d, Y G:i");
$customerDocument = 'customer_document';

$result = $invoices->getInvoices($page, $size, $code, $customerId, $subscriptionId, $createdSince, $createdUntil, $status, $dueSince, $dueUntil, $customerDocument);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_invoice_status"></a>![Method: ](https://apidocs.io/img/method.png ".InvoicesController.updateInvoiceStatus") updateInvoiceStatus

> Updates the status from an invoice


```php
function updateInvoiceStatus(
        $invoiceId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| invoiceId |  ``` Required ```  | Invoice Id |
| body |  ``` Required ```  | Request for updating an invoice's status |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$invoiceId = 'invoice_id';
$body = new UpdateInvoiceStatusRequest();
$idempotencyKey = 'idempotency-key';

$result = $invoices->updateInvoiceStatus($invoiceId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



[Back to List of Controllers](#list_of_controllers)

## <a name="customers_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CustomersController") CustomersController

### Get singleton instance

The singleton instance of the ``` CustomersController ``` class can be accessed from the API Client.

```php
$customers = $client->getCustomers();
```

### <a name="update_card"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.updateCard") updateCard

> Updates a card


```php
function updateCard(
        $customerId,
        $cardId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer Id |
| cardId |  ``` Required ```  | Card id |
| body |  ``` Required ```  | Request for updating a card |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 'customer_id';
$cardId = 'card_id';
$body = new UpdateCardRequest();
$idempotencyKey = 'idempotency-key';

$result = $customers->updateCard($customerId, $cardId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="delete_card"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.deleteCard") deleteCard

> Delete a customer's card


```php
function deleteCard(
        $customerId,
        $cardId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer Id |
| cardId |  ``` Required ```  | Card Id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 'customer_id';
$cardId = 'card_id';
$idempotencyKey = 'idempotency-key';

$result = $customers->deleteCard($customerId, $cardId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_card"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.getCard") getCard

> Get a customer's card


```php
function getCard(
        $customerId,
        $cardId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer id |
| cardId |  ``` Required ```  | Card id |



#### Example Usage

```php
$customerId = 'customer_id';
$cardId = 'card_id';

$result = $customers->getCard($customerId, $cardId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_address"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.updateAddress") updateAddress

> Updates an address


```php
function updateAddress(
        $customerId,
        $addressId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer Id |
| addressId |  ``` Required ```  | Address Id |
| body |  ``` Required ```  | Request for updating an address |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 'customer_id';
$addressId = 'address_id';
$body = new UpdateAddressRequest();
$idempotencyKey = 'idempotency-key';

$result = $customers->updateAddress($customerId, $addressId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_address"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.getAddress") getAddress

> Get a customer's address


```php
function getAddress(
        $customerId,
        $addressId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer id |
| addressId |  ``` Required ```  | Address Id |



#### Example Usage

```php
$customerId = 'customer_id';
$addressId = 'address_id';

$result = $customers->getAddress($customerId, $addressId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="delete_address"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.deleteAddress") deleteAddress

> Delete a Customer's address


```php
function deleteAddress(
        $customerId,
        $addressId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer Id |
| addressId |  ``` Required ```  | Address Id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 'customer_id';
$addressId = 'address_id';
$idempotencyKey = 'idempotency-key';

$result = $customers->deleteAddress($customerId, $addressId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="delete_access_token"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.deleteAccessToken") deleteAccessToken

> Delete a customer's access token


```php
function deleteAccessToken(
        $customerId,
        $tokenId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer Id |
| tokenId |  ``` Required ```  | Token Id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 'customer_id';
$tokenId = 'token_id';
$idempotencyKey = 'idempotency-key';

$result = $customers->deleteAccessToken($customerId, $tokenId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_access_token"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.getAccessToken") getAccessToken

> Get a Customer's access token


```php
function getAccessToken(
        $customerId,
        $tokenId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer Id |
| tokenId |  ``` Required ```  | Token Id |



#### Example Usage

```php
$customerId = 'customer_id';
$tokenId = 'token_id';

$result = $customers->getAccessToken($customerId, $tokenId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_access_token"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.createAccessToken") createAccessToken

> Creates a access token for a customer


```php
function createAccessToken(
        $customerId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer Id |
| body |  ``` Required ```  | Request for creating a access token |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 'customer_id';
$body = new CreateAccessTokenRequest();
$idempotencyKey = 'idempotency-key';

$result = $customers->createAccessToken($customerId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_access_tokens"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.getAccessTokens") getAccessTokens

> Get all access tokens from a customer


```php
function getAccessTokens(
        $customerId,
        $page = null,
        $size = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer Id |
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |



#### Example Usage

```php
$customerId = 'customer_id';
$page = 200;
$size = 200;

$result = $customers->getAccessTokens($customerId, $page, $size);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_address"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.createAddress") createAddress

> Creates a new address for a customer


```php
function createAddress(
        $customerId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer Id |
| body |  ``` Required ```  | Request for creating an address |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 'customer_id';
$body = new CreateAddressRequest();
$idempotencyKey = 'idempotency-key';

$result = $customers->createAddress($customerId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_addresses"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.getAddresses") getAddresses

> Gets all adressess from a customer


```php
function getAddresses(
        $customerId,
        $page = null,
        $size = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer id |
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |



#### Example Usage

```php
$customerId = 'customer_id';
$page = 200;
$size = 200;

$result = $customers->getAddresses($customerId, $page, $size);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_customer"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.createCustomer") createCustomer

> Creates a new customer


```php
function createCustomer(
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request for creating a customer |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CreateCustomerRequest();
$idempotencyKey = 'idempotency-key';

$result = $customers->createCustomer($body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_customers"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.getCustomers") getCustomers

> Get all Customers


```php
function getCustomers(
        $name = null,
        $document = null,
        $page = 1,
        $size = 10,
        $email = null,
        $code = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| name |  ``` Optional ```  | Name of the Customer |
| document |  ``` Optional ```  | Document of the Customer |
| page |  ``` Optional ```  ``` DefaultValue ```  | Current page the the search |
| size |  ``` Optional ```  ``` DefaultValue ```  | Quantity pages of the search |
| email |  ``` Optional ```  | Customer's email |
| code |  ``` Optional ```  | Customer's code |



#### Example Usage

```php
$name = 'name';
$document = 'document';
$page = 1;
$size = 10;
$email = 'email';
$code = 'Code';

$result = $customers->getCustomers($name, $document, $page, $size, $email, $code);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="delete_access_tokens"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.deleteAccessTokens") deleteAccessTokens

> Delete a Customer's access tokens


```php
function deleteAccessTokens($customerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer Id |



#### Example Usage

```php
$customerId = 'customer_id';

$result = $customers->deleteAccessTokens($customerId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_card"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.createCard") createCard

> Creates a new card for a customer


```php
function createCard(
        $customerId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer id |
| body |  ``` Required ```  | Request for creating a card |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 'customer_id';
$body = new CreateCardRequest();
$idempotencyKey = 'idempotency-key';

$result = $customers->createCard($customerId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_cards"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.getCards") getCards

> Get all cards from a customer


```php
function getCards(
        $customerId,
        $page = null,
        $size = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer Id |
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |



#### Example Usage

```php
$customerId = 'customer_id';
$page = 200;
$size = 200;

$result = $customers->getCards($customerId, $page, $size);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_customer"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.updateCustomer") updateCustomer

> Updates a customer


```php
function updateCustomer(
        $customerId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer id |
| body |  ``` Required ```  | Request for updating a customer |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 'customer_id';
$body = new UpdateCustomerRequest();
$idempotencyKey = 'idempotency-key';

$result = $customers->updateCustomer($customerId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_customer"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.getCustomer") getCustomer

> Get a customer


```php
function getCustomer($customerId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer Id |



#### Example Usage

```php
$customerId = 'customer_id';

$result = $customers->getCustomer($customerId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="renew_card"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.renewCard") renewCard

> Renew a card


```php
function renewCard(
        $customerId,
        $cardId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | Customer id |
| cardId |  ``` Required ```  | Card Id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 'customer_id';
$cardId = 'card_id';
$idempotencyKey = 'idempotency-key';

$result = $customers->renewCard($customerId, $cardId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_customer_metadata"></a>![Method: ](https://apidocs.io/img/method.png ".CustomersController.updateCustomerMetadata") updateCustomerMetadata

> Updates the metadata a customer


```php
function updateCustomerMetadata(
        $customerId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| customerId |  ``` Required ```  | The customer id |
| body |  ``` Required ```  | Request for updating the customer metadata |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$customerId = 'customer_id';
$body = new UpdateMetadataRequest();
$idempotencyKey = 'idempotency-key';

$result = $customers->updateCustomerMetadata($customerId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



[Back to List of Controllers](#list_of_controllers)

## <a name="charges_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ChargesController") ChargesController

### Get singleton instance

The singleton instance of the ``` ChargesController ``` class can be accessed from the API Client.

```php
$charges = $client->getCharges();
```

### <a name="update_charge_metadata"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.updateChargeMetadata") updateChargeMetadata

> Updates the metadata from a charge


```php
function updateChargeMetadata(
        $chargeId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| chargeId |  ``` Required ```  | The charge id |
| body |  ``` Required ```  | Request for updating the charge metadata |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$chargeId = 'charge_id';
$body = new UpdateMetadataRequest();
$idempotencyKey = 'idempotency-key';

$result = $charges->updateChargeMetadata($chargeId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="capture_charge"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.captureCharge") captureCharge

> Captures a charge


```php
function captureCharge(
        $chargeId,
        $idempotencyKey = null,
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| chargeId |  ``` Required ```  | Charge id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |
| body |  ``` Optional ```  | Request for capturing a charge |



#### Example Usage

```php
$chargeId = 'charge_id';
$idempotencyKey = 'idempotency-key';
$body = new CreateCaptureChargeRequest();

$result = $charges->captureCharge($chargeId, $idempotencyKey, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_charge_payment_method"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.updateChargePaymentMethod") updateChargePaymentMethod

> Updates a charge's payment method


```php
function updateChargePaymentMethod(
        $chargeId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| chargeId |  ``` Required ```  | Charge id |
| body |  ``` Required ```  | Request for updating the payment method from a charge |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$chargeId = 'charge_id';
$body = new UpdateChargePaymentMethodRequest();
$idempotencyKey = 'idempotency-key';

$result = $charges->updateChargePaymentMethod($chargeId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_charge_transactions"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.getChargeTransactions") getChargeTransactions

> GetChargeTransactions


```php
function getChargeTransactions(
        $chargeId,
        $page = null,
        $size = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| chargeId |  ``` Required ```  | Charge Id |
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |



#### Example Usage

```php
$chargeId = 'charge_id';
$page = 200;
$size = 200;

$result = $charges->getChargeTransactions($chargeId, $page, $size);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_charge_due_date"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.updateChargeDueDate") updateChargeDueDate

> Updates the due date from a charge


```php
function updateChargeDueDate(
        $chargeId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| chargeId |  ``` Required ```  | Charge Id |
| body |  ``` Required ```  | Request for updating the due date |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$chargeId = 'charge_id';
$body = new UpdateChargeDueDateRequest();
$idempotencyKey = 'idempotency-key';

$result = $charges->updateChargeDueDate($chargeId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_charges"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.getCharges") getCharges

> Lists all charges


```php
function getCharges(
        $page = null,
        $size = null,
        $code = null,
        $status = null,
        $paymentMethod = null,
        $customerId = null,
        $orderId = null,
        $createdSince = null,
        $createdUntil = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |
| code |  ``` Optional ```  | Filter for charge's code |
| status |  ``` Optional ```  | Filter for charge's status |
| paymentMethod |  ``` Optional ```  | Filter for charge's payment method |
| customerId |  ``` Optional ```  | Filter for charge's customer id |
| orderId |  ``` Optional ```  | Filter for charge's order id |
| createdSince |  ``` Optional ```  | Filter for the beginning of the range for charge's creation |
| createdUntil |  ``` Optional ```  | Filter for the end of the range for charge's creation |



#### Example Usage

```php
$page = 200;
$size = 200;
$code = 'code';
$status = 'status';
$paymentMethod = 'payment_method';
$customerId = 'customer_id';
$orderId = 'order_id';
$createdSince = date("D M d, Y G:i");
$createdUntil = date("D M d, Y G:i");

$result = $charges->getCharges($page, $size, $code, $status, $paymentMethod, $customerId, $orderId, $createdSince, $createdUntil);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_charge_card"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.updateChargeCard") updateChargeCard

> Updates the card from a charge


```php
function updateChargeCard(
        $chargeId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| chargeId |  ``` Required ```  | Charge id |
| body |  ``` Required ```  | Request for updating a charge's card |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$chargeId = 'charge_id';
$body = new UpdateChargeCardRequest();
$idempotencyKey = 'idempotency-key';

$result = $charges->updateChargeCard($chargeId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_charge"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.getCharge") getCharge

> Get a charge from its id


```php
function getCharge($chargeId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| chargeId |  ``` Required ```  | Charge id |



#### Example Usage

```php
$chargeId = 'charge_id';

$result = $charges->getCharge($chargeId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="cancel_charge"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.cancelCharge") cancelCharge

> Cancel a charge


```php
function cancelCharge(
        $chargeId,
        $idempotencyKey = null,
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| chargeId |  ``` Required ```  | Charge id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |
| body |  ``` Optional ```  | Request for cancelling a charge |



#### Example Usage

```php
$chargeId = 'charge_id';
$idempotencyKey = 'idempotency-key';
$body = new CreateCancelChargeRequest();

$result = $charges->cancelCharge($chargeId, $idempotencyKey, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_charges_summary"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.getChargesSummary") getChargesSummary

> GetChargesSummary


```php
function getChargesSummary(
        $status,
        $createdSince = null,
        $createdUntil = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| status |  ``` Required ```  | TODO: Add a parameter description |
| createdSince |  ``` Optional ```  | TODO: Add a parameter description |
| createdUntil |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$status = 'status';
$createdSince = date("D M d, Y G:i");
$createdUntil = date("D M d, Y G:i");

$result = $charges->getChargesSummary($status, $createdSince, $createdUntil);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="retry_charge"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.retryCharge") retryCharge

> Retries a charge


```php
function retryCharge(
        $chargeId,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| chargeId |  ``` Required ```  | Charge id |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$chargeId = 'charge_id';
$idempotencyKey = 'idempotency-key';

$result = $charges->retryCharge($chargeId, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_charge"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.createCharge") createCharge

> Creates a new charge


```php
function createCharge(
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Request for creating a charge |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CreateChargeRequest();
$idempotencyKey = 'idempotency-key';

$result = $charges->createCharge($body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="confirm_payment"></a>![Method: ](https://apidocs.io/img/method.png ".ChargesController.confirmPayment") confirmPayment

> ConfirmPayment


```php
function confirmPayment(
        $chargeId,
        $idempotencyKey = null,
        $body = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| chargeId |  ``` Required ```  | TODO: Add a parameter description |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |
| body |  ``` Optional ```  | Request for confirm payment |



#### Example Usage

```php
$chargeId = 'charge_id';
$idempotencyKey = 'idempotency-key';
$body = new CreateConfirmPaymentRequest();

$result = $charges->confirmPayment($chargeId, $idempotencyKey, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



[Back to List of Controllers](#list_of_controllers)

## <a name="recipients_controller"></a>![Class: ](https://apidocs.io/img/class.png ".RecipientsController") RecipientsController

### Get singleton instance

The singleton instance of the ``` RecipientsController ``` class can be accessed from the API Client.

```php
$recipients = $client->getRecipients();
```

### <a name="get_transfer"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.getTransfer") getTransfer

> Gets a transfer


```php
function getTransfer(
        $recipientId,
        $transferId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient id |
| transferId |  ``` Required ```  | Transfer id |



#### Example Usage

```php
$recipientId = 'recipient_id';
$transferId = 'transfer_id';

$result = $recipients->getTransfer($recipientId, $transferId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_recipient"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.updateRecipient") updateRecipient

> Updates a recipient


```php
function updateRecipient(
        $recipientId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient id |
| body |  ``` Required ```  | Recipient data |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$recipientId = 'recipient_id';
$body = new UpdateRecipientRequest();
$idempotencyKey = 'idempotency-key';

$result = $recipients->updateRecipient($recipientId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_recipient"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.getRecipient") getRecipient

> Retrieves recipient information


```php
function getRecipient($recipientId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipiend id |



#### Example Usage

```php
$recipientId = 'recipient_id';

$result = $recipients->getRecipient($recipientId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_anticipation"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.createAnticipation") createAnticipation

> Creates an anticipation


```php
function createAnticipation(
        $recipientId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient id |
| body |  ``` Required ```  | Anticipation data |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$recipientId = 'recipient_id';
$body = new CreateAnticipationRequest();
$idempotencyKey = 'idempotency-key';

$result = $recipients->createAnticipation($recipientId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_anticipations"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.getAnticipations") getAnticipations

> Retrieves a paginated list of anticipations from a recipient


```php
function getAnticipations(
        $recipientId,
        $page = null,
        $size = null,
        $status = null,
        $timeframe = null,
        $paymentDateSince = null,
        $paymentDateUntil = null,
        $createdSince = null,
        $createdUntil = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient id |
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |
| status |  ``` Optional ```  | Filter for anticipation status |
| timeframe |  ``` Optional ```  | Filter for anticipation timeframe |
| paymentDateSince |  ``` Optional ```  | Filter for start range for anticipation payment date |
| paymentDateUntil |  ``` Optional ```  | Filter for end range for anticipation payment date |
| createdSince |  ``` Optional ```  | Filter for start range for anticipation creation date |
| createdUntil |  ``` Optional ```  | Filter for end range for anticipation creation date |



#### Example Usage

```php
$recipientId = 'recipient_id';
$page = 200;
$size = 200;
$status = 'status';
$timeframe = 'timeframe';
$paymentDateSince = date("D M d, Y G:i");
$paymentDateUntil = date("D M d, Y G:i");
$createdSince = date("D M d, Y G:i");
$createdUntil = date("D M d, Y G:i");

$result = $recipients->getAnticipations($recipientId, $page, $size, $status, $timeframe, $paymentDateSince, $paymentDateUntil, $createdSince, $createdUntil);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_anticipation_limits"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.getAnticipationLimits") getAnticipationLimits

> Gets the anticipation limits for a recipient


```php
function getAnticipationLimits(
        $recipientId,
        $timeframe,
        $paymentDate)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient id |
| timeframe |  ``` Required ```  | Timeframe |
| paymentDate |  ``` Required ```  | Anticipation payment date |



#### Example Usage

```php
$recipientId = 'recipient_id';
$timeframe = 'timeframe';
$paymentDate = date("D M d, Y G:i");

$result = $recipients->getAnticipationLimits($recipientId, $timeframe, $paymentDate);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_recipients"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.getRecipients") getRecipients

> Retrieves paginated recipients information


```php
function getRecipients(
        $page = null,
        $size = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |



#### Example Usage

```php
$page = 200;
$size = 200;

$result = $recipients->getRecipients($page, $size);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_recipient"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.createRecipient") createRecipient

> Creates a new recipient


```php
function createRecipient(
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | Recipient data |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CreateRecipientRequest();
$idempotencyKey = 'idempotency-key';

$result = $recipients->createRecipient($body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_withdraw_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.getWithdrawById") getWithdrawById

> GetWithdrawById


```php
function getWithdrawById(
        $recipientId,
        $withdrawalId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | TODO: Add a parameter description |
| withdrawalId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$recipientId = 'recipient_id';
$withdrawalId = 'withdrawal_id';

$result = $recipients->getWithdrawById($recipientId, $withdrawalId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_recipient_default_bank_account"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.updateRecipientDefaultBankAccount") updateRecipientDefaultBankAccount

> Updates the default bank account from a recipient


```php
function updateRecipientDefaultBankAccount(
        $recipientId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient id |
| body |  ``` Required ```  | Bank account data |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$recipientId = 'recipient_id';
$body = new UpdateRecipientBankAccountRequest();
$idempotencyKey = 'idempotency-key';

$result = $recipients->updateRecipientDefaultBankAccount($recipientId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_recipient_metadata"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.updateRecipientMetadata") updateRecipientMetadata

> Updates recipient metadata


```php
function updateRecipientMetadata(
        $recipientId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient id |
| body |  ``` Required ```  | Metadata |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$recipientId = 'recipient_id';
$body = new UpdateMetadataRequest();
$idempotencyKey = 'idempotency-key';

$result = $recipients->updateRecipientMetadata($recipientId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_transfers"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.getTransfers") getTransfers

> Gets a paginated list of transfers for the recipient


```php
function getTransfers(
        $recipientId,
        $page = null,
        $size = null,
        $status = null,
        $createdSince = null,
        $createdUntil = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient id |
| page |  ``` Optional ```  | Page number |
| size |  ``` Optional ```  | Page size |
| status |  ``` Optional ```  | Filter for transfer status |
| createdSince |  ``` Optional ```  | Filter for start range of transfer creation date |
| createdUntil |  ``` Optional ```  | Filter for end range of transfer creation date |



#### Example Usage

```php
$recipientId = 'recipient_id';
$page = 36;
$size = 36;
$status = 'status';
$createdSince = date("D M d, Y G:i");
$createdUntil = date("D M d, Y G:i");

$result = $recipients->getTransfers($recipientId, $page, $size, $status, $createdSince, $createdUntil);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_transfer"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.createTransfer") createTransfer

> Creates a transfer for a recipient


```php
function createTransfer(
        $recipientId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient Id |
| body |  ``` Required ```  | Transfer data |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$recipientId = 'recipient_id';
$body = new CreateTransferRequest();
$idempotencyKey = 'idempotency-key';

$result = $recipients->createTransfer($recipientId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="create_withdraw"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.createWithdraw") createWithdraw

> CreateWithdraw


```php
function createWithdraw(
        $recipientId,
        $body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | TODO: Add a parameter description |
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$recipientId = 'recipient_id';
$body = new CreateWithdrawRequest();

$result = $recipients->createWithdraw($recipientId, $body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_withdrawals"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.getWithdrawals") getWithdrawals

> Gets a paginated list of transfers for the recipient


```php
function getWithdrawals(
        $recipientId,
        $page = null,
        $size = null,
        $status = null,
        $createdSince = null,
        $createdUntil = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | TODO: Add a parameter description |
| page |  ``` Optional ```  | TODO: Add a parameter description |
| size |  ``` Optional ```  | TODO: Add a parameter description |
| status |  ``` Optional ```  | TODO: Add a parameter description |
| createdSince |  ``` Optional ```  | TODO: Add a parameter description |
| createdUntil |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$recipientId = 'recipient_id';
$page = 36;
$size = 36;
$status = 'status';
$createdSince = date("D M d, Y G:i");
$createdUntil = date("D M d, Y G:i");

$result = $recipients->getWithdrawals($recipientId, $page, $size, $status, $createdSince, $createdUntil);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_automatic_anticipation_settings"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.updateAutomaticAnticipationSettings") updateAutomaticAnticipationSettings

> Updates recipient metadata


```php
function updateAutomaticAnticipationSettings(
        $recipientId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient id |
| body |  ``` Required ```  | Metadata |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$recipientId = 'recipient_id';
$body = new UpdateAutomaticAnticipationSettingsRequest();
$idempotencyKey = 'idempotency-key';

$result = $recipients->updateAutomaticAnticipationSettings($recipientId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_anticipation"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.getAnticipation") getAnticipation

> Gets an anticipation


```php
function getAnticipation(
        $recipientId,
        $anticipationId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient id |
| anticipationId |  ``` Required ```  | Anticipation id |



#### Example Usage

```php
$recipientId = 'recipient_id';
$anticipationId = 'anticipation_id';

$result = $recipients->getAnticipation($recipientId, $anticipationId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="update_recipient_transfer_settings"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.updateRecipientTransferSettings") updateRecipientTransferSettings

> UpdateRecipientTransferSettings


```php
function updateRecipientTransferSettings(
        $recipientId,
        $body,
        $idempotencyKey = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient Identificator |
| body |  ``` Required ```  | TODO: Add a parameter description |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$recipientId = 'recipient_id';
$body = new UpdateTransferSettingsRequest();
$idempotencyKey = 'idempotency-key';

$result = $recipients->updateRecipientTransferSettings($recipientId, $body, $idempotencyKey);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_balance"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.getBalance") getBalance

> Get balance information for a recipient


```php
function getBalance($recipientId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| recipientId |  ``` Required ```  | Recipient id |



#### Example Usage

```php
$recipientId = 'recipient_id';

$result = $recipients->getBalance($recipientId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_recipient_by_code"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.getRecipientByCode") getRecipientByCode

> Retrieves recipient information


```php
function getRecipientByCode($code)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| code |  ``` Required ```  | Recipient code |



#### Example Usage

```php
$code = 'code';

$result = $recipients->getRecipientByCode($code);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_default_recipient"></a>![Method: ](https://apidocs.io/img/method.png ".RecipientsController.getDefaultRecipient") getDefaultRecipient

> GetDefaultRecipient


```php
function getDefaultRecipient()
```

#### Example Usage

```php

$result = $recipients->getDefaultRecipient();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



[Back to List of Controllers](#list_of_controllers)

## <a name="tokens_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TokensController") TokensController

### Get singleton instance

The singleton instance of the ``` TokensController ``` class can be accessed from the API Client.

```php
$tokens = $client->getTokens();
```

### <a name="create_token"></a>![Method: ](https://apidocs.io/img/method.png ".TokensController.createToken") createToken

> *Tags:*  ``` Skips Authentication ``` 

> CreateToken


```php
function createToken(
        $publicKey,
        $body,
        $idempotencyKey = null,
        $appId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| publicKey |  ``` Required ```  | Public key |
| body |  ``` Required ```  | Request for creating a token |
| idempotencyKey |  ``` Optional ```  | TODO: Add a parameter description |
| appId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$publicKey = 'public_key';
$body = new CreateTokenRequest();
$idempotencyKey = 'idempotency-key';
$appId = 'appId';

$result = $tokens->createToken($publicKey, $body, $idempotencyKey, $appId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_token"></a>![Method: ](https://apidocs.io/img/method.png ".TokensController.getToken") getToken

> *Tags:*  ``` Skips Authentication ``` 

> Gets a token from its id


```php
function getToken(
        $id,
        $publicKey,
        $appId = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| id |  ``` Required ```  | Token id |
| publicKey |  ``` Required ```  | Public key |
| appId |  ``` Optional ```  | TODO: Add a parameter description |



#### Example Usage

```php
$id = 'id';
$publicKey = 'public_key';
$appId = 'appId';

$result = $tokens->getToken($id, $publicKey, $appId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



[Back to List of Controllers](#list_of_controllers)

## <a name="transactions_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TransactionsController") TransactionsController

### Get singleton instance

The singleton instance of the ``` TransactionsController ``` class can be accessed from the API Client.

```php
$transactions = $client->getTransactions();
```

### <a name="get_transaction"></a>![Method: ](https://apidocs.io/img/method.png ".TransactionsController.getTransaction") getTransaction

> GetTransaction


```php
function getTransaction($transactionId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transactionId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transactionId = 'transaction_id';

$result = $transactions->getTransaction($transactionId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



[Back to List of Controllers](#list_of_controllers)

## <a name="transfers_controller"></a>![Class: ](https://apidocs.io/img/class.png ".TransfersController") TransfersController

### Get singleton instance

The singleton instance of the ``` TransfersController ``` class can be accessed from the API Client.

```php
$transfers = $client->getTransfers();
```

### <a name="get_transfer_by_id"></a>![Method: ](https://apidocs.io/img/method.png ".TransfersController.getTransferById") getTransferById

> GetTransferById


```php
function getTransferById($transferId)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| transferId |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$transferId = 'transfer_id';

$result = $transfers->getTransferById($transferId);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="post_create_transfer"></a>![Method: ](https://apidocs.io/img/method.png ".TransfersController.postCreateTransfer") postCreateTransfer

> CreateTransfer


```php
function postCreateTransfer($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CreateTransfer();

$result = $transfers->postCreateTransfer($body);

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



### <a name="get_transfers1"></a>![Method: ](https://apidocs.io/img/method.png ".TransfersController.getTransfers1") getTransfers1

> Gets all transfers


```php
function getTransfers1()
```

#### Example Usage

```php

$result = $transfers->getTransfers1();

```

#### Errors

| Error Code | Error Description |
|------------|-------------------|
| 400 | Invalid request |
| 401 | Invalid API key |
| 404 | An informed resource was not found |
| 412 | Business validation error |
| 422 | Contract validation error |
| 500 | Internal server error |



[Back to List of Controllers](#list_of_controllers)



