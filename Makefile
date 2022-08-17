
ifeq (,$(shell grep ldenis /etc/hosts))
_ := $(shell sudo bash -c '/bin/echo "127.0.0.1 ldenis.42.fr" >> /etc/hosts')
endif

all :
	sudo mkdir -p /home/ldenis/data/wordpress
	sudo mkdir -p /home/ldenis/data/database
	@ docker-compose up --build

up :
	@ docker-compose -f ./docker-compose.yml up -d --build

stop :
	@ docker-compose -f ./docker-compose.yml stop

down :
	@ docker-compose -f ./docker-compose.yml down

clean :
	bash ./clean.sh

prune :
	@ docker system prune

ps :
	@ docker-compose -f ./docker-compose.yml ps
