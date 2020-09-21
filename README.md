### prj_shopech

### Actualización composer update
- **Error**
```
Unrecognized options "dir_name, namespace" under "doctrine_migrations". Available options are "all_or_nothing", 
"check_database_platform", "connection", "custom_template", "em", "migrations", "migrations_paths", "name", 
"organize_migrations", "services", "storage"
```
- "name": "doctrine/common",
- "version": "3.0.2", aqui cambia de la 2.13.0 y da ese error
```yaml
#/config/packages/doctrine_migrations.yaml

#ERA:
doctrine_migrations:
  dir_name: '%kernel.project_dir%/src/Migrations'
    # namespace is arbitrary but should be different from App\Migrations
    # as migrations classes should NOT be autoloaded
    namespace: DoctrineMigrations

#Despues fix:
doctrine_migrations:
    migrations_paths:
        'DoctrineMigrations': '%kernel.project_dir%/src/Migrations'
```
