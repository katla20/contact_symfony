# contact_symfony

test proyect contact form

Validate that a user (mail) cannot send more than 1 message per day

init service =>  symfony server:start

create database => php bin/console doctrine:database:create

create migrate database => php bin/console make:migration

create tables => php bin/console doctrine:migrations:migrate

init default data => console doctrine:fixtures:load
