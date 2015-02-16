<?php

/**
 * Class for handling concept property values.
 */
class ConceptPropertyValueLiteral
{
  /** the literal object for the property value */
  private $literal;
  /** property type */
  private $type;

  //public function __construct($prop, $uri, $vocab, $lang, $label, $exvocab = null, $parent = null, $vocabname = null)
  public function __construct($literal, $prop)
  {
    $this->literal = $literal;
    $this->type = $prop;
  }

  public function __toString()
  {
    if ($this->label === null)
      return "";
    return $this->label;
  }

  public function getLang()
  {
    return $this->literal->getLang();
  }

  public function getExVocab()
  {
    return $this->exvocab;
  }

  public function getType()
  {
    return $this->type;
  }

  public function getLabel($lang='')
  {
    return $this->literal->getValue($lang);
  }

  public function getUri()
  {
    return null;
  }

  public function getParent()
  {
    return $this->parentProperty;
  }

  public function getVocab()
  {
    return $this->vocab;
  }
  
  public function getVocabName()
  {
    return $this->vocab->getShortName();
  }

}