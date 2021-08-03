CONTAINER_NAME = ft_server_container
IMAGE_NAME = ft_server

all: run

run: build
	docker run -it --name $(CONTAINER_NAME) -p 80:80 -p 443:443 $(IMAGE_NAME)

build:
	docker build .. -t $(IMAGE_NAME)

clean: clean_c
	docker rmi $(IMAGE_NAME)

clean_c:
	docker rm $(CONTAINER_NAME)

autoindex_on:
	docker exec -it $(CONTAINER_NAME) sed -i 's/autoindex off/autoindex on/' /etc/nginx/sites-available/nginx_config
	docker exec -it $(CONTAINER_NAME) service nginx restart

autoindex_off:
	docker exec -it $(CONTAINER_NAME) sed -i 's/autoindex on/autoindex off/' /etc/nginx/sites-available/nginx_config
	docker exec -it $(CONTAINER_NAME) service nginx restart



