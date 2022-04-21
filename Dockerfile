FROM ubuntu:22.04
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update -y
RUN apt-get install -y nginx php php-fpm

RUN service php8.1-fpm start
RUN service nginx start

ENTRYPOINT ["tail"]
CMD ["-f","/dev/null"]