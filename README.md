<p align="center">
  <a href="https://github.com/github_username/repo_name">
    <img src="assets/img/logo.png" alt="Logo" height="80">
  </a>

  <h3 align="center">DOTIMER</h3>

  <p align="center">
    A way to register work time of your employs and metric their productivity
    <br />
    <a href="https://github.com/github_username/repo_name"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/github_username/repo_name">View Demo</a>
    ·
    <a href="https://github.com/github_username/repo_name/issues">Report Bug</a>
    ·
    <a href="https://github.com/github_username/repo_name/issues">Request Feature</a>
  </p>
</p>

<details open="open">
  <summary><h2 style="display: inline-block">Table of Contents</h2></summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
        <li><a href="#hardware-used">Hardware used</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#getting-started">Getting Started</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">What i learning with project?</a></li>
  </ol>
</details>

## About The Project

This is my project for **embedded systems** course of graduation in Software Engineering taught by Professor [João Evangelista](link). This scope is based in a embedded system to control entry and exit time of employs and registry their **time sheet**.

The project architecture are composed of a `Arduino UNO` to registry the entries of a employ and send the value of `RFID card` to server. Once the data are receiver in back-end, write with `PHP`, are persisted in database `MySQL`. The data can be access in front-end application, write with `HTML` and `Bootstrap`.

You can use **dotimer** without embedded systems, however you can use another hardware to capture entries <a href="https://github.com/github_username/repo_name">**explore the docs for this»**</a>.

### Built With

* [Vanilla PHP](https://www.php.net/)
* [MySQL](https://mariadb.org/)
* [Bootstrap](https://getbootstrap.com/docs/4.6/getting-started/introduction/)

### Hardware used 

* Arduino UNO
* RFID RC522
* Ethernet Shield W5100

## Getting Started

This is an example of how you may give instructions on setting up your project locally. To get a local copy up and running follow these simple example steps.

### Prerequisites
 
After install [PHP](https://www.php.net/), [MySQL](https://mariadb.org/) and a web server <small>e.g Apache Server</small>, you must follow this steps to configure application.

1. Run the script SQL into `./database/script.sql` to create your database.
2. Install npm package
```
npm install
```
3. Set config in `.env` file
```
USER=root
PASSWORD=
```

## License

Distributed under the MIT License.

## Contact

* João Victor | costa.jvsc@gmail.com