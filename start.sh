#!/usr/bin/env bash

############################
# PROJECT CONFIG FUNCS
############################

# Remove derived folders if CLEAN_FOLDERS is set to true
setup_project_clean_folders() {
  if [[ "$CLEAN_FOLDERS" == "true" ]]; then
    echo -e "\033[33mCLEAN\033[0m - Deleting the derived folders"
    rm -rf ./dbdata
  fi
}

# Create .env file if it doesn't exist
setup_project_create_env() {
  if [ ! -f ./.env ]; then
    cp ./.docker/config/envs/env.example.$ENVIRONMENT ./.env
  fi
}

# Create wp-config.php file if it doesn't exist
setup_project_create_wp_config() {
  if [ ! -f ./wp-config.php ]; then
      echo "* NO wp-config.php FILE, COPYING DEFAULT."
      cp ./wp-config-sample.php ./wp-config.php
  fi
}

# Configure and setup project
setup_project() {
  echo "* SETTING UP PROJECT ENVIRONMENT"
  setup_project_clean_folders
  setup_project_create_env
  setup_project_create_wp_config
}

############################
# DOCKER CONFIG FUNCS
############################

# Create the docker-compose.yml file if it doesn't exist
setup_docker_docker_compose_yml() {
    if [ ! -d ./.docker/config/docker-composes ]; then
        echo "  * CREATING ./.docker/config/docker-composes/ FOLDER"
        mkdir -p ./.docker/config/docker-composes
    fi

    if [ ! -f ./.docker/config/docker-composes/docker-compose.yml ]; then
        echo "  * CREATING docker-compose.yml FILE"
        cp ./.docker/templates/docker-composes/docker-compose.yml.example.$ENVIRONMENT.$(get_operating_system) ./.docker/config/docker-composes/docker-compose.yml
        sed -i "" 's/DOCKER_PROJECT_NAME/'"$(read_var DOCKER_PROJECT_NAME .env)"'/' ./.docker/config/docker-composes/docker-compose.yml
    fi

    if [ ! -f ./docker-compose.yml ]; then
        echo "  * CREATING docker-compose.yml FILE"
        cp ./.docker/config/docker-composes/docker-compose.yml ./docker-compose.yml
    fi
}


# Create the mutagen.yml file if it doesn't exist
setup_docker_mutagen_yml() {
    if [ "$(get_operating_system)" == "osx" ]; then
        if [ ! -d ./.docker/config/mutagens ]; then
            echo "  * CREATING ./.docker/config/mutagens/ FOLDER"
            mkdir -p ./.docker/config/mutagens
        fi

        if [ ! -f ./.docker/config/mutagens/mutagen.yml ]; then
            echo "  * CREATING ./.docker/config/mutagens/mutagen.yml FILE"
            cp ./.docker/templates/mutagens/mutagen.yml.example.$ENVIRONMENT ./.docker/config/mutagens/mutagen.yml
            sed -i "" 's/DOCKER_PROJECT_NAME/'"$(read_var DOCKER_PROJECT_NAME .env)"'/' ./.docker/config/docker-composes/docker-compose.yml
        fi

        if [ ! -f ./mutagen.yml ]; then
            echo "  * CREATING mutagen.yml FILE"
            cp ./.docker/config/mutagens/mutagen.yml ./mutagen.yml
        fi
    fi
}

# Create dockerfiles from templates if they don't already exist
setup_docker_dockerfiles() {
    if [ ! -d ./.docker/config/dockerfiles ]; then
        echo "  * CREATING ./.docker/config/dockerfiles/ FOLDER"
        mkdir -p ./.docker/config/dockerfiles
    fi

    if [ ! -f ./.docker/config/dockerfiles/app.dockerfile ]; then
        echo "  * CREATING app.dockerfile FILE"
        cp ./.docker/templates/dockerfiles/app.dockerfile.example.$ENVIRONMENT ./.docker/config/dockerfiles/app.dockerfile
    fi

    if [ ! -f ./.docker/config/dockerfiles/web.dockerfile ]; then
        echo "  * CREATING web.dockerfile FILE"
        cp ./.docker/templates/dockerfiles/web.dockerfile.example.$ENVIRONMENT ./.docker/config/dockerfiles/web.dockerfile
    fi

    if [ "$(get_operating_system)" == "osx" ]; then
        if [ ! -f ./.docker/config/dockerfiles/mutagen.dockerfile ]; then
            echo "  * CREATING mutagen.dockerfile FILE"
            cp ./.docker/templates/dockerfiles/mutagen.dockerfile.example.$ENVIRONMENT ./.docker/config/dockerfiles/mutagen.dockerfile
        fi
    fi
}

