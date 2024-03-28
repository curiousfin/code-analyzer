fix: fix-cs fix-rector fix-csniff

fix-cs:
	./vendor/bin/php-cs-fixer --config=.php-cs-fixer.dist.php fix $(p)
fix-rector:
	./vendor/bin/rector --config=rector.php process $(p) --debug
fix-csniff:
	./vendor/bin/phpcbf $(p)

check: check-md check-lint check-cs
check-md:
	./vendor/bin/phpmd $(p) json codesize,unusedcode
check-lint:
	./vendor/bin/phplint
check-cs:
	./vendor/bin/phpcs $(p)
dry-rector:
	./vendor/bin/rector --config=rector.php process $(p) --dry-run --debug
