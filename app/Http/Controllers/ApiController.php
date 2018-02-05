<?php

namespace App\Http\Controllers;

use App\Repositories\DPDRepository;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DPDRepository $repository)
    {
        return view('index', ['repository' => $repository]);
//
//        foreach ($repository->getAll() as $branchModel){
//
//            echo "<a href='dpd/".$branchModel->getInternalId()."'>".$branchModel->getCompany().", ".($branchModel->getInternalId())."</a><br>";
//
//        }

    }

    public function listAll(DPDRepository $repository){

        $temp = [];
        foreach($repository->getAll() as $branchModel)
        {
            $temp[] = [
              'id' => $branchModel->getInternalId()
            ];
        }
        return response()->json($temp);
//        return $repository->getAll()->toJson();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @param DPDRepository $repository
     * @return \Illuminate\Http\Response
     */
    public function show($id, DPDRepository $repository)
    {
        $oneRepository = $repository->getById($id);
//        dd($repository->getById($id));

        return view('branchoffice', ['id' => $id, 'repository' => $oneRepository]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
