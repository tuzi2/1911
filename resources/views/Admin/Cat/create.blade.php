@extends('layouts.Header')
@section('title', '购物车详情展示页面')
@section('sidebar')
    @parent
    <div id="dcMain">
        <!-- 当前位置 -->
        <div id="urHere">DouPHP 管理中心<b>></b><strong>分类列表</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="add_product_category.html" ></a>分类添加</h3>
            <form action="{{url('/addDo')}}" method="post">
                <table border=1 style="color: blue">
                    <tr>
                        <td>分类名称:</td>
                        <td><input type="text" name="cat_name"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button type="submit" class="btn btn-info">添加</button></td>
                    </tr>
                </table>
            </form>
                </tr>
            </table>
        </div>
    </div>
@endsection
