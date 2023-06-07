include .env
up:
	./vendor/bin/sail up
down:
	docker-compose down
