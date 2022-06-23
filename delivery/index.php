<?php

class Delivery extends \Helloworld\DeliveryStub
{
    public function GetMaxUsers(DeliveryDataRequest $request, \Grpc\ServerContext $context): ?\Helloworld\DeliveryDataResponse
    {
        $hostname = 'localhost:50051';

        $client = new Helloworld\GreeterClient($hostname, [
            'credentials' => Grpc\ChannelCredentials::createInsecure(),
        ]);

        $new_request = new \Helloworld\ArrayDataRequest();
        $new_request->setKey('max_sum');
        list ($response, $status) = $client->SayData($new_request)->wait();
        if ($status->code !== Grpc\STATUS_OK) {
            echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
            exit(1);
        }

        $result = $request->getCoef() * $response->getMaxClient();
        $response = new \Helloworld\DeliveryDataResponse();
        $response->setMaxSum($result);

        return $response;
    }
}