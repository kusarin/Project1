<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{


    public function index()
    {
        return response()->json(base64_decode($_GET['name1']))->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }

    public function add()
    {
        return view('user/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('_token');
        $res = \App\Models\Engineer::create($input);
        dd($res);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request,$id)
    {
        $res = Users::findorfail($id);
        $res->title = $request->title;//$request就是我们form表单接过来的值
        $res->connect = $request->connect;
        $data = $res->save();
        if ($data) {
            echo "<script>alert('修改成功');location.href='/text'</script>";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = $_GET;
        foreach($id as $k=>$v){
            $ids=$k;
        }
        $res = Users::where('id', $ids)->delete();
        if ($res) {
            echo "<script>alert('删除成功');location.href='/text'</script>";
        }
    }

    public function test1()
    {
        $results = DB::select('select * from users');
        //$results = DB::insert('insert into users (email, name, password) values (?, ?)', ['XXX.OOO@AAA.COM', 'testname1', '123456']);
        var_dump($results);
    }
 }
