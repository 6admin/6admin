# 6admin Server Management

**Currently EXPERIMENTAL**

6admin is a CLI web server management application built on Laravel with a Modular and Flexible approach.

## Installation

Automated installation on fresh installation :

 * Ubuntu 16.04 : `curl -sS https://raw.githubusercontent.com/6admin/installer/master/ubuntu-16.04/installer.sh | sudo bash`

## Available Modules

 * **System**
  * `list users`
  * `create user {name} {--password=} {--home=} {--group=}`
  * `delete user {--files=}`

## Philosophy

The goal of this application is to bring you a **flexible** and **modular** admin tool for web service administration (like `nginx`, `apache`, `php`, `mysql`, `maria` ...). 6admin is suitable for personnal and small hosting services (maybe bigger in futures releases).

 * **Flexible** : You can change all default values and behaviours based on custom json files and config templates.
 * **Modular** : One simple module per service. You know Laravel and want to create your own module ? No problem !
 * **CLI Based** : All actions are built around a solid CLI interface.

### Resource based CLI

With the resource approach (like REST), the CLI is easy to use and understand.

All commands are composed by `six` and :
 * An **Action**, eg :  `list`, `create`, `update`, `delete`
 * A **Target**, eg : `user`, `nginx.zone`, `mysql.user`, `letsencrypt.ssl`
 * **Parameters** listed by adding `-h` (help) after your command.

## Roadmap

This is the beginning of the project, so there is work to bring all the required features for a full server administration. Below the roadmap of the project :

- [x] Build the Modular skeleton of the application - [Done !](https://github.com/6admin/6admin)
- [x] Create an automated installation script for Ubuntu 16.04 - [Done !](https://github.com/6admin/installer)
- [ ] **System Module - (`User (unix)` resource)**
- [ ] Nginx Module (`Zones` resource)
- [ ] PHP Module (`Pools` resource)
- [ ] Mysql/Maria Module (`Database` and `Users` resources)
- [ ] Hosting Meta Module (`Website` resource)
- [ ] Letsencrypt Module (`SSL` resource)

Side tasks :
- [ ] Work on Flexibility (default values on repositories)
- [ ] Web API wrapper for all CLI commands
- [ ] Web interface connected to the API (Ideally build with vuejs with laravel echo)

Around the project :
- [ ] Work on a visual identity
- [ ] Create a website and a easy to use documentation

## Contribute!

This project is young and any help will be apreciated. I am searching for :

 * **Modules development** : A kind Laravel developer with sysadmin Knowledge :)
 * **Visual identity / Website** : A kind Web designer for a logo ... ? :) 

## License

The 6admin server manager is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
