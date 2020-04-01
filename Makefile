.PHONY: composer-install

test:
	./vendor/phpunit/phpunit/phpunit

composer-install:
	composer install
