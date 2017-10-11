<?php
/*
 * The Shape Class
 */

namespace FlickerLeap;

use FlickerLeap\Shape;

/**
 *
 */
class Diamond extends Shape
{
    /**
     *
     * @param int $length
     */
    public function __construct($length = 5)
    {
        $this->name = 'Diamond';
        $this->sides = 4;
        $this->sideLength = $length;
        $this->pixel = "*";
    }

    /**
     *
     */
    public function displayName()
    {
        echo $this->name;
    }

    /**
     * Draws the diamond.
     */
    public function draw()
    {
        echo $this->padding($this->sideLength + 1);
        echo $this->pixel;
        $this->newLine();
        $j = 0;
        for ($i = $this->sideLength; $i > 2; $i--) {
          echo $this->padding($i);
          echo $this->pixel;
          echo $this->padding(($j * 2) + 1);
          echo $this->pixel;
          $this->newLine();
          $j++;
      }
      for ($i; $i <= $this->sideLength; $i++) {
          echo $this->padding($i);
          echo $this->pixel;
          echo $this->padding(($j * 2) + 1);
          echo $this->pixel;
          $this->newLine();
          $j--;
      }
      echo $this->padding($this->sideLength + 1);
      echo $this->pixel;
  }
}
