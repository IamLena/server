CREATE DATABASE wordpress;

CREATE USER wordpress@localhost;
SET PASSWORD FOR wordpress@localhost = PASSWORD('wordpress');
GRANT ALL PRIVILEGES ON wordpress.* TO  wordpress@localhost;
FLUSH PRIVILEGES;
