<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Helloworld;

/**
 * The greeting service definition.
 */
class GreeterClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Sends a greeting
     * @param \Helloworld\HelloRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SayHello(\Helloworld\HelloRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/helloworld.Greeter/SayHello',
        $argument,
        ['\Helloworld\HelloReply', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Helloworld\ArrayDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SayData(\Helloworld\ArrayDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/helloworld.Greeter/SayData',
        $argument,
        ['\Helloworld\ArrayDataResponse', 'decode'],
        $metadata, $options);
    }

}
