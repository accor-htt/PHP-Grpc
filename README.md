# PHP-Grpc
GRPC

https://cloud.google.com/php/grpc

sudo apt install php-pear

sudo apt install php-dev

sudo pecl install grpc

sudo apt-get install zlib1g-dev

sudo chown $(whoami) $(pecl config-get php_dir)

sudo apt install protobuf-compiler

---

install openswall

apt update
apt install -y software-properties-common && add-apt-repository ppa:ondrej/php -y
apt install -y software-properties-common && add-apt-repository ppa:openswoole/ppa -y
# choose one PHP version:
#apt install -y php7.4-openswoole
#apt install -y php8.0-openswoole
apt install -y php8.1-openswoole

Гайд по grpc_php_plugin
https://github.com/grpc/grpc/blob/v1.46.3/src/php/README.md

Spiral - https://github.com/spiral/php-grpc

---

GRPC GRPCUI получше узнать, что это (статья: https://russianblogs.com/article/40971758409/)

https://dev.to/khepin/building-a-grpc-server-in-php-3bgc - EXAMPLE WITH SPIRAL AND GO

---

MAIN CONCEPT: https://techdozo.dev/grpc-for-microservices-communication/#:~:text=A%20gRPC%20based%20RPC%20framework%20is%20a%20great%20choice%20for,used%20for%20defining%20gRPC%20APIs.