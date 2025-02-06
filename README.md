# Open Journal Systems

> Open Journal Systems (OJS) has been developed by the Public Knowledge Project. For general information about OJS and other open research systems, visit the [PKP web site](https://pkp.sfu.ca/).

[![Build Status](https://app.travis-ci.com/pkp/ojs.svg?branch=stable-3_3_0)](https://app.travis-ci.com/pkp/ojs)

## Documentation

You will find detailed guides in the [docs](docs) folder.

## Using Git development source

Checkout submodules and copy the default configuration:

    git submodule update --init --recursive
    cp config.TEMPLATE.inc.php config.inc.php

Install or update dependencies via Composer (https://getcomposer.org/):

    composer --working-dir=lib/pkp install
    composer --working-dir=plugins/paymethod/paypal install
    composer --working-dir=plugins/generic/citationStyleLanguage install

Install or update dependencies via [NPM](https://www.npmjs.com/):

    # install [nodejs](https://nodejs.org/en/) if you don't already have it
    npm install
    npm run build

If your PHP version supports the built-in development server:

    php -S localhost:8000

See the [Documentation Hub](https://docs.pkp.sfu.ca/) for a more complete development guide.

## Running Tests

We recommend using [Travis](https://travis-ci.org/) for continuous integration-based testing. Review the Travis configuration file (`.travis.yml`) as a reference for running the test locally, should you choose to do so.

The tests include an integration test suite that builds a data environment from scratch, including the installation process. (This is the `-b` flag to the test script `lib/pkp/tools/runAllTests.sh`; this is also executed in the Travis environment.)

## Bugs / Issues

See [here](https://github.com/pkp/pkp-lib/#issues) for information on reporting issues.

## License

This software is released under the [GNU General Public License](docs/COPYING).

See the file [COPYING](docs/COPYING) included with this distribution for the terms of this license.

Third parties are welcome to modify and redistribute OJS in its entirety or parts according to the terms of this license. PKP also welcomes patches for improvements or bug fixes to the software.

[pkp]: https://pkp.sfu.ca/
[readme]: docs/README.md
[doc-hub]: https://docs.pkp.sfu.ca/
[php-unit]: https://phpunit.de/
[gpl-licence]: docs/COPYING
