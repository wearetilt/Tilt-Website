# :bookmark_tabs: Content

---

**:high_brightness: [Development Installation](#ghost-development-installation)**  
:low_brightness: [Dependencies](#ghost-dependencies)  
:low_brightness: [Setup](#ghost-setup)  
&nbsp;&nbsp;&nbsp;&nbsp; :low_brightness: [Via Docker](#via-docker) <br/>
&nbsp;&nbsp;&nbsp;&nbsp; :low_brightness: [Via Apache](#via-apache)  
:low_brightness: [PhpStorm and Xdebug](#bug-phpstorm-and-xdebug)

---

---

# :ghost: Development Installation

---

---

## :ghost: Dependencies

To install this project you must have already installed on your machine.

- PHP 7.4
- Composer 1 https://getcomposer.org/
- Docker https://www.docker.com/community-edition
- Node (tested with version 10.0.0) https://nodejs.org/en/
- NPM (tested with version 7.6.3) https://www.npmjs.com/
- Ports required to be open on your machine, 80, 8443, 33061

---

## :ghost: `Setup`

### Via Docker

Pull the repository locally to your development machine.
There are 2 bash scripts `start.sh` and `stop.sh`.

To start the project run `./start.sh`. This script will do several things:

- To configure your system to use NFS (which should provide speed improvements in Docker), run the `./start.sh --c` script
- To configure your environment (development/staging/development), run `./start.sh --e=[ENVIRONMENT]`
- If run as `./start.sh --c` then the `dbdata`, and the docker images will be rebuilt.
- Install Node modules if the `./node_modules` folder does not exist
- Create a `.env` file if one does not exist, based off of the `.env.example` file.
- Start the docker containers to serve up the project locally.
- Create the default database if it does not exist (runs migrations).

Once the script completes, the project will be running.

- Web server will be available on https://localhost/
- MySQL server on localhost:33061

- If you are working in the front-end and want to automate your build in server when there is any change, run `npm run watch`. It detects a change, it'll re-build the browser-friendly file so you can just refresh the page.

To stop the project from running, run `./stop.sh`. You can run this script as `stop.sh -c` this will force deletion of your docker containers and images, creating a rebuild on the next build.

> :exclamation: **WARNING! `./stop.sh -c` will remove all unused docker images from your system, be sure you want to do this before using the -c flag.** :exclamation:
> Docker Database settings are as follows. The start.sh script will run the migrations for you:

- DB Host: diageo-responsible-driving-app_database
- DB Name: homestead
- DB User: homestead
- DB Password: secret

---

### Via Apache

Pull the repository locally to your development machine.

Set up your host & vhost to point to the public folder. See setting up your vhosts [here](https://wearetilt.atlassian.net/wiki/spaces/WATP/pages/70549512/How+to+-+Local+Apache+vhost+setup).

Copy the `.env.example.development` file in `.docker/templates/envs` and save it as `.env` in the root of the project.
Amend the following:

- APP_URL to the url that you set up in your vhost eg
  ```
  APP_URL="http://responsible-driving.codes/"
  ```
- The DB settings. They will be your local mysql settings and will be something like this:
  ```
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=rdapp (or whatever you wish to name it)
  DB_USERNAME=root
  DB_PASSWORD={your root password}
  ```

In your terminal at the root of your project, run:

- `composer install` to install composer dependencies
- `npm install` to install node modules
- `php artisan key:generate` to generate your application key
- `php artisan migrate --seed` to create and seed the local database

## :bug: `PhpStorm and Xdebug`

Setting up this project with Docker will also include the setup of Xdebug in the Docker app container, and will enable it, so no additional Xdebug setup will be required. Xdebug is best used in conjunction with PhpStorm, which will require a bit of configuration.

### :bug: Configuring PhpStorm:

#### :bug: Configure port to listen to:

- Open PhpStorm
- Go to Preferences > Debug
- Go to the Xdebug section
- Change the Debug Port to 9001
  ![image](https://user-images.githubusercontent.com/80678577/111811026-8a4ee980-88ce-11eb-881e-71a5276d3967.png)

#### :bug: Configure Server settings:

- Open PhpStorm
- Click 'Add Configuration...' in the toolbar

  ![image](https://user-images.githubusercontent.com/80678577/111807311-bc5e4c80-88ca-11eb-87f3-a9e285d2551c.png)

- In the subsequent pop-up, click the '+' icon in the top left
- Select 'PHP Remote Debug'

  ![image](https://user-images.githubusercontent.com/80678577/111807513-ec0d5480-88ca-11eb-93c1-7f74b5c3934d.png)

- You should then see the subsequent form:
  ![image](https://user-images.githubusercontent.com/80678577/111808500-faa83b80-88cb-11eb-954a-3b68bb15b10e.png)

- In the form above, set the following values:
  - Set 'Name' (fig. 1) to 'Tilt-Website'
  - Tick the 'Filter debug connection by IDE key' field (fig. 2)
  - Set 'IDE key' (fig. 3) to 'PHPSTORM'
- Click the '...' button to the right of the Server field (fig. 4)
- In the subsequent pop-up, click the '+' icon in the top left
- You should see something like the following:
  ![image](https://user-images.githubusercontent.com/80678577/111810025-79ea3f00-88cd-11eb-9270-4812e9f52fc2.png)
- In the above form, set the following values:
  - 'Name' (fig. 1): 'Tilt-Website'
  - 'Host' (fig. 2): 'Tilt-Website'
  - 'Port' (fig. 3): '443'
  - 'Use path mappings' (fig. 4): Checked
  - 'Path mappings' (fig. 5): Find root directory of project, and set 'Absolute path on the server' to '/var/www':
    ![image](https://user-images.githubusercontent.com/80678577/111810559-0eed3800-88ce-11eb-9547-4a26f412d45f.png)
- Click 'Apply' and 'Ok' to close the 'Servers' form
- Click 'Apply' and 'Ok' to close the 'Run/Debug Configurations' form

### :bug: Debugging:

If you've done the above correctly, CONGRATS, you're ready to start debugging with PhpStorm.

#### :bug: Start debugging!:

- Stick a breakpoint in the root index.php file by clicking on the margin next to the line you want to stop at:
  ![image](https://user-images.githubusercontent.com/80678577/111811273-ca15d100-88ce-11eb-888f-39d95698ef7a.png)
- Start listening for connections by clicking the following button in the toolbar:
  ![image](https://user-images.githubusercontent.com/80678577/111811749-490b0980-88cf-11eb-899d-236345de9b27.png)
- and then click this button:
  ![image](https://user-images.githubusercontent.com/80678577/111811883-6d66e600-88cf-11eb-8c5f-87f40f50205a.png)
- Visit `https://localhost`
- The page shouldn't load
- Go back to PhpStorm
- The code should be paused on the chosen breakpoint, with the line it's stopped on highlighted in blue
- Go to the 'Debug' window (fig. 1 below), and open the 'Debugger' tab (fig. 2 below)
  ![image](https://user-images.githubusercontent.com/80678577/111812675-44932080-88d0-11eb-9971-fb25cc6d86e2.png)
- You should be able to see all variables available in the current scope at the point that you put the breakpoint (fig. 3 above)
- From here, you can step through the code using the various controls available in the 'Debug' window in the above screenshot

#### :bug: Stop debugging!:

- Stop listening for connections by clicking the following button in the toolbar:
  ![image](https://user-images.githubusercontent.com/80678577/111811749-490b0980-88cf-11eb-899d-236345de9b27.png)
- and then click this button to disable debugging:
  ![image](https://user-images.githubusercontent.com/80678577/111811883-6d66e600-88cf-11eb-8c5f-87f40f50205a.png)
- then refresh your browser

Happy Debugging!
