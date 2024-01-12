# fedex-curl-api-authorization

 Fedex API Authorization with PHP curl

 
Introduction

The FedEx APIs support the OAuth 2.0 (bearer token) authentication method to authorize your application API requests with FedEx resources. This OAuth access token needs to be regenerated after every 60 minutes and provided with each API transaction to authenticate and authorize your access to the FedEx resources.
Authorization API Details

This API allows you to authorize the API requests and it is required to authenticate the FedEx resources. The following section describes the prerequisites for the API:

While registering to FedEx Developer portal, FedEx provides a combination of Client ID (API Key) and Client Secret (Secret Key) to authenticate API requests for your project. Each project under your organization is associated with a combination of Client ID and Client Secret, called as API credentials.

Note: Customers (Internal, Compatible or Proprietary Parent Child) can contact FedEx representative to obtain API and Secret Keys.

To provide an extra layer of security, the FedEx® customers (Internal, Compatible or Proprietary Parent Child) can send Child Key (Customer Secret) and Child Secret (Customer password) in addition to the API Key and Secret Key to create an OAuth token. This token is used in every API request for authentication.

You can recreate the forgotten Secret Key from the Projects page on the FedEx Developer Portal.

Note: Creation of new keys will result into code change in your application.

Important information in this document:

    Client Key as API Key
    Client Secret as Secret Key
    Child Key as Customer Key
    Child Secret as Customer Password

API credentials serve the following purposes:

    They identify the project making a call to the APIs.
    They authorize access to the APIs that are enabled under your project.

How to get API Credentials

Credentials are created based on inputs in the FedEx Developer Portal:

    Client ID – API Key (Client ID) gets created when a project is created on FedEx Developer portal. You can also view the API Key associated with the project on the Project Overview page.
    Client Secret – You will see the Secret Key (Client Secret) on the confirmation page once a project is created on the FedEx Developer portal. If needed, the Secret Key can also be regenerated, on the Project Overview page.

Note: FedEx® customers (Internal, Compatible or Proprietary Parent Child) need to send Child Key (Customer Secret) and Child Secret (Customer password) in addition with API Key and Secret Key for creating OAuth token. Refer Credential Registration API for how to get Child Key and Child Secret.
