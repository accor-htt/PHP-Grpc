PLUGIN=protoc-gen-grpc=plugins/grpc_php_plugin

protoc --php_out=./grpc-client \
       --grpc_out=generate_server:./grpc-client \
       --plugin=$PLUGIN grpc.proto