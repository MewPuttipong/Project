<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContentController extends Controller
{
    public function index()
    {
        $content = Content::all();
        return view('admin.content.index', compact('content'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $content = new Content;
        $content->name = $request->name;
        $content->detail = $request->detail;
        $content->save();
        return redirect('admin/content');

        // dd($request);
    }

    public function edit($content_id){
        $content = Content::find($content_id);
        // dd($request);
        return view('admin.content.edit',compact('content'));

    }
    public function update(Request $request,$content_id){
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],
        [
            'name.required' => 'กรุุณาป้อนข้อมูลประเภทสินค้าก่อน',
            'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $content = Content::find($content_id);
        $content->name = $request->name;
        $content->detail = $request->detail;
        $content->save();
        return redirect('/admin/content');
    }
    public function delete($content_id)
    {
        Content::destroy($content_id);
        return redirect('/admin/content');
    }
}
