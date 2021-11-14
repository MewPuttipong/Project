<?php
namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;
class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.service.index');
    }

    public function create(Request $request){
        dd($request);
    }
}