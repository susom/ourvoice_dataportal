<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/jobs.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to list jobs in a project.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.ListJobsRequest</code>
 */
class ListJobsRequest extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string region = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $region = '';
    /**
     * Optional. The number of results to return in each response.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * Optional. The page token, returned by a previous call, to request the
     * next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Optional. If set, the returned jobs list includes only jobs that were
     * submitted to the named cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 4;</code>
     */
    private $cluster_name = '';
    /**
     * Optional. Specifies enumerated categories of jobs to list.
     * (default = match ALL jobs).
     * If `filter` is provided, `jobStateMatcher` will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ListJobsRequest.JobStateMatcher job_state_matcher = 5;</code>
     */
    private $job_state_matcher = 0;
    /**
     * Optional. A filter constraining the jobs to list. Filters are
     * case-sensitive and have the following syntax:
     * [field = value] AND [field [= value]] ...
     * where **field** is `status.state` or `labels.[KEY]`, and `[KEY]` is a label
     * key. **value** can be `*` to match all values.
     * `status.state` can be either `ACTIVE` or `NON_ACTIVE`.
     * Only the logical `AND` operator is supported; space-separated items are
     * treated as having an implicit `AND` operator.
     * Example filter:
     * status.state = ACTIVE AND labels.env = staging AND labels.starred = *
     *
     * Generated from protobuf field <code>string filter = 7;</code>
     */
    private $filter = '';

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
     *     @type int $page_size
     *           Optional. The number of results to return in each response.
     *     @type string $page_token
     *           Optional. The page token, returned by a previous call, to request the
     *           next page of results.
     *     @type string $cluster_name
     *           Optional. If set, the returned jobs list includes only jobs that were
     *           submitted to the named cluster.
     *     @type int $job_state_matcher
     *           Optional. Specifies enumerated categories of jobs to list.
     *           (default = match ALL jobs).
     *           If `filter` is provided, `jobStateMatcher` will be ignored.
     *     @type string $filter
     *           Optional. A filter constraining the jobs to list. Filters are
     *           case-sensitive and have the following syntax:
     *           [field = value] AND [field [= value]] ...
     *           where **field** is `status.state` or `labels.[KEY]`, and `[KEY]` is a label
     *           key. **value** can be `*` to match all values.
     *           `status.state` can be either `ACTIVE` or `NON_ACTIVE`.
     *           Only the logical `AND` operator is supported; space-separated items are
     *           treated as having an implicit `AND` operator.
     *           Example filter:
     *           status.state = ACTIVE AND labels.env = staging AND labels.starred = *
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
     * Generated from protobuf field <code>string region = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Required. The Cloud Dataproc region in which to handle the request.
     *
     * Generated from protobuf field <code>string region = 6 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. The number of results to return in each response.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The number of results to return in each response.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. The page token, returned by a previous call, to request the
     * next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The page token, returned by a previous call, to request the
     * next page of results.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. If set, the returned jobs list includes only jobs that were
     * submitted to the named cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 4;</code>
     * @return string
     */
    public function getClusterName()
    {
        return $this->cluster_name;
    }

    /**
     * Optional. If set, the returned jobs list includes only jobs that were
     * submitted to the named cluster.
     *
     * Generated from protobuf field <code>string cluster_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterName($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_name = $var;

        return $this;
    }

    /**
     * Optional. Specifies enumerated categories of jobs to list.
     * (default = match ALL jobs).
     * If `filter` is provided, `jobStateMatcher` will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ListJobsRequest.JobStateMatcher job_state_matcher = 5;</code>
     * @return int
     */
    public function getJobStateMatcher()
    {
        return $this->job_state_matcher;
    }

    /**
     * Optional. Specifies enumerated categories of jobs to list.
     * (default = match ALL jobs).
     * If `filter` is provided, `jobStateMatcher` will be ignored.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1beta2.ListJobsRequest.JobStateMatcher job_state_matcher = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setJobStateMatcher($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1beta2\ListJobsRequest_JobStateMatcher::class);
        $this->job_state_matcher = $var;

        return $this;
    }

    /**
     * Optional. A filter constraining the jobs to list. Filters are
     * case-sensitive and have the following syntax:
     * [field = value] AND [field [= value]] ...
     * where **field** is `status.state` or `labels.[KEY]`, and `[KEY]` is a label
     * key. **value** can be `*` to match all values.
     * `status.state` can be either `ACTIVE` or `NON_ACTIVE`.
     * Only the logical `AND` operator is supported; space-separated items are
     * treated as having an implicit `AND` operator.
     * Example filter:
     * status.state = ACTIVE AND labels.env = staging AND labels.starred = *
     *
     * Generated from protobuf field <code>string filter = 7;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Optional. A filter constraining the jobs to list. Filters are
     * case-sensitive and have the following syntax:
     * [field = value] AND [field [= value]] ...
     * where **field** is `status.state` or `labels.[KEY]`, and `[KEY]` is a label
     * key. **value** can be `*` to match all values.
     * `status.state` can be either `ACTIVE` or `NON_ACTIVE`.
     * Only the logical `AND` operator is supported; space-separated items are
     * treated as having an implicit `AND` operator.
     * Example filter:
     * status.state = ACTIVE AND labels.env = staging AND labels.starred = *
     *
     * Generated from protobuf field <code>string filter = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

}

