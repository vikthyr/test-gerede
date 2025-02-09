FROM nginx:alpine
RUN apk add apt
RUN apt-get update && apt-get upgrade -y
RUN rm /etc/nginx/conf.d/default.conf
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY . /usr/share/nginx/html
EXPOSE 80