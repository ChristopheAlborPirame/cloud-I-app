FROM mysql:latest

# Copier le fichier de configuration personnalisé
COPY requirements/mysql/conf/my.cnf /etc/mysql/my.cnf
COPY requirements/mysql/conf/hosts /etc/hosts
COPY requirements/mysql/dump/* /
COPY requirements/mysql/tools/init.sh /init.sh

EXPOSE 3306
RUN chmod +x init.sh

ENTRYPOINT [ "./init.sh" ]

