<?php
/**
 * Created by PhpStorm.
 * User: Visibility
 * Date: 4.2.2018
 * Time: 19:54
 */

namespace App\Repositories;


use App\BranchModel;
use App\BusinessHourModel;

class DPDRepository
{
  const URL = 'http://www.dpdparcelshop.cz/api/get-all';

  private $apiResult;

  private $branchOffices = null;


  public function __construct()
  {
    $client = new \GuzzleHttp\Client();
    $res = $client->request('GET', self::URL);
//    echo $res->getStatusCode();
// 200
//    echo $res->getHeaderLine('content-type');
// 'application/json; charset=utf8'
    $this->apiResult = json_decode((string)$res->getBody());

    $this->branchOffices = collect();

    $this->parse();
  }

  private function parse()
  {
    foreach ($this->apiResult->data->items as $jsonObj) {
      $branchModel = new BranchModel;
      $branchModel->setInternalId($jsonObj->id);
      $branchModel->setCompany($jsonObj->company);
      $branchModel->setStreet($jsonObj->street);
      $branchModel->setCity($jsonObj->city);
      $branchModel->setHouseNumber($jsonObj->house_number);
      $branchModel->setPostcode($jsonObj->postcode);
      $branchModel->setFax($jsonObj->fax);
      $branchModel->setEmail($jsonObj->email);
      $branchModel->setHomepage($jsonObj->homepage);
      $branchModel->setPickupAllowed($jsonObj->pickup_allowed);
      $branchModel->setReturnAllowed($jsonObj->return_allowed);
      $branchModel->setExpressAllowed($jsonObj->express_allowed);
      $branchModel->setCardpaymentAllowed($jsonObj->cardpayment_allowed);
      $branchModel->setService($jsonObj->service);
      $branchModel->setPhoto($jsonObj->photo);
      $branchModel->setLocation($jsonObj->latitude);
      $branchModel->addLocation($jsonObj->longitude);

      $tempHours = [];

      foreach ($jsonObj->hours as $hour) {
        $BusinessHourModel = new BusinessHourModel;

//        dd($hour);

//        $BusinessHourModel->setBusinessHour($jsonObj->id);

        $BusinessHourModel->setDayOfWeek($hour->dayName);
        $BusinessHourModel->setOpenMorning($hour->openMorning);
        $BusinessHourModel->setCloseMorning($hour->closeMorning);
        $BusinessHourModel->setOpenAfternoon($hour->openAfternoon);
        $BusinessHourModel->setCloseAfternoon($hour->closeAfternoon);


        $tempHours [] = $hour;
      }
//dd($tempHours);

      $branchModel->setBusinessHours($tempHours);


      $this->branchOffices->push($branchModel);

    }

  }

  public function getAll()
  {
    return $this->branchOffices;
  }


  public function getById($id)
  {
    return $this->branchOffices->first(function (BranchModel $branchModel) use ($id) {
      return $branchModel->getInternalId() == $id;

    });


  }

  public function toString()
  {
    return "afsasadfasd";
  }
}