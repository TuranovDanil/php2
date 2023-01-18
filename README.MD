# Simple Space
Workspace with web-server, php, mariadb, node

## 1. Install project
*Note: for the work, you must have git installed*

Clone the repository

`git clone https://github.com/jurapro/apache-php-mysql-node`

## 2. Project settings
*Note: settings are in .env file*

| Argument | Description |
| -----|------|
| USER_LOGIN | User login. Used to set the owner of the files in the container, access via ssh, as a database access login |
| USER_PASSWORD | User password. Used to access via ssh and db |
| DB_NAME | Database name for the created user |
| USER_DB_PASSWORD | Database administrator password (administrator login - root) |
| SSH_PORT | Ssh port |
| WEB_PORT | Web-server port |
| SERVER_NAME | Server hostname  |
| LARAVEL | Flag for the need to install the framework (default false) |
| YII | Flag for the need to install the framework (default false) |
| VUE | Flag for the need to install the framework (default false) |
| REACT | Flag for the need to install the framework (default false) |
| ANGULAR | Flag for the need to install the framework (default false) |

## 2. Run project
*Note: for the project to work, you must have docker and docker-compose installed*
*Note: Run inside the project directory*

`docker-compose up -d`
