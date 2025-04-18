# Amadeco DbOverride Module for Magento 2

[![Latest Stable Version](https://img.shields.io/github/v/release/Amadeco/magento2-db-override)](https://github.com/Amadeco/magento2-db-override/releases)
[![Magento 2](https://img.shields.io/badge/Magento-2.4.x-brightgreen.svg)](https://magento.com)
[![PHP](https://img.shields.io/badge/PHP-8.1|8.2|8.3-blue.svg)](https://www.php.net)
[![License](https://img.shields.io/github/license/Amadeco/magento2-db-override)](https://github.com/Amadeco/magento2-db-override/blob/main/LICENSE)

[SPONSOR: Amadeco](https://www.amadeco.fr)

## Overview

Extend database version compatibility for Magento 2 with experimental support for MariaDB 11.0 and enhanced version detection.

**Only useful for versions of Magento < 2.4.8**

## Installation

### Composer Installation

Execute the following commands in your Magento root directory:

```bash
composer require amadeco/module-db-override
bin/magento module:enable Amadeco_DbOverride
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy
```

### Manual Installation

1. Create directory `app/code/Amadeco/DbOverride` in your Magento installation
2. Clone or download this repository into that directory
3. Enable the module and update the database:

```bash
bin/magento module:enable Amadeco_DbOverride
bin/magento setup:upgrade
bin/magento setup:di:compile
bin/magento setup:static-content:deploy
```

## Compatibility

- Magento 2.4.x
- PHP 8.1, 8.2, 8.3

### 🛠 Supported Database Versions

- MySQL 8.0
- MySQL 5.7
- MariaDB 10.2 - 10.11
- MariaDB 11.0 - 11.4

## Contributing

Contributions are welcome! Please read our [Contributing Guidelines](CONTRIBUTING.md).

## Support

For issues or feature requests, please create an issue on our GitHub repository.

## License

This module is licensed under the Open Software License ("OSL") v3.0. See the [LICENSE.txt](LICENSE.txt) file for details.
