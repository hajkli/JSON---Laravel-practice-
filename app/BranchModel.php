<?php
namespace App;


class  BranchModel{


  private $internalId;

  private $company;

  private  $internalName;

  private $location;

  private   $businessHours;

  private  $address;

  private $phoneNumber;

  private $street;

  private $city;

  private $house_number;

  private $post_code;

  private $fax;

  private $homepage;

  private $pickup_allowed;

  private $return_allowed;

  private $express_allowed;

  private $cardpayment_allowed;

  private $service;

  private $photo;
  private $email;

  /**
   * @return mixed
   */
  public function getStreet()
  {
    return $this->street;
  }

  /**
   * @param mixed $street
   */
  public function setStreet($street)
  {
    $this->street = $street;
  }

  /**
   * @return mixed
   */
  public function getCity()
  {
    return $this->city;
  }

  /**
   * @param mixed $city
   */
  public function setCity($city)
  {
    $this->city = $city;
  }

  /**
   * @return mixed
   */
  public function getHouseNumber()
  {
    return $this->house_number;
  }

  /**
   * @param mixed $house_number
   */
  public function setHouseNumber($house_number)
  {
    $this->house_number = $house_number;
  }

  /**
   * @return mixed
   */
  public function getPostCode()
  {
    return $this->post_code;
  }

  /**
   * @param mixed $post_code
   */
  public function setPostCode($post_code)
  {
    $this->post_code = $post_code;
  }

  /**
   * @return mixed
   */
  public function getFax()
  {
    return $this->fax;
  }

  /**
   * @param mixed $fax
   */
  public function setFax($fax)
  {
    $this->fax = $fax;
  }

  /**
   * @return mixed
   */
  public function getHomepage()
  {
    return $this->homepage;
  }

  /**
   * @param mixed $homepage
   */
  public function setHomepage($homepage)
  {
    $this->homepage = $homepage;
  }

  /**
   * @return mixed
   */
  public function getPickupAllowed()
  {
    return $this->pickup_allowed;
  }

  /**
   * @param mixed $pickup_allowed
   */
  public function setPickupAllowed($pickup_allowed)
  {
    $this->pickup_allowed = $pickup_allowed;
  }

  /**
   * @return mixed
   */
  public function getReturnAllowed()
  {
    return $this->return_allowed;
  }

  /**
   * @param mixed $return_allowed
   */
  public function setReturnAllowed($return_allowed)
  {
    $this->return_allowed = $return_allowed;
  }

  /**
   * @return mixed
   */
  public function getExpressAllowed()
  {
    return $this->express_allowed;
  }

  /**
   * @param mixed $express_allowed
   */
  public function setExpressAllowed($express_allowed)
  {
    $this->express_allowed = $express_allowed;
  }

  /**
   * @return mixed
   */
  public function getCardpaymentAllowed()
  {
    return $this->cardpayment_allowed;
  }

  /**
   * @param mixed $cardpayment_allowed
   */
  public function setCardpaymentAllowed($cardpayment_allowed)
  {
    $this->cardpayment_allowed = $cardpayment_allowed;
  }

  /**
   * @return mixed
   */
  public function getService()
  {
    return $this->service;
  }

  /**
   * @param mixed $service
   */
  public function setService($service)
  {
    $this->service = $service;
  }

  /**
   * @return mixed
   */
  public function getPhoto()
  {
    return $this->photo;
  }

  /**
   * @param mixed $photo
   */
  public function setPhoto($photo)
  {
    $this->photo = $photo;
  }




  /**
   * @return mixed
   */
  public function getInternalId()
  {
    return $this->internalId;
  }

  /**
   * @param mixed $internalId
   */
  public function setInternalId($internalId)
  {
    $this->internalId = $internalId;
  }

  public function getCompany()
  {
    return $this->company;
  }

  public function setCompany($company)
  {
    $this->company = $company;
  }

  /**
   * @return mixed
   */
  public function getInternalName()
  {
    return $this->internalName;
  }

  /**
   * @param mixed $internalName
   */
  public function setInternalName($internalName)
  {
    $this->internalName = $internalName;
  }

  /**
   * @return mixed
   */
  public function getLocation()
  {
    return $this->location;
  }

  /**
   * @param mixed $location
   */
  public function setLocation($location)
  {
    $this->location = $location;
  }
  public function addLocation($location)
  {
    $this->location .= ' - '.$location;
  }

  /**
   * @return mixed
   */
  public function getBusinessHours()
  {
    return $this->businessHours;
  }

  /**
   * @param mixed $businessHours
   */
  public function setBusinessHours($businessHours)
  {
    $this->businessHours = $businessHours;
  }

  /**
   * @return mixed
   */
  public function getAddress()
  {
    return $this->address;
  }

  /**
   * @param mixed $address
   */
  public function setAddress($address)
  {
    $this->address = $address;
  }

  /**
   * @return mixed
   */
  public function getPhoneNumber()
  {
    return $this->phoneNumber;
  }

  /**
   * @param mixed $phoneNumber
   */
  public function setPhoneNumber($phoneNumber)
  {
    $this->phoneNumber = $phoneNumber;
  }

  /**
   * @return mixed
   */
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * @param mixed $email
   */
  public function setEmail($email)
  {
    $this->email = $email;
  }

}