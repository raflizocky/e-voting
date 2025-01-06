# Build the Docker containers
build:
	docker-compose build --no-cache --force-rm

# Start the Docker containers
up:
	docker-compose up -d

# Pause the Docker containers
down:
	docker-compose down

# Restart the Docker containers
restart:
	docker-compose down && docker-compose up -d

# Pause the Docker containers
stop:
	docker-compose stop

# Run Laravel artisan commands
artisan:
	docker-compose exec e-voting php artisan $(cmd)

# Install Composer dependencies
composer-install:
	docker-compose exec e-voting composer install

# Update Composer dependencies
composer-update:
	docker-compose exec e-voting composer update

# Run Laravel migrations
migrate:
	docker-compose exec e-voting php artisan migrate

# Generate application key
key-generate:
	docker-compose exec e-voting php artisan key:generate

# Run database seeders
db-seed:
	docker-compose exec e-voting php artisan db:seed

# Create symbolic links for storage
storage-link:
	docker-compose exec e-voting php artisan storage:link

# Clear Laravel cache
optimize-clear:
	docker-compose exec e-voting php artisan optimize:clear