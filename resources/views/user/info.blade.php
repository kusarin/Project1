
 <div id="type_a">
        <a href="{{url('show')}}" >添加信息</a>
    </div>
   <table border="1">
       <tr>
           <td>id</td>
           <td>姓名</td>
           <td>性别</td>
           <td>手机</td>
           <td>操作</td>
       </tr>
   @foreach ($name as $v)
       <tr>
           <td>{{$v->id}}</td>
           <td>{{$v->name}}</td>
           <td>{{$v->sex}}</td>
           <td>{{$v->phone}}</td>
           <td><a onclick="if(confirm('确认删除吗?') == false) return false;"
                 href="{{ url('user/delete', ['id' => $v->id]) }}">删除</a>
              <a href="{{ url('user/upd', ['id' => $v->id]) }}">修改</a>
          </td>
       </tr>
   @endforeach
 
   </table>
<div id="pull_right">
    <div class="pull-right">
        {{ $name->render() }}
    </div>
