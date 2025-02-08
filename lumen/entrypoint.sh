#!/bin/bash
php artisan migrate --force
exec "$@"