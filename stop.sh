#!/usr/bin/env bash

# Check command line parameters
check_command_line_parameters() {
    for i in $ARGS; do
        case $i in
            --c | --clean-containers ) CLEAN_CONTAINERS=true ;;
            --v | --clean-volumes ) CLEAN_VOLUMES=true ;;
            --e=* | --environment=* )  ENVIRONMENT=${i#*=} ;;
        esac
    done
}

# Stop sync session
teardown_docker_mutagen_sync_session_stop() {
    if [ "$(get_operating_system)" == "osx" ]; then
        echo "  * STOPPING  mutagen SYNC SESSION"
        mutagen project terminate
    fi
}

teardown_docker_clean_containers() {
    if [[ "$CLEAN_CONTAINERS" == "true" ]]; then
        echo -e "\033[33mCLEAN\033[0m - Deleting the docker containers"
        docker system prune -f -a
    fi
}

teardown_docker() {
    if [[ "$CLEAN_VOLUMES" == "true" ]]; then
        echo -e "\033[33mCLEAN\033[0m - Deleting the docker containers and volumes"
        docker-compose down --volumes
    else
        echo -e "\033[33mCLEAN\033[0m - Deleting the docker containers"
        docker-compose down
    fi
}

# Get operating system
get_operating_system() {
    case "$OSTYPE" in
        darwin*)  echo "osx" ;;
        linux*)   echo "linux" ;;
        msys*)    echo "windows" ;;
        *)        echo "Unsupported: $OSTYPE" ;;
    esac
}

ARGS="$@"
CLEAN_CONTAINERS=false
CLEAN_VOLUMES=false
ENVIRONMENT=development

run() {
    check_command_line_parameters
    teardown_docker_mutagen_sync_session_stop
    teardown_docker_clean_containers
    teardown_docker
}

run