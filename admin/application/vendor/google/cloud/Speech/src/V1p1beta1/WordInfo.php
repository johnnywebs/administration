<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech.proto

namespace Google\Cloud\Speech\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Word-specific information for recognized words.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.WordInfo</code>
 */
class WordInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Time offset relative to the beginning of the audio,
     * and corresponding to the start of the spoken word.
     * This field is only set if `enable_word_time_offsets=true` and only
     * in the top hypothesis.
     * This is an experimental feature and the accuracy of the time offset can
     * vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time = 1;</code>
     */
    private $start_time = null;
    /**
     * Output only. Time offset relative to the beginning of the audio,
     * and corresponding to the end of the spoken word.
     * This field is only set if `enable_word_time_offsets=true` and only
     * in the top hypothesis.
     * This is an experimental feature and the accuracy of the time offset can
     * vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time = 2;</code>
     */
    private $end_time = null;
    /**
     * Output only. The word corresponding to this set of information.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     */
    private $word = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\CloudSpeech::initOnce();
        parent::__construct();
    }

    /**
     * Output only. Time offset relative to the beginning of the audio,
     * and corresponding to the start of the spoken word.
     * This field is only set if `enable_word_time_offsets=true` and only
     * in the top hypothesis.
     * This is an experimental feature and the accuracy of the time offset can
     * vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time = 1;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Output only. Time offset relative to the beginning of the audio,
     * and corresponding to the start of the spoken word.
     * This field is only set if `enable_word_time_offsets=true` and only
     * in the top hypothesis.
     * This is an experimental feature and the accuracy of the time offset can
     * vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration start_time = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * Output only. Time offset relative to the beginning of the audio,
     * and corresponding to the end of the spoken word.
     * This field is only set if `enable_word_time_offsets=true` and only
     * in the top hypothesis.
     * This is an experimental feature and the accuracy of the time offset can
     * vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time = 2;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * Output only. Time offset relative to the beginning of the audio,
     * and corresponding to the end of the spoken word.
     * This field is only set if `enable_word_time_offsets=true` and only
     * in the top hypothesis.
     * This is an experimental feature and the accuracy of the time offset can
     * vary.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration end_time = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Output only. The word corresponding to this set of information.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Output only. The word corresponding to this set of information.
     *
     * Generated from protobuf field <code>string word = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setWord($var)
    {
        GPBUtil::checkString($var, True);
        $this->word = $var;

        return $this;
    }

}

