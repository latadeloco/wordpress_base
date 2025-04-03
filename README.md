# WordPress 6.7.2 with docker

It is a base template for Wordpress projects (v6.7.2) in dockerised environments. It is a MIT licensed project.

## Tabla de Contenidos
- [Requeriments](#requeriments)
- [Go to working](#go-to-working)
- [Makefile](#makefile)
- [Contact](#contact)

## Características
- Lista de las funcionalidades principales
- Ejemplo: "Autenticación de usuarios con JWT"
- Ejemplo: "API RESTful con Express.js"

## Requeriments

- Docker [**installed**](https://docs.docker.com/engine/install/).
- Make' tool installed on your O.S. [Windows make](https://gnuwin32.sourceforge.net/packages/make.htm)
- Free port 8080 (nginx), 9000 (fpm), 3306 (bbdd-mysql).

## Go to working

```bash
git clone https://github.com/latadeloco/wordpress_base.git
cd wordpres_base
make build
make start
```

## Makefile

If you kn
```sh
build # Compose docker structure 
start # Up all containers
stop # Down all containers
logs # Logger nginx
status # Observe the containers that are lifted
exec # Entering a container
```

## Contact
- LinkedIn: [**Jesús Robles Sánchez**](https://www.linkedin.com/in/jes%C3%BAs-robles-s%C3%A1nchez-489086aa/)
- Website: [**Personal website**](https://jesusrobles.es)