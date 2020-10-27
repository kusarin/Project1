  <form action="{{route('text.update',$res->id)}}" method="post">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
        <tr>
            <td>标题:</td>
            <td><input type="text" name="title" value="<?php echo $res->title?>"></td>//$res是我们刚才使用compact函数传过来的值
        </tr>
        <tr>
            <td>内容</td>
            <td><input type="text" name="connect" value="<?php echo $res->connect?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="修改" ></td>
        </tr>
    </form>