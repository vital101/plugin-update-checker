Kernl Update Checker
====================

The Kernl.us update checker. For more information, please see https://kernl.us

### Changelog

- **3.0.0** - Refactored to prevent naming collisions with other plugins/themes that may use the un-modified version of the PUC library. Removed dead code.
- **2.6.0** - Update check requests now use POST instead of GET. When Kernl Analytics is enabled it is possible to send a querystring larger than is allowed on some servers. This resolves the issue by sending the data as an HTTP POST body.
- **2.5.0** - Adding support for capturing MySQL/MariaDB version for Kernl Analytics.
- **2.4.0** - Adding some additional error logic so a fatal error will not be triggered if Kernl is down for some reason or a request fails.
- **2.3.0** - Added `admin_notice` when the update check fails due to an invalid license.
- **2.2.0** - Initial version published to Packagist. https://packagist.org/packages/kernl/kernl-update-checker