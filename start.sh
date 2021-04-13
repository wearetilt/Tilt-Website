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
    echo "* ENCRYPTION KEY SET IN .env FILE. PLEASE BACK THIS UP AS YOU WILL NEED IT TO RECOVER ANY DATA IN AN EMERGENCY."
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
  echo "  * POPULATING ./docker-compose.yml FILE"
  if [ ! -f ./docker-compose.yml ]; then
    echo "    * NO docker-compose.yml FILE, COPYING DEFAULT."
    cp ./.docker/templates/docker-composes/docker-compose.yml.example.$(get_operating_system) ./docker-compose.yml
  fi
}

# Create dockerfiles from templates if they don't already exist
setup_docker_dockerfiles() {
  echo "  * POPULATING ./.docker/config/dockerfiles/ FOLDER"
  if [ ! -d ./.docker/config/dockerfiles ]; then
    mkdir -p ./.docker/config/dockerfiles
  fi

  if [ ! -f ./.docker/config/dockerfiles/app.dockerfile ]; then
    echo "    * NO app.dockerfile FILE, COPYING DEFAULT."
    cp ./.docker/templates/dockerfiles/app.dockerfile.example.$ENVIRONMENT ./.docker/config/dockerfiles/app.dockerfile
  fi

  if [ ! -f ./.docker/config/dockerfiles/web.dockerfile ]; then
    echo "    * NO web.dockerfile FILE, COPYING DEFAULT."
    cp ./.docker/templates/dockerfiles/web.dockerfile.example.$ENVIRONMENT ./.docker/config/dockerfiles/web.dockerfile
  fi
}

# Create certs info from templates if they don't already exist
setup_docker_certs() {
  echo "  * POPULATING ./.docker/config/certs/ FOLDER"
  if [ ! -d ./.docker/config/certs ]; then
    mkdir -p ./.docker/config/certs
  fi

  if [ ! -f ./.docker/config/certs/README.md ]; then
    echo "    * NO README.md FILE, COPYING DEFAULT."
    cp ./.docker/templates/certs/README.md.example ./.docker/config/certs/README.md
  fi

  if [ ! -f ./.docker/config/certs/server.pem ]; then
    echo "    * NO server.pem FILE, COPYING DEFAULT."
    cp ./.docker/templates/certs/server.pem.example ./.docker/config/certs/server.pem
  fi

  if [ ! -f ./.docker/config/certs/server.crt ]; then
    echo "    * NO server.crt FILE, COPYING DEFAULT."
    cp ./.docker/templates/certs/server.crt.example ./.docker/config/certs/server.crt
  fi
}

# Create and populate vhosts folder if it doesn't already exist
setup_docker_vhosts() {
  echo "  * POPULATING ./.docker/config/vhosts/ FOLDER"
  if [ ! -d ./.docker/config/vhosts ]; then
    mkdir -p ./.docker/config/vhosts
  fi

  if [ ! -f ./.docker/config/vhosts/vhost.conf ]; then
    echo "    * NO vhost.conf FILE, COPYING DEFAULT."
    cp ./.docker/templates/vhosts/vhost.conf.example.$ENVIRONMENT ./.docker/config/vhosts/vhost.conf
  fi
}

# Create and populate envs folder if it doesn't already exist
setup_docker_envs() {
  echo "  * POPULATING ./.docker/config/envs/ FOLDER"
  if [ ! -d ./.docker/config/envs ]; then
    mkdir -p ./.docker/config/envs
  fi

  if [ ! -f ./.docker/config/envs/.env ]; then
    echo "    * NO .env FILE FOR ENVIRONMENT, COPYING DEFAULT."
    cp ./.docker/templates/envs/.env.example.$ENVIRONMENT ./.docker/config/envs/.env
  fi

  if [ ! -f ./.env ]; then
    echo "    * NO .env FILE, COPYING DEFAULT."
    cp ./.docker/config/envs/.env ./.env
  fi
}

# Create and populate extensions folder if it doesn't already exist
setup_docker_extensions() {
  echo "  * POPULATING ./.docker/config/extensions/ FOLDER"
  if [ ! -d ./.docker/config/extensions ]; then
    mkdir -p ./.docker/config/extensions
  fi

  if [ ! -f ./.docker/config/extensions/xdebug.ini ]; then
    echo "    * NO xdebug.ini FILE, COPYING DEFAULT."
    cp ./.docker/templates/extensions/xdebug.ini.example ./.docker/config/extensions/xdebug.ini
  fi
}

# Set up NFS if the NFS_SETUP flag is set to true
setup_docker_nfs() {
  if [[ "$NFS_SETUP" == "true" ]]; then
    ./.docker/scripts/nfs-setup.sh
  fi
}

# Populate and create various docker files based on templates if they don't already exist
setup_docker() {
  echo "* SETTING UP DOCKER ENVIRONMENT"
  setup_docker_dockerfiles
  setup_docker_docker_compose_yml
  setup_docker_certs
  setup_docker_vhosts
  setup_docker_extensions
  setup_docker_envs
  setup_docker_nfs
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
NFS_SETUP=false
ENVIRONMENT="development"

run() {
    check_command_line_parameters
    setup_docker
    stop_container
    setup_project
    start_container

    echo "* PLEASE CHECK README.md FOR SETUP INSTRUCTIONS"
    echo "* APP READY on $(read_var APP_URL .env)"
    echo " * READY TO GO! :)"
    echo "  ./stop.sh will stop the docker containers."
}

run