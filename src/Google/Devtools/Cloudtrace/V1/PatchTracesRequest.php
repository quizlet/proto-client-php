<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudtrace/v1/trace.proto

namespace Google\Devtools\Cloudtrace\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for the `PatchTraces` method.
 *
 * Protobuf type <code>Google\Devtools\Cloudtrace\V1\PatchTracesRequest</code>
 */
class PatchTracesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the Cloud project where the trace data is stored.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * The body of the message.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v1.Traces traces = 2;</code>
     */
    private $traces = null;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudtrace\V1\Trace::initOnce();
        parent::__construct();
    }

    /**
     * ID of the Cloud project where the trace data is stored.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * ID of the Cloud project where the trace data is stored.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;
    }

    /**
     * The body of the message.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v1.Traces traces = 2;</code>
     * @return \Google\Devtools\Cloudtrace\V1\Traces
     */
    public function getTraces()
    {
        return $this->traces;
    }

    /**
     * The body of the message.
     *
     * Generated from protobuf field <code>.google.devtools.cloudtrace.v1.Traces traces = 2;</code>
     * @param \Google\Devtools\Cloudtrace\V1\Traces $var
     */
    public function setTraces(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudtrace\V1\Traces::class);
        $this->traces = $var;
    }

}

