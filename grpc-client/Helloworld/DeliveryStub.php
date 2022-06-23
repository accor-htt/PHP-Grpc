<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Helloworld;

/**
 */
class DeliveryStub {

    /**
     * @param \Helloworld\DeliveryDataRequest $request client request
     * @param \Grpc\ServerContext $context server request context
     * @return \Helloworld\DeliveryDataResponse for response data, null if if error occured
     *     initial metadata (if any) and status (if not ok) should be set to $context
     */
    public function GetMaxUsers(
        \Helloworld\DeliveryDataRequest $request,
        \Grpc\ServerContext $context
    ): ?\Helloworld\DeliveryDataResponse {
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
            '/helloworld.Delivery/GetMaxUsers' => new \Grpc\MethodDescriptor(
                $this,
                'GetMaxUsers',
                '\Helloworld\DeliveryDataRequest',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
