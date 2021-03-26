#!/usr/bin/env bash

./stop.sh

read_var() {
     VAR=$(grep -w $1 $2 | xargs)
     IFS="=" read -ra VAR <<< "$VAR"
     echo ${VAR[1]}
}

# Check command line parameters
CLEAN_FOLDERS=false
while [ "$1" != "" ]; do
    case $1 in
        -c | --clean )   CLEAN_FOLDERS=true
                         ;;
    esac
    shift
done

if [ ! -f ./.env ]; then
    echo "* NO .env FILE, COPYING DEFAULT."
    cp ./.env.example ./.env
fi

if [ ! -f ./wp-config.php ]; then
    echo "* NO wp-config.php FILE, COPYING DEFAULT."
    cp ./wp-config-sample.php ./wp-config.php
fi

if [[ "$CLEAN_FOLDERS" == "true" ]]; then
    docker-compose up -d --build
else
    docker-compose up -d
fi
