##
# RotabHRM
#
# @file
# @version 0.1

init:
	@make build
	@make up
	@make composer-update
	@make key-generate
	@make config-cache
	@make permission

build:
	docker compose build --no-cache --force-rm

stop:
	docker compose stop

up:
	docker compose up -d

composer-update:
	docker exec rotab_php bash -c "composer update"

migrate:
	docker exec rotab_php bash -c "php artisan migrate"

key-generate:
  docker exec rotab_php bash -c "php artisan key:generate"

config-cache:
  docker exec rotab_php bash -c "php artisan config:cache"

permission:
	docker exec rotab_php bash -c "chmod 777 bootstrap/ -R"
	docker exec rotab_php bash -c "chmod 777 storage/ -R"
