<?php
/*
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was generated from the file
 * https://github.com/google/googleapis/blob/master/google/ads/googleads/v6/services/invoice_service.proto
 * and updates to that file get reflected here through a refresh process.
 *
 * @experimental
 */

namespace Google\Ads\GoogleAds\V6\Services\Gapic;

use Google\Ads\GoogleAds\V6\Enums\MonthOfYearEnum\MonthOfYear;
use Google\Ads\GoogleAds\V6\Services\ListInvoicesRequest;
use Google\Ads\GoogleAds\V6\Services\ListInvoicesResponse;
use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\RequestParamsHeaderDescriptor;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;

/**
 * Service Description: A service to fetch invoices issued for a billing setup during a given month.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods. Sample code to get started:
 *
 * ```
 * $invoiceServiceClient = new InvoiceServiceClient();
 * try {
 *     $customerId = '';
 *     $billingSetup = '';
 *     $issueYear = '';
 *     $issueMonth = MonthOfYear::UNSPECIFIED;
 *     $response = $invoiceServiceClient->listInvoices($customerId, $billingSetup, $issueYear, $issueMonth);
 * } finally {
 *     $invoiceServiceClient->close();
 * }
 * ```
 *
 * @experimental
 */
class InvoiceServiceGapicClient
{
    use GapicClientTrait;

    /**
     * The name of the service.
     */
    const SERVICE_NAME = 'google.ads.googleads.v6.services.InvoiceService';

    /**
     * The default address of the service.
     */
    const SERVICE_ADDRESS = 'googleads.googleapis.com';

    /**
     * The default port of the service.
     */
    const DEFAULT_SERVICE_PORT = 443;

    /**
     * The name of the code generator, to be included in the agent header.
     */
    const CODEGEN_NAME = 'gapic';

    /**
     * The default scopes required by the service.
     */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/adwords',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'serviceAddress' => self::SERVICE_ADDRESS.':'.self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__.'/../resources/invoice_service_client_config.json',
            'descriptorsConfigPath' => __DIR__.'/../resources/invoice_service_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__.'/../resources/invoice_service_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__.'/../resources/invoice_service_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *                       Optional. Options for configuring the service API wrapper.
     *
     *     @type string $serviceAddress
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'googleads.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the client.
     *           For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()}.
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either a
     *           path to a JSON file, or a PHP array containing the decoded JSON data.
     *           By default this settings points to the default client config file, which is provided
     *           in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string `rest`
     *           or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already instantiated
     *           {@see \Google\ApiCore\Transport\TransportInterface} object. Note that when this
     *           object is provided, any settings in $transportConfig, and any $serviceAddress
     *           setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...]
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     * }
     *
     * @throws ValidationException
     * @experimental
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /**
     * Returns all invoices associated with a billing setup, for a given month.
     *
     * Sample code:
     * ```
     * $invoiceServiceClient = new InvoiceServiceClient();
     * try {
     *     $customerId = '';
     *     $billingSetup = '';
     *     $issueYear = '';
     *     $issueMonth = MonthOfYear::UNSPECIFIED;
     *     $response = $invoiceServiceClient->listInvoices($customerId, $billingSetup, $issueYear, $issueMonth);
     * } finally {
     *     $invoiceServiceClient->close();
     * }
     * ```
     *
     * @param string $customerId   Required. The ID of the customer to fetch invoices for.
     * @param string $billingSetup Required. The billing setup resource name of the requested invoices.
     *
     * `customers/{customer_id}/billingSetups/{billing_setup_id}`
     * @param string $issueYear    Required. The issue year to retrieve invoices, in yyyy format. Only
     *                             invoices issued in 2019 or later can be retrieved.
     * @param int    $issueMonth   Required. The issue month to retrieve invoices.
     *                             For allowed values, use constants defined on {@see \Google\Ads\GoogleAds\V6\Enums\MonthOfYearEnum\MonthOfYear}
     * @param array  $optionalArgs {
     *                             Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *          Retry settings to use for this call. Can be a
     *          {@see Google\ApiCore\RetrySettings} object, or an associative array
     *          of retry settings parameters. See the documentation on
     *          {@see Google\ApiCore\RetrySettings} for example usage.
     * }
     *
     * @return \Google\Ads\GoogleAds\V6\Services\ListInvoicesResponse
     *
     * @throws ApiException if the remote call fails
     * @experimental
     */
    public function listInvoices($customerId, $billingSetup, $issueYear, $issueMonth, array $optionalArgs = [])
    {
        $request = new ListInvoicesRequest();
        $request->setCustomerId($customerId);
        $request->setBillingSetup($billingSetup);
        $request->setIssueYear($issueYear);
        $request->setIssueMonth($issueMonth);

        $requestParams = new RequestParamsHeaderDescriptor([
          'customer_id' => $request->getCustomerId(),
        ]);
        $optionalArgs['headers'] = isset($optionalArgs['headers'])
            ? array_merge($requestParams->getHeader(), $optionalArgs['headers'])
            : $requestParams->getHeader();

        return $this->startCall(
            'ListInvoices',
            ListInvoicesResponse::class,
            $optionalArgs,
            $request
        )->wait();
    }
}
