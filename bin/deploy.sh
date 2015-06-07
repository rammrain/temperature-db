#!/bin/bash

# Absolute path to this script, e.g. /home/user/bin/foo.sh
SCRIPT=$(readlink -f "$0")
# Absolute path this script is in, thus /home/user/bin
SCRIPTPATH=$(dirname "$SCRIPT")
cd $SCRIPTPATH

cd ..

echo "#Start update";
echo "#Start pull";
git reset --hard;
git pull;

echo "#Start do composer self-update";
php ../composer.phar self-update

echo "#Start update composer";
php ../composer.phar install -o --no-dev

echo "#Start database schema update";
php public/index.php orm:schema-tool:update --force  --dump-sql
