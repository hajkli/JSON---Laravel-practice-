<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
    <a href="/">back</a> <br><br>
    ID: {{$repository->getInternalId()}}
    <br>
    Company: {{$repository->getCompany()}}
    <br>
    Street: {{$repository->getStreet()}}
    <br>
    City: {{$repository->getCity()}}
    <br>
    House Number: {{$repository->getHouseNumber()}}
    <br>
    Post code: {{$repository->getPostCode()}}
    <br>
    Phone number: {{$repository->getPhoneNumber()}}
    <br>
    fax: {{$repository->getFax()}}
    <br>
    email: {{$repository->getEmail()}}
    <br>
    homepage: {{$repository->getHomepage()}}
    <br>
    Pickup allowed: {{$repository->getPickupAllowed()}}
    <br>
    Express allowed: {{$repository->getExpressAllowed()}}
    <br>
    Card payment allowed: {{$repository->getCardpaymentAllowed()}}
    <br>
    service: {{$repository->getService()}}
    <br>
    Location: {{$repository->getLocation()}}
    <br>
    hours: <br>
    @foreach($repository->getBusinessHours() as $value)

            {{$value->dayName}}: <br>
            {{$value->openMorning}} -
            {{$value->closeMorning}} <br>
            {{$value->openAfternoon}} -
            {{$value->closeAfternoon}} <br><br>
<?php /* var_dump($value); */ ?>

    @endforeach



    <br>
    photo: {{$repository->getPhoto()}}


    </body>
</html>
