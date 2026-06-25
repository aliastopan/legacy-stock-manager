
# MIGRATION
```sh
Get-Content .\Database.sql | docker compose exec -T db mysql -usma_user -psma_pass sma
```


# BUILD
```sh
docker compose build --no-cache web
docker compose up
```