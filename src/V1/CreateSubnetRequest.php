<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/edgenetwork/v1/service.proto

namespace Google\Cloud\EdgeNetwork\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for creating a Subnet
 *
 * Generated from protobuf message <code>google.cloud.edgenetwork.v1.CreateSubnetRequest</code>
 */
class CreateSubnetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Id of the requesting object
     * If auto-generating Id server-side, remove this field and
     * subnet_id from the method_signature of Create RPC
     *
     * Generated from protobuf field <code>string subnet_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $subnet_id = '';
    /**
     * Required. The resource being created
     *
     * Generated from protobuf field <code>.google.cloud.edgenetwork.v1.Subnet subnet = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $subnet = null;
    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $request_id = '';

    /**
     * @param string                              $parent   Required. Value for parent. Please see
     *                                                      {@see EdgeNetworkClient::zoneName()} for help formatting this field.
     * @param \Google\Cloud\EdgeNetwork\V1\Subnet $subnet   Required. The resource being created
     * @param string                              $subnetId Required. Id of the requesting object
     *                                                      If auto-generating Id server-side, remove this field and
     *                                                      subnet_id from the method_signature of Create RPC
     *
     * @return \Google\Cloud\EdgeNetwork\V1\CreateSubnetRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\EdgeNetwork\V1\Subnet $subnet, string $subnetId): self
    {
        return (new self())
            ->setParent($parent)
            ->setSubnet($subnet)
            ->setSubnetId($subnetId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Value for parent.
     *     @type string $subnet_id
     *           Required. Id of the requesting object
     *           If auto-generating Id server-side, remove this field and
     *           subnet_id from the method_signature of Create RPC
     *     @type \Google\Cloud\EdgeNetwork\V1\Subnet $subnet
     *           Required. The resource being created
     *     @type string $request_id
     *           Optional. An optional request ID to identify requests. Specify a unique
     *           request ID so that if you must retry your request, the server will know to
     *           ignore the request if it has already been completed. The server will
     *           guarantee that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and
     *           the request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Edgenetwork\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Value for parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. Id of the requesting object
     * If auto-generating Id server-side, remove this field and
     * subnet_id from the method_signature of Create RPC
     *
     * Generated from protobuf field <code>string subnet_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSubnetId()
    {
        return $this->subnet_id;
    }

    /**
     * Required. Id of the requesting object
     * If auto-generating Id server-side, remove this field and
     * subnet_id from the method_signature of Create RPC
     *
     * Generated from protobuf field <code>string subnet_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->subnet_id = $var;

        return $this;
    }

    /**
     * Required. The resource being created
     *
     * Generated from protobuf field <code>.google.cloud.edgenetwork.v1.Subnet subnet = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\EdgeNetwork\V1\Subnet|null
     */
    public function getSubnet()
    {
        return $this->subnet;
    }

    public function hasSubnet()
    {
        return isset($this->subnet);
    }

    public function clearSubnet()
    {
        unset($this->subnet);
    }

    /**
     * Required. The resource being created
     *
     * Generated from protobuf field <code>.google.cloud.edgenetwork.v1.Subnet subnet = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\EdgeNetwork\V1\Subnet $var
     * @return $this
     */
    public function setSubnet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\EdgeNetwork\V1\Subnet::class);
        $this->subnet = $var;

        return $this;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. An optional request ID to identify requests. Specify a unique
     * request ID so that if you must retry your request, the server will know to
     * ignore the request if it has already been completed. The server will
     * guarantee that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and
     * the request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

