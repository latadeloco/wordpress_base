# Makefile

.PHONY: build start stop logs

build:
	docker-compose build

start:
	docker-compose up -d

stop:
	docker-compose down

logs:
	docker-compose logs -f

status:
	docker-compose ps

exec:
	docker exec -it $(container) /bin/bash