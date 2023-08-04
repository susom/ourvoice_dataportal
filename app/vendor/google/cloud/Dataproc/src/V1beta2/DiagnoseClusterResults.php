<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The location of diagnostic output.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.DiagnoseClusterResults</code>
 */
class DiagnoseClusterResults extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The Cloud Storage URI of the diagnostic output.
     * The output report is a plain text file with a summary of collected
     * diagnostics.
     *
     * Generated from protobuf field <code>string output_uri = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $output_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $output_uri
     *           Output only. The Cloud Storage URI of the diagnostic output.
     *           The output report is a plain text file with a summary of collected
     *           diagnostics.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The Cloud Storage URI of the diagnostic output.
     * The output report is a plain text file with a summary of collected
     * diagnostics.
     *
     * Generated from protobuf field <code>string output_uri = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getOutputUri()
    {
        return $this->output_uri;
    }

    /**
     * Output only. The Cloud Storage URI of the diagnostic output.
     * The output report is a plain text file with a summary of collected
     * diagnostics.
     *
     * Generated from protobuf field <code>string output_uri = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setOutputUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->output_uri = $var;

        return $this;
    }

}

