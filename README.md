### Getting started

```bash
docker-compose build --pull --no-cache
docker-compose up -d
```

```
# URL
http://127.0.0.1

# Env DB
DATABASE_URL="postgresql://postgres:password@db:5432/db?serverVersion=13&charset=utf8"
```

### Création d'entité
```
    bin/console make:entity
```

### Commandes DB
```
    bin/console doctrine:database:create
    bin/console make:migrate
    bin/console doctrine:migration:migrate
    
    # pour les personnes avec docker sous mac, ajouter avant les commandes 
    docker compose exec php 
    # et pour ceux avec docker sous windows
    docker compose exec php php
```
