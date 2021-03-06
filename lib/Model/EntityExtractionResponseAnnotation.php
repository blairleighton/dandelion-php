<?php
/**
 * EntityExtractionResponseAnnotation
 *
 * PHP version 5
 *
 * @category Class
 * @package  DandelionPHP
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dandelion Swagger API
 *
 * Unofficial Dandelion Swagger API definition
 *
 * OpenAPI spec version: 0.0.1
 * Contact: g.prinaricotti@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DandelionPHP\Model;

use \ArrayAccess;

/**
 * EntityExtractionResponseAnnotation Class Doc Comment
 *
 * @category    Class
 * @package     DandelionPHP
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EntityExtractionResponseAnnotation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EntityExtractionResponseAnnotation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'title' => 'string',
        'uri' => 'string',
        'label' => 'string',
        'confidence' => 'float',
        'spot' => 'string',
        'start' => 'int',
        'end' => 'int',
        'types' => 'string[]',
        'categories' => 'string[]',
        'abstract' => 'string',
        'lod' => '\DandelionPHP\Model\EntityExtractionResponseAnnotationLod',
        'alternate_labels' => 'string[]'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'title' => 'title',
        'uri' => 'uri',
        'label' => 'label',
        'confidence' => 'confidence',
        'spot' => 'spot',
        'start' => 'start',
        'end' => 'end',
        'types' => 'types',
        'categories' => 'categories',
        'abstract' => 'abstract',
        'lod' => 'lod',
        'alternate_labels' => 'alternateLabels'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'uri' => 'setUri',
        'label' => 'setLabel',
        'confidence' => 'setConfidence',
        'spot' => 'setSpot',
        'start' => 'setStart',
        'end' => 'setEnd',
        'types' => 'setTypes',
        'categories' => 'setCategories',
        'abstract' => 'setAbstract',
        'lod' => 'setLod',
        'alternate_labels' => 'setAlternateLabels'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'uri' => 'getUri',
        'label' => 'getLabel',
        'confidence' => 'getConfidence',
        'spot' => 'getSpot',
        'start' => 'getStart',
        'end' => 'getEnd',
        'types' => 'getTypes',
        'categories' => 'getCategories',
        'abstract' => 'getAbstract',
        'lod' => 'getLod',
        'alternate_labels' => 'getAlternateLabels'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['spot'] = isset($data['spot']) ? $data['spot'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['end'] = isset($data['end']) ? $data['end'] : null;
        $this->container['types'] = isset($data['types']) ? $data['types'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
        $this->container['abstract'] = isset($data['abstract']) ? $data['abstract'] : null;
        $this->container['lod'] = isset($data['lod']) ? $data['lod'] : null;
        $this->container['alternate_labels'] = isset($data['alternate_labels']) ? $data['alternate_labels'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id ID of the linked Wikipedia resource
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title Title of the linked Wikipedia resource
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets uri
     * @return string
     */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
     * Sets uri
     * @param string $uri URL of the entity on Wikipedia
     * @return $this
     */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label Most common name used to represent the resource
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets confidence
     * @return float
     */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
     * Sets confidence
     * @param float $confidence Value of confidence for this annotation
     * @return $this
     */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;

        return $this;
    }

    /**
     * Gets spot
     * @return string
     */
    public function getSpot()
    {
        return $this->container['spot'];
    }

    /**
     * Sets spot
     * @param string $spot Annotated string, as it is in the input text
     * @return $this
     */
    public function setSpot($spot)
    {
        $this->container['spot'] = $spot;

        return $this;
    }

    /**
     * Gets start
     * @return int
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     * @param int $start Character position in the input text where the annotation begins
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end
     * @return int
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end
     * @param int $end Character position in the input text where the annotation ends
     * @return $this
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets types
     * @return string[]
     */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
     * Sets types
     * @param string[] $types List of types of the linked DBpedia resource. Only if \"include\" parameter contains \"types\"
     * @return $this
     */
    public function setTypes($types)
    {
        $this->container['types'] = $types;

        return $this;
    }

    /**
     * Gets categories
     * @return string[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     * @param string[] $categories List of the category of the linked DBpedia resource\", Only if 'include' parameter contains 'categories'
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets abstract
     * @return string
     */
    public function getAbstract()
    {
        return $this->container['abstract'];
    }

    /**
     * Sets abstract
     * @param string $abstract Abstract of the linked Wikipedia resource. Only if 'include' parameter contains ­'abstract'
     * @return $this
     */
    public function setAbstract($abstract)
    {
        $this->container['abstract'] = $abstract;

        return $this;
    }

    /**
     * Gets lod
     * @return \DandelionPHP\Model\EntityExtractionResponseAnnotationLod
     */
    public function getLod()
    {
        return $this->container['lod'];
    }

    /**
     * Sets lod
     * @param \DandelionPHP\Model\EntityExtractionResponseAnnotationLod $lod
     * @return $this
     */
    public function setLod($lod)
    {
        $this->container['lod'] = $lod;

        return $this;
    }

    /**
     * Gets alternate_labels
     * @return string[]
     */
    public function getAlternateLabels()
    {
        return $this->container['alternate_labels'];
    }

    /**
     * Sets alternate_labels
     * @param string[] $alternate_labels List of other names used when referring to the entity. Only if 'include' parameter contains 'alternate_labels'
     * @return $this
     */
    public function setAlternateLabels($alternate_labels)
    {
        $this->container['alternate_labels'] = $alternate_labels;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\DandelionPHP\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DandelionPHP\ObjectSerializer::sanitizeForSerialization($this));
    }
}


