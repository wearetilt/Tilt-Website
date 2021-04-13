#!/usr/bin/env bash

# Check command line parameters
CLEAN_CONTAINERS=false
while [ "$1" != "" ]; do
    case $1 in
        -c | --clean )   CLEAN_CONTAINERS=true
                         ;;
    esac
    shift
done

docker-compose down

if [[ "$CLEAN_CONTAINERS" == "true" ]]; then
    echo -e "\033[33mCLEAN\033[0m - Deleting the docker containers"
    docker system prune -f -a
fi
