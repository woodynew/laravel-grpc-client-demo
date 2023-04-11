<?php
// GENERATED CODE -- DO NOT EDIT!

namespace GrpcDemo;

/**
 */
class hiClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \GrpcDemo\HiUser $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function sayHello(\GrpcDemo\HiUser $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/GrpcDemo.hi/sayHello',
        $argument,
        ['\GrpcDemo\HiReply', 'decode'],
        $metadata, $options);
    }

}
