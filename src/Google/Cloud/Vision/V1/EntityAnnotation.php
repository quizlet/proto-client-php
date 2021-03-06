<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Set of detected entity features.
 *
 * Protobuf type <code>Google\Cloud\Vision\V1\EntityAnnotation</code>
 */
class EntityAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Opaque entity ID. Some IDs may be available in
     * [Google Knowledge Graph Search API](https://developers.google.com/knowledge-graph/).
     *
     * Generated from protobuf field <code>string mid = 1;</code>
     */
    private $mid = '';
    /**
     * The language code for the locale in which the entity textual
     * `description` is expressed.
     *
     * Generated from protobuf field <code>string locale = 2;</code>
     */
    private $locale = '';
    /**
     * Entity textual description, expressed in its `locale` language.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * Overall score of the result. Range [0, 1].
     *
     * Generated from protobuf field <code>float score = 4;</code>
     */
    private $score = 0.0;
    /**
     * The accuracy of the entity detection in an image.
     * For example, for an image in which the "Eiffel Tower" entity is detected,
     * this field represents the confidence that there is a tower in the query
     * image. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 5;</code>
     */
    private $confidence = 0.0;
    /**
     * The relevancy of the ICA (Image Content Annotation) label to the
     * image. For example, the relevancy of "tower" is likely higher to an image
     * containing the detected "Eiffel Tower" than to an image containing a
     * detected distant towering building, even though the confidence that
     * there is a tower in each image may be the same. Range [0, 1].
     *
     * Generated from protobuf field <code>float topicality = 6;</code>
     */
    private $topicality = 0.0;
    /**
     * Image region to which this entity belongs. Currently not produced
     * for `LABEL_DETECTION` features. For `TEXT_DETECTION` (OCR), `boundingPoly`s
     * are produced for the entire text detected in an image region, followed by
     * `boundingPoly`s for each word within the detected text.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 7;</code>
     */
    private $bounding_poly = null;
    /**
     * The location information for the detected entity. Multiple
     * `LocationInfo` elements can be present because one location may
     * indicate the location of the scene in the image, and another location
     * may indicate the location of the place where the image was taken.
     * Location information is usually present for landmarks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.LocationInfo locations = 8;</code>
     */
    private $locations;
    /**
     * Some entities may have optional user-supplied `Property` (name/value)
     * fields, such a score or string that qualifies the entity.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Property properties = 9;</code>
     */
    private $properties;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * Opaque entity ID. Some IDs may be available in
     * [Google Knowledge Graph Search API](https://developers.google.com/knowledge-graph/).
     *
     * Generated from protobuf field <code>string mid = 1;</code>
     * @return string
     */
    public function getMid()
    {
        return $this->mid;
    }

    /**
     * Opaque entity ID. Some IDs may be available in
     * [Google Knowledge Graph Search API](https://developers.google.com/knowledge-graph/).
     *
     * Generated from protobuf field <code>string mid = 1;</code>
     * @param string $var
     */
    public function setMid($var)
    {
        GPBUtil::checkString($var, True);
        $this->mid = $var;
    }

    /**
     * The language code for the locale in which the entity textual
     * `description` is expressed.
     *
     * Generated from protobuf field <code>string locale = 2;</code>
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * The language code for the locale in which the entity textual
     * `description` is expressed.
     *
     * Generated from protobuf field <code>string locale = 2;</code>
     * @param string $var
     */
    public function setLocale($var)
    {
        GPBUtil::checkString($var, True);
        $this->locale = $var;
    }

    /**
     * Entity textual description, expressed in its `locale` language.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Entity textual description, expressed in its `locale` language.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

    /**
     * Overall score of the result. Range [0, 1].
     *
     * Generated from protobuf field <code>float score = 4;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Overall score of the result. Range [0, 1].
     *
     * Generated from protobuf field <code>float score = 4;</code>
     * @param float $var
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;
    }

    /**
     * The accuracy of the entity detection in an image.
     * For example, for an image in which the "Eiffel Tower" entity is detected,
     * this field represents the confidence that there is a tower in the query
     * image. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 5;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * The accuracy of the entity detection in an image.
     * For example, for an image in which the "Eiffel Tower" entity is detected,
     * this field represents the confidence that there is a tower in the query
     * image. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 5;</code>
     * @param float $var
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;
    }

    /**
     * The relevancy of the ICA (Image Content Annotation) label to the
     * image. For example, the relevancy of "tower" is likely higher to an image
     * containing the detected "Eiffel Tower" than to an image containing a
     * detected distant towering building, even though the confidence that
     * there is a tower in each image may be the same. Range [0, 1].
     *
     * Generated from protobuf field <code>float topicality = 6;</code>
     * @return float
     */
    public function getTopicality()
    {
        return $this->topicality;
    }

    /**
     * The relevancy of the ICA (Image Content Annotation) label to the
     * image. For example, the relevancy of "tower" is likely higher to an image
     * containing the detected "Eiffel Tower" than to an image containing a
     * detected distant towering building, even though the confidence that
     * there is a tower in each image may be the same. Range [0, 1].
     *
     * Generated from protobuf field <code>float topicality = 6;</code>
     * @param float $var
     */
    public function setTopicality($var)
    {
        GPBUtil::checkFloat($var);
        $this->topicality = $var;
    }

    /**
     * Image region to which this entity belongs. Currently not produced
     * for `LABEL_DETECTION` features. For `TEXT_DETECTION` (OCR), `boundingPoly`s
     * are produced for the entire text detected in an image region, followed by
     * `boundingPoly`s for each word within the detected text.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 7;</code>
     * @return \Google\Cloud\Vision\V1\BoundingPoly
     */
    public function getBoundingPoly()
    {
        return $this->bounding_poly;
    }

    /**
     * Image region to which this entity belongs. Currently not produced
     * for `LABEL_DETECTION` features. For `TEXT_DETECTION` (OCR), `boundingPoly`s
     * are produced for the entire text detected in an image region, followed by
     * `boundingPoly`s for each word within the detected text.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_poly = 7;</code>
     * @param \Google\Cloud\Vision\V1\BoundingPoly $var
     */
    public function setBoundingPoly(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\BoundingPoly::class);
        $this->bounding_poly = $var;
    }

    /**
     * The location information for the detected entity. Multiple
     * `LocationInfo` elements can be present because one location may
     * indicate the location of the scene in the image, and another location
     * may indicate the location of the place where the image was taken.
     * Location information is usually present for landmarks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.LocationInfo locations = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * The location information for the detected entity. Multiple
     * `LocationInfo` elements can be present because one location may
     * indicate the location of the scene in the image, and another location
     * may indicate the location of the place where the image was taken.
     * Location information is usually present for landmarks.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.LocationInfo locations = 8;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setLocations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\LocationInfo::class);
        $this->locations = $arr;
    }

    /**
     * Some entities may have optional user-supplied `Property` (name/value)
     * fields, such a score or string that qualifies the entity.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Property properties = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Some entities may have optional user-supplied `Property` (name/value)
     * fields, such a score or string that qualifies the entity.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Property properties = 9;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setProperties(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\Property::class);
        $this->properties = $arr;
    }

}

