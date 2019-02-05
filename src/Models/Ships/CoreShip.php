<?php

Namespace BattleShip\Models\Ships;

Abstract class CoreShip
{
    // Private : restreint à la classe,
    // les enfants et les autres objets accèdent à cette propriété via getter/setter

    //fixées par le type bateau
    private $name;
    private $size;

    //fixées par la génération
    private $x;
    private $y;
    private $axis;

    /**
     * En protected car l'enfant définira son nom lui-même
     */

     protected function setName($name)
     {
         $this->name = $name;

     }

     public function getName()
     {
         return $this->name;

     }
      /**
     * Get the value of Size
     *
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Set the value of Size
     *
     * @param mixed size
     *
     * @return self
     */
    protected function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
    /**
     * Get the value of x
     *
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }
    /**
     * Set the value of x
     *
     * @param mixed x
     *
     * @return self
     */
    public function setX($x)
    {
        $this->x = $x;
        return $this;
    }
    /**
     * Get the value of y
     *
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }
    /**
     * Set the value of y
     *
     * @param mixed y
     *
     * @return self
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }
    /**
     * Get the value of Axis
     *
     * @return mixed
     */
    public function getAxis()
    {
        return $this->axis;
    }
    /**
     * Set the value of Axis
     *
     * @param mixed axis
     *
     * @return self
     */
    public function setAxis($axis)
    {
        $this->axis = $axis;
        return $this;
    }
}
