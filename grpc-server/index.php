<?php

require dirname(__FILE__) . '/vendor/autoload.php';
require dirname(__FILE__) . '/Helloworld/GreeterStub.php';
require dirname(__FILE__) . '/Helloworld/HelloRequest.php';
require dirname(__FILE__) . '/Helloworld/HelloReply.php';
require dirname(__FILE__) . '/GPBMetadata/Grpc.php';

class Greeter extends Helloworld\GreeterStub
{
    public function SayHello(
        \Helloworld\HelloRequest $request,
        \Grpc\ServerContext $serverContext
    ): ?\Helloworld\HelloReply {
        $name = $request->getName();
        $response = new \Helloworld\HelloReply();
        $response->setMessage("Hello " . $name);
        return $response;
    }
}

print_r('START_SERVER');
$server = new \Grpc\RpcServer();
$server->addHttp2Port('0.0.0.0:50051');
$server->handle(new Greeter());
$server->run();
