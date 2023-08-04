<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/jobs.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to update a job.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.UpdateJobRequest</code>
 */
class UpdateJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the Google Cloud Platform project that the job
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project_id = '';
    /**
     * Required. The Cloud Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';
    /**
     * Required. The job ID.
     *
     * Generated from protobuf field <code>string job_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $job_id = '';
    /**
     * Required. The changes to the job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.Job job = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $job = null;
    /**
     * Required. Specifies the path, relative to <code>Job</code>, of
     * the field to update. For example, to update the labels of a Job the
     * <code>update_mask</code> parameter would be specified as
     * <code>labels</code>, and the `PATCH` request body would specify the new
     * value. <strong>Note:</strong> Currently, <code>labels</code> is the only
     * field that can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. The ID of the Google Cloud Platform project that the job
     *           belongs to.
     *     @type string $region
     *           Required. The Cloud Dataproc region in which to handle the request.
     *     @type string $job_id
     *           Required. The job ID.
     *     @type \Google\Cloud\Dataproc\V1beta2\Job $job
     *           Required. The changes to the job.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Specifies the path, relative to <code>Job</code>, of
     *           the field to update. For example, to update the labels of a Job the
     *           <code>update_mask</code> parameter would be specified as
     *           <code>labels</code>, and the `PATCH` request body would specify the new
     *           value. <strong>Note:</strong> Currently, <code>labels</code> is the only
     *           field that can be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the Google Cloud Platform project that the job
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The ID of the Google Cloud Platform project that the job
     * belongs to.
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The Cloud Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Required. The Cloud Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * Required. The job ID.
     *
     * Generated from protobuf field <code>string job_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * Required. The job ID.
     *
     * Generated from protobuf field <code>string job_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

    /**
     * Required. The changes to the job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.Job job = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1beta2\Job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Required. The changes to the job.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.Job job = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1beta2\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1beta2\Job::class);
        $this->job = $var;

        return $this;
    }

    /**
     * Required. Specifies the path, relative to <code>Job</code>, of
     * the field to update. For example, to update the labels of a Job the
     * <code>update_mask</code> parameter would be specified as
     * <code>labels</code>, and the `PATCH` request body would specify the new
     * value. <strong>Note:</strong> Currently, <code>labels</code> is the only
     * field that can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Required. Specifies the path, relative to <code>Job</code>, of
     * the field to update. For example, to update the labels of a Job the
     * <code>update_mask</code> parameter would be specified as
     * <code>labels</code>, and the `PATCH` request body would specify the new
     * value. <strong>Note:</strong> Currently, <code>labels</code> is the only
     * field that can be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

