<?php

namespace App\Http\Controllers;

use App\Models\UserCustomer;
use App\Models\UserData;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.akun.index');
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
        //
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
    public function destroy($id)
    {
        $pelanggan = UserData::find($id);

        dd($pelanggan);
        if (!$pelanggan) {
            return redirect()->route('pelanggan.index')->with('error', 'Data tidak ditemukan.');
        }

        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data berhasil dihapus.');
    }

    public function datatable(Request $request)
    {
        $userData = UserData::whereHas('userCustomer', function ($query) {
                $query->whereHas('roles', function ($query) {
                    $query->where('name', 'Customer');
                });
            })
            ->with('userCustomer')
            ->get();

        return DataTables::of($userData)->make();
    }

}
