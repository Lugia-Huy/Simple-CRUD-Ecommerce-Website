# Clothing Store Management Website - Demo CRUD

This is a simple basic website about CRUD features to **create**, **view**, **edit** and **delete** clothes for the final project.

## Installation

Download the **clothes-management-demo.zip** file and extract it to xampp's htdocs folder.

In the extracted folder, open **Terminal** (**CMD or Git Bash**), type the following command to install composer dependencies:
```bash
composer install
```

An application key can be generated with the command:
```bash
php artisan key:generate
```

Create a database with the same name as the database defined in the .env file:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=clothing
DB_USERNAME=root
DB_PASSWORD=
```

Migrate the database:
```bash
php artisan migrate
```

Run the artisan serve command:
```bash
php artisan serve
```

Proceed to:
```bash
http://localhost:8000/products
```

**You need internet access to be able to link with the Bootstrap library.*

## License
This project is open-source and licensed under the [MIT](https://choosealicense.com/licenses/mit/)
