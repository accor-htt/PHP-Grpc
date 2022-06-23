<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Helloworld;

/**
 */
class DeliveryClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Helloworld\DeliveryDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMaxUsers(\Helloworld\DeliveryDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/helloworld.Delivery/GetMaxUsers',
        $argument,
        ['\Helloworld\DeliveryDataResponse', 'decode'],
        $metadata, $options);
    }

}
