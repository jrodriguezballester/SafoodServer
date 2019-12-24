## SafoodServidor start
```
git clone https://github.com/jrodriguezballester/SafoodServidor.git
```

### Iniciar SafoodServidor
```
npm run inicio
    o
npm run init
```

### Actualizar base de datos (opcional)
```
npm run db
```

## Pendiente
- NULL

## Ultimas modificaciones
Instalando graphQL
- composer require rebing/graphql-laravel

## Documentacion para el desarrollo
- [Inserción de datos con los seeders de Laravel]
        (https://styde.net/insercion-de-datos-con-los-seeders-de-laravel)
- [Fix TableSeeder don’t exist "php artisan migrate –seed"]
        (https://www.blenderdeluxe.com/fix-tableseeder-dont-exist-php-artisan-migrate-seed-laravel-5)

### para trabajar con foreing keys
Editar el archivo /config/database.php
    Array: connections -> mysql -> engine
        ```
            'engine' => 'InnoDB'
        ```
