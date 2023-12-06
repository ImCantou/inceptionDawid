NAME = inception

COMPOSEFILE = srcs/docker-compose.yml

COMPOSE = docker compose

SERVICES = mariadb nginx wordpress

all: $(NAME)

$(NAME):
	mkdir -p /home/qcherel/data/wordpress
	mkdir -p /home/qcherel/data/mariadb
	$(COMPOSE) -f $(COMPOSEFILE) build
	$(COMPOSE) -f $(COMPOSEFILE) up -d

stop:
	$(COMPOSE) -f $(COMPOSEFILE) stop $(SERVICES)

clean: stop
	@docker system prune -af --volumes
	@docker volume ls -q | xargs -r docker volume rm -f
	@sudo rm -rf /home/qcherel/data


re: clean all

.PHONY: all clean re stop

.SILENT: all clean re stop
