<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsesControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $a = $request->a;
        $b = $request->b;
        $op = $request->op;

        if($op=='Tambah'){
            $hasil = $a+$b;
        }elseif($op=='Kurang'){
            $hasil = $a-$b;
        }elseif($op=='Kali'){
            $hasil = $a*$b;
        }elseif($op=='Reset'){
            $hasil=0;
            $a=0;
            $b=0;
        }elseif($op=='Bagi'){
            if($b !=0){
                $hasil = $a/$b;
            }else{
                $hasil = "Tidak dapat melakukan pembagian dengan 0.";
            }
        }

        return view('kalkulator.hasil',compact('hasil'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