# Create certs info from templates if they don't already exist
setup_docker_certs() {
    if [ ! -d ./.docker/config/certs ]; then
        echo "  * CREATING ./.docker/config/certs/ FOLDER"
        mkdir -p ./.docker/config/certs
    fi

    if [ ! -f ./.docker/config/certs/README.md ]; then
        echo "  * CREATING README.md FILE"
        cp ./.docker/templates/certs/README.md.example.$ENVIRONMENT ./.docker/config/certs/README.md
    fi

    if [ ! -f ./.docker/config/certs/server.pem ]; then
        echo "  * CREATING server.pem FILE"
        cp ./.docker/templates/certs/server.pem.example.$ENVIRONMENT ./.docker/config/certs/server.pem
    fi

    if [ ! -f ./.docker/config/certs/server.crt ]; then
        echo "  * CREATING server.crt FILE, COPYING DEFAULT."
        cp ./.docker/templates/certs/server.crt.example.$ENVIRONMENT ./.docker/config/certs/server.crt
    fi
}

# Create and populate vhosts folder if it doesn't already exist
setup_docker_vhosts() {
    if [ ! -d ./.docker/config/vhosts ]; then
        echo "  * CREATING ./.docker/config/vhosts/ FOLDER"
        mkdir -p ./.docker/config/vhosts
    fi

    if [ ! -f ./.docker/config/vhosts/vhost.conf ]; then
        echo "  * CREATING vhost.conf FILE"
        cp ./.docker/templates/vhosts/vhost.conf.example.$ENVIRONMENT ./.docker/config/vhosts/vhost.conf
    fi
}

# Create and populate envs folder if it doesn't already exist
setup_docker_envs() {
    if [ ! -d ./.docker/config/envs ]; then
        echo "  * CREATING ./.docker/config/envs/ FOLDER"
        mkdir -p ./.docker/config/envs
    fi

    if [ ! -f ./.docker/config/envs/.env ]; then
        echo "  * CREATING .env FILE FOR ENVIRONMENT"
        cp ./.docker/templates/envs/.env.example.$ENVIRONMENT ./.docker/config/envs/.env
    fi

    if [ ! -f ./.env ]; then
        echo "  * CREATING .env FILE"
        cp ./.docker/config/envs/.env ./.env
    fi
}

# Create and populate extensions folder if it doesn't already exist
setup_docker_extensions() {
    if [ ! -d ./.docker/config/extensions ]; then
        echo "  * CREATING ./.docker/config/extensions/ FOLDER"
        mkdir -p ./.docker/config/extensions
    fi

    if [ ! -f ./.docker/config/extensions/xdebug.ini ]; then
        echo "  * CREATING xdebug.ini FILE"
        cp ./.docker/templates/extensions/xdebug.ini.example.$ENVIRONMENT ./.docker/config/extensions/xdebug.ini
    fi
}

# Installs mutagen if OS is OSX
setup_docker_mutagen_setup() {
    if [ "$(get_operating_system)" == "osx" ]; then
        echo "  * INSTALLING  mutagen"
        brew install mutagen-io/mutagen/mutagen
    fi
}

# Start sync session
setup_docker_mutagen_sync_session_start() {
    if [ "$(get_operating_system)" == "osx" ]; then
        echo "  * STARTING  mutagen SYNC SESSION"
        mutagen project start
    fi
}

# Populate and create various docker files based on templates if they don't already exist
setup_docker() {
    echo "* SETTING UP DOCKER ENVIRONMENT"
    setup_docker_envs
    setup_docker_mutagen_setup
    setup_docker_dockerfiles
    setup_docker_mutagen_yml
    setup_docker_docker_compose_yml
    setup_docker_certs
    setup_docker_vhosts
    setup_docker_extensions
}

############################
# MISC FUNCS
############################

# Read a .env variable
read_var() {
    VAR=$(grep -w $1 $2 | xargs)
    IFS="=" read -ra VAR <<< "$VAR"
    echo ${VAR[1]}
}

# Check command line parameters
check_command_line_parameters() {
    for i in $ARGS; do
        case $i in
            --c | --clean ) CLEAN_FOLDERS=true ;;
            --n | --nfs_setup )  NFS_SETUP=true ;;
            --e=* | --environment=* )  ENVIRONMENT=${i#*=} ;;
        esac
    done
}

# Stop container
stop_container() {
    ./stop.sh
}

# Start container
start_container() {
    if [[ "$CLEAN_FOLDERS" == "true" ]]; then
        docker-compose up -d --build
    else
        docker-compose up -d
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


############################
# RUN SCRIPT
############################

ARGS="$@"
SUDO_ACCESS=""
IS_LINUX=false
CLEAN_FOLDERS=false
ENVIRONMENT="development"

run() {
    check_command_line_parameters
    setup_docker
    stop_container
    setup_project
    start_container
    setup_docker_mutagen_sync_session_start

    echo "* PLEASE CHECK README.md FOR SETUP INSTRUCTIONS"
    echo "* APP READY on $(read_var APP_URL .env)"
    echo " * READY TO GO! :)"
    echo "  ./stop.sh will stop the docker containers."
}

run
