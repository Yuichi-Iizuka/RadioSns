FROM mysql:8.0

ENV MYSQL_DATABASE=radiosns \
  MYSQL_USER=phper \
  MYSQL_PASSWORD=P@ssw0rd \
  MYSQL_ROOT_PASSWORD=P@ssw0rd \
  TZ=Asia/Tokyo

COPY ./my.cnf /etc/mysql/conf.d/my.cnf
RUN chmod 644 /etc/mysql/conf.d/my.cnf