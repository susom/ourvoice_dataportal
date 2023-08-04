<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Intents.ListIntents][google.cloud.dialogflow.v2.Intents.ListIntents].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ListIntentsRequest</code>
 */
class ListIntentsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The agent to list all intents from.
     * Format: `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Optional. The language to list training phrases, parameters and rich
     * messages for. If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/docs/reference/language)
     * are supported. Note: languages must be enabled in the agent before they can
     * be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     */
    private $language_code = '';
    /**
     * Optional. The resource view to apply to the returned intent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.IntentView intent_view = 3;</code>
     */
    private $intent_view = 0;
    /**
     * Optional. The maximum number of items to return in a single page. By
     * default 100 and at most 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     */
    private $page_size = 0;
    /**
     * Optional. The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     */
    private $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The agent to list all intents from.
     *           Format: `projects/<Project ID>/agent`.
     *     @type string $language_code
     *           Optional. The language to list training phrases, parameters and rich
     *           messages for. If not specified, the agent's default language is used.
     *           [Many
     *           languages](https://cloud.google.com/dialogflow/docs/reference/language)
     *           are supported. Note: languages must be enabled in the agent before they can
     *           be used.
     *     @type int $intent_view
     *           Optional. The resource view to apply to the returned intent.
     *     @type int $page_size
     *           Optional. The maximum number of items to return in a single page. By
     *           default 100 and at most 1000.
     *     @type string $page_token
     *           Optional. The next_page_token value returned from a previous list request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The agent to list all intents from.
     * Format: `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The agent to list all intents from.
     * Format: `projects/<Project ID>/agent`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The language to list training phrases, parameters and rich
     * messages for. If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/docs/reference/language)
     * are supported. Note: languages must be enabled in the agent before they can
     * be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The language to list training phrases, parameters and rich
     * messages for. If not specified, the agent's default language is used.
     * [Many
     * languages](https://cloud.google.com/dialogflow/docs/reference/language)
     * are supported. Note: languages must be enabled in the agent before they can
     * be used.
     *
     * Generated from protobuf field <code>string language_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Optional. The resource view to apply to the returned intent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.IntentView intent_view = 3;</code>
     * @return int
     */
    public function getIntentView()
    {
        return $this->intent_view;
    }

    /**
     * Optional. The resource view to apply to the returned intent.
     *
     * Generated from protobuf field <code>.google.cloud.dialogflow.v2.IntentView intent_view = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setIntentView($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dialogflow\V2\IntentView::class);
        $this->intent_view = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of items to return in a single page. By
     * default 100 and at most 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of items to return in a single page. By
     * default 100 and at most 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 4;</code>
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
     * Optional. The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. The next_page_token value returned from a previous list request.
     *
     * Generated from protobuf field <code>string page_token = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

