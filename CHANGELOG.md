# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]
- Add card brand name to method name if method is card.

## [1.0.18] - 2024-12-09
- Fixed bug with checked order ID in callback handling
- Added general platform that identifies the pluin with the API.

## [1.0.17] - 2023-04-18
- Added function for showing alerts regarding available updates to the module, with info from OnPay API
- Fixed buildscript prefixing

## [1.0.16] - 2023-01-06
- Updated code and documentation to support ThirtyBees from here and on.
- Confirmed compatibility with Thirtybees version 1.4.0

## [1.0.15] - 2022-11-09
- Added check of currency, when showing compatible payment methods
- Fixed bug when getting currency for cart upon validation of order.

## [1.0.14] - 2022-04-07
- Improved validation of parameters on callback endpoint.

## [1.0.13] - 2022-02-16
- Added swish as available payment option

## [1.0.12] - 2021-09-06
- Added feature for automatically capturing transactions, when orders are updated with specific status
- Exclude paragonIE random_compat from scoper, since this repo is registered in the global space, and results in errors if prefixed with a namespace

## [1.0.11] - 2021-06-23
- Updated Anyday branding
- Implemented custom success page instead of relying on the build in confirmation page.

## [1.0.10] - 2021-05-27
- Fixed bug with locked state of cart on callbacks.

## [1.0.9] - 2021-05-07
- Fixed transaction not being properly set on payments
- Added Vipps as payment option

## [1.0.8] - 2021-04-19
- Added Button on settings page for refreshing gateway id and window secret
- Added better handling of callbacks, with custom awaiting order state, and locked state for carts

## [1.0.7] - 2021-01-28
- Updated version of onpayio/php-sdk
- Added website field to payment window
- Added Anyday Split as payment method
- Implemented platform field in payment window

## [1.0.6] - 2020-12-07
- Added feature for choosing card logos shown on payment page
- Updated Mobilepay logo

## [1.0.5] - 2020-11-03
- Added language selector and automatic language for payment window
- Implemented paymentinfo for paymentwindow, setting available values
- Implemented usage of PHP-scoper to make unique namespaces for all composer dependencies, which solves any issues with overlap of dependencies from other modules and thirtybees core

## [1.0.4] - 2020-06-16
- Fix compatibility issue with composer dependencies when using php 5.6
- Update composer dependencies to latest versions

## [1.0.3] - 2020-03-03
- Updated version of OnPay php SDK to the latest version. 1.0.5

## [1.0.2] - 2020-01-23
- Fixed empty transaction_id value on payments resulting in errors, when trying to get transaction data from API. (PR #5)
- Fixed API calls made regardless of payment method used for order. (PR #5)
- Fixed multiple payments through OnPay on a single order not being properly supported. (PR #5)
- Fixed generating URLs for https sites
- Updated version of PHP SDK
- Fixed URLs generated for paymentWindow not working with friendly URLs disabled
- Fix build script checking for outdated version of composer only

## [1.0.1] - 2019-06-03
- Fixed usage of wrong constant used for MobilePay (#2)

## [1.0.0] - 2019-05-28
Initial release
