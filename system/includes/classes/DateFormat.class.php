<?php
class DateFormat
{
  public function returnDateTime($when,$format)
  {
    $instance=new DateTime($when);
    if($format)
      return $instance->format($format);
    else
      return $instance;
  }
}
?>