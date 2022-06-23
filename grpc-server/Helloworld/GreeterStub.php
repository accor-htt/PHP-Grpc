<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Helloworld;

/**
 * The greeting service definition.
 */
class GreeterStub {

    /**
     * Sends a greeting
     * @param \Helloworld\HelloRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Helloworld\HelloReply for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SayHello(
        \Helloworld\HelloRequest $request,
        \Grpc\ServerContext $context
    ): ?\Helloworld\HelloReply {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * @param \Helloworld\ArrayDataRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Helloworld\ArrayDataResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function SayData(
        \Helloworld\ArrayDataRequest $request,
        \Grpc\ServerContext $context
    ): ?\Helloworld\ArrayDataResponse {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/helloworld.Greeter/SayHello' => new \Grpc\MethodDescriptor(
                $this,
                'SayHello',
                '\Helloworld\HelloRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
            '/helloworld.Greeter/SayData' => new \Grpc\MethodDescriptor(
                $this,
                'SayData',
                '\Helloworld\ArrayDataRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
