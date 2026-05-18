# Changelog

All notable changes to this project will be documented in this file.

## [1.1.0](https://github.com/furious-squad/furious-api-sdk/releases/tag/1.1.0) - 2026-05-18

### Added

- `searchBatch()` method on `AbstractResource` — fires multiple search queries in parallel using Guzzle promises, significantly reducing total response time compared to sequential calls
- `getBatch()` method on `Http/Client` — handles parallel HTTP requests via `GuzzleHttp\Promise\Utils::settle()`

## [1.0.0](https://github.com/furious-squad/furious-api-sdk/releases/tag/1.0.0) - 2025-07-11

### SDK 1.0.0 release