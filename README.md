# phpunit-test
Sample on how to get phpunit working with a few tests

make sure to run composer first

php composer.phar install

To run your tests

vendor/bin/phpunit tests/

To create the documentation (you need xdebug installed and loaded in PHP)

vendor/bin/phpunit --coverage-report-html report tests/
