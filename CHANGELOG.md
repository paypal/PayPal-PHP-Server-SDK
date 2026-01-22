## 2.2.0
- Bug Fixes:
  - Add missing `email_address` & `payer_id` field to `Subscriber Response Information`
  - Add missing `email_address` & `payer_id` field to `Subscriber Request Information`
  - Add missing `store_in_vault` field to `PayPal Wallet Vault Instruction`
  - Add missing `store_in_vault` field to `PayPal Wallet Attributes`

## 2.1.0
- Bug Fixes:
  - Fix missing `OTHERS` value in `Shipment Carrier` enum model
  - Update Transaction Search API naming in docs

## 2.0.0
- Breaking Changes:
  - Several model renames for more precise mapping to controllers
  - Remove shipping callback related models
- New Features:
  - Transaction Search API
  - Subscriptions API
- Bug Fixes:
  - Fix deprecated descriptions not properly reflecting on the SDK
  - Fixes issues related to Network Transaction Reference not parsing properly
  - Various bug fixes

## 1.1.0
- Added new models to support Apple Pay, Google Pay
- Expanded models to support additional optional fields
- Added Proxy support via `ProxyConfigurationBuilder`
- Bug fixes
- Documentation updates

## 1.0.0
- GA Release for Orders, Payments, and Vault APIs
