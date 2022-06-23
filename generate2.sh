PLUGIN=protoc-gen-grpc=plugins/grpc_php_plugin
SERVER=./grpc-server
CLIENT=./grpc-client

protoc --php_out=$CLIENT \
       --grpc_out=generate_server:$CLIENT \
       --plugin=$PLUGIN grpc.proto

protoc --php_out=$SERVER \
       --grpc_out=generate_server:$SERVER \
       --plugin=$PLUGIN grpc.proto
