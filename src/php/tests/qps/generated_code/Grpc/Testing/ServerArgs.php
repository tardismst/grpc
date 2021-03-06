<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/testing/control.proto

namespace Grpc\Testing;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grpc.testing.ServerArgs</code>
 */
class ServerArgs extends \Google\Protobuf\Internal\Message
{
    protected $argtype;

    public function __construct() {
        \GPBMetadata\Src\Proto\Grpc\Testing\Control::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.grpc.testing.ServerConfig setup = 1;</code>
     * @return \Grpc\Testing\ServerConfig
     */
    public function getSetup()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.grpc.testing.ServerConfig setup = 1;</code>
     * @param \Grpc\Testing\ServerConfig $var
     * @return $this
     */
    public function setSetup($var)
    {
        GPBUtil::checkMessage($var, \Grpc\Testing\ServerConfig::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grpc.testing.Mark mark = 2;</code>
     * @return \Grpc\Testing\Mark
     */
    public function getMark()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.grpc.testing.Mark mark = 2;</code>
     * @param \Grpc\Testing\Mark $var
     * @return $this
     */
    public function setMark($var)
    {
        GPBUtil::checkMessage($var, \Grpc\Testing\Mark::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getArgtype()
    {
        return $this->whichOneof("argtype");
    }

}

