<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gtfs-realtime.proto3

namespace Transit_realtime;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The contents of a feed message.
 * A feed is a continuous stream of feed messages. Each message in the stream is
 * obtained as a response to an appropriate HTTP GET request.
 * A realtime feed is always defined with relation to an existing GTFS feed.
 * All the entity ids are resolved with respect to the GTFS feed.
 * A feed depends on some external configuration:
 * - The corresponding GTFS feed.
 * - Feed application (updates, positions or alerts). A feed should contain only
 *   items of one specified application; all the other entities will be ignored.
 * - Polling frequency
 *
 * Generated from protobuf message <code>transit_realtime.FeedMessage</code>
 */
class FeedMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Metadata about this feed and feed message.
     * required FeedHeader header = 1;
     *
     * Generated from protobuf field <code>.transit_realtime.FeedHeader header = 1;</code>
     */
    protected $header = null;
    /**
     * Contents of the feed.
     *
     * Generated from protobuf field <code>repeated .transit_realtime.FeedEntity entity = 2;</code>
     */
    private $entity;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Transit_realtime\FeedHeader $header
     *           Metadata about this feed and feed message.
     *           required FeedHeader header = 1;
     *     @type \Transit_realtime\FeedEntity[]|\Google\Protobuf\Internal\RepeatedField $entity
     *           Contents of the feed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\GtfsRealtime::initOnce();
        parent::__construct($data);
    }

    /**
     * Metadata about this feed and feed message.
     * required FeedHeader header = 1;
     *
     * Generated from protobuf field <code>.transit_realtime.FeedHeader header = 1;</code>
     * @return \Transit_realtime\FeedHeader
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Metadata about this feed and feed message.
     * required FeedHeader header = 1;
     *
     * Generated from protobuf field <code>.transit_realtime.FeedHeader header = 1;</code>
     * @param \Transit_realtime\FeedHeader $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Transit_realtime\FeedHeader::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Contents of the feed.
     *
     * Generated from protobuf field <code>repeated .transit_realtime.FeedEntity entity = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Contents of the feed.
     *
     * Generated from protobuf field <code>repeated .transit_realtime.FeedEntity entity = 2;</code>
     * @param \Transit_realtime\FeedEntity[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntity($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Transit_realtime\FeedEntity::class);
        $this->entity = $arr;

        return $this;
    }

}

