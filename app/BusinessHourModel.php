<?php
namespace App;

class  BusinessHourModel{

  private $dayOfWeek;
  private $openMorning;
  private $closeMorning;
  private $openAfternoon;
  private $closeAfternoon;

  private  $businessHour;  // not found

  /**
   * @return mixed
   */
  public function getDayOfWeek()
  {
    return $this->dayOfWeek;
  }

  /**
   * @return mixed
   */
  public function getOpenMorning()
  {
    return $this->openMorning;
  }

  /**
   * @param mixed $openMorning
   */
  public function setOpenMorning($openMorning)
  {
    $this->openMorning = $openMorning;
  }

  /**
   * @return mixed
   */
  public function getCloseMorning()
  {
    return $this->closeMorning;
  }

  /**
   * @param mixed $closeMorning
   */
  public function setCloseMorning($closeMorning)
  {
    $this->closeMorning = $closeMorning;
  }

  /**
   * @return mixed
   */
  public function getOpenAfternoon()
  {
    return $this->openAfternoon;
  }

  /**
   * @param mixed $openAfternoon
   */
  public function setOpenAfternoon($openAfternoon)
  {
    $this->openAfternoon = $openAfternoon;
  }

  /**
   * @return mixed
   */
  public function getCloseAfternoon()
  {
    return $this->closeAfternoon;
  }

  /**
   * @param mixed $closeAfternoon
   */
  public function setCloseAfternoon($closeAfternoon)
  {
    $this->closeAfternoon = $closeAfternoon;
  }

  /**
   * @param mixed $dayOfWeek
   */
  public function setDayOfWeek($dayOfWeek)
  {
    $this->dayOfWeek = $dayOfWeek;
  }

  /**
   * @return mixed
   */
  public function getBusinessHour()
  {
    return $this->businessHour;
  }

  /**
   * @param mixed $businessHour
   */
  public function setBusinessHour($businessHour)
  {
    $this->businessHour = $businessHour;
  }

}