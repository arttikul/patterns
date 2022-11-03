up-d:
	docker-compose up -d --build

up:
	docker-compose up --build

down:
	docker-compose down

console:
	docker exec -it app bash