<div align="center">
  <h1>IT Assets Manager🖥️🕹️📝</h1>
  <p> Web aplication to manage internal departaments IT assets </p>
</div>

# About
<p>It's a project that i've had the opportunity to develop in my current intership, the goal is to be able to manage in a CRUD web aplication all the data about the assets of the IT departament of the company. We already had an older/"legacy" database but at the time the personnels utilized that SGBD they didn't have any rules or constraints about how the data should be named neither a pattern to follow when adding a new record, so the information became really confuse when they were trying to query by a specific field or condition, because there was no consistency in the names.<br>
<br>
Sumarizing, that older SGBD and database ended up being discontinued but our company still had access to the data file, so i got to retrieve this data, clean it up, filter it, rename the data and stablish a pattern in order to utilize and import the information into the new database and SGBD. And i used Python🐍 to complete this "sidequest"📜 </p>

<div align="center">
  <img src="https://github.com/baronemarbles/Portifolio_vue/blob/main/src/assets/telas_app-Dispositivos/login.png?raw=true" width="700px"/>
  <div>
    <img src="https://github.com/baronemarbles/Portifolio_vue/blob/main/src/assets/telas_app-Dispositivos/pagina_registrar.png?raw=true" width="700px"/>
    <img src="https://github.com/baronemarbles/Portifolio_vue/blob/main/src/assets/telas_app-Dispositivos/pagina_buscar.png?raw=true" width="700px"/>
  </div>
</div>

# 🚀Technologies
<ul>
  <li>PHP</li>
  <li>CSS</li>
  <li>MariaDB</li>
  <li>Apache</li>
  <li>Docker</li>
</ul>

## Getting started
### Requirements
 - <a href="https://docs.docker.com/desktop/setup/install/windows-install/">Docker Desktop</a>

 ### Installing and running the project
*Clone the repository and change the directory to its folder*

```bash
$ git clone git@github.com:baronemarbles/Intership-Website-DB-Project_.git
$ cd Intership-website-DB-project_

#Make the ".env" file and set the environment variables
$ mk .env
$ vi .env
#IN THE VI OR VIM FILE EDITOR -> hit 'i' key to enter in "insert" mode so you can actually type into the file
DB_HOST=db #If you changed the docker-compose file and altered the name of the database service, then put the new name here
DB_DATABASE=your_database_name
DB_USER=your_normal_user_username
DB_PASSWORD=normal_user_password
DB_ROOT_PASSWORD=root_user_password #the user for the root is "root". Other than that, make sure your root password is really strong

#hit 'esc' + ":wq" and hit enter to save the file

#Now that you have all setted up, let's get docker running
$ docker compose up --build -d #This will build the images, create the services, network and volume into the container

```

### Accessing the application
<p>Go to "localhost:8080" in your web browser to access the application</p>
<p>In order to go to the SGBD and manage the database, tables etc. Hit "localhost:8081"</p>
