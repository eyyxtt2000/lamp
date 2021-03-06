@extends('admin.layout.index')
@section('content')

            <!-- 内容开始 -->
            <div class="container">
                @if(session('error'))
                <div class="mws-form-message error">
                   {{ session('error') }}
                </div>
                @endif

                @if(session('success'))
                <div class="mws-form-message success">
                     {{ session('success') }}
                </div>
                @endif

               <div class="mws-panel grid_8">
                  <div class="mws-panel-header">
                    <span>
                      <i class="icon-table"></i>{{ $title }}</span>
                  </div>
                  <div class="mws-panel-body no-padding">
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                    <form action="/admin/users" method="get" >
                      <div id="DataTables_Table_1_length" class="dataTables_length">
                        <label>显示
                          <select name="count" size="1" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1">
                            <option value="5" @if( isset($params) && !empty($params['count']) &&$params['count']==5) selected @endif>5</option>
                            <option value="10" @if( isset($params) && !empty($params['count']) &&$params['count']==10) selected @endif>10</option>
                            <option value="15" @if( isset($params) && !empty($params['count']) &&$params['count']==15) selected @endif>15</option>
                            <option value="20" @if( isset($params) && !empty($params['count']) &&$params['count']==20) selected @endif>20</option></select>条</label>
                      </div>
                      <div class="dataTables_filter" id="DataTables_Table_1_filter">

                               <label>搜索: <input type="text" name="for" value="{{$params['for'] or ''}}">
                               <input type="submit" class="btn btn-info" value="搜索" >
                            </label></div>
                         </form>



                      <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                        <tr>
                            <td>ID</td>
                            <td>用户名</td>
                            <td>邮箱</td>
                            <td>头像</td>
                            <td>操作</td>
                        </tr>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">

                          @foreach($data as $k=>$v)


                        <tr>
                            <td>{{$v->id}}</td>
                            <td>{{$v->username}}</td>
                            <td>{{$v->usersdetail['email']}}</td>
                            <td>
                            <img class="img-circle img-thumbnail img-responsive" style="width:50px; height:60px" src="{{url('/').$v->profile}}" alt="">
                            </td>
                            <td style="width:310px">
                            <div style="float:left; margin-right:5px;">
                            <form action="/admin/users/{{$v->id}}" method="post">
                               {{ csrf_field() }}
                               {{ method_field('DELETE') }}
                               <input type="submit" id="sub" class="btn btn-danger" value="删除" onclick="return confirm('确认要删除该用户吗?');" >
                            </form>
                            </div>

                              <div  style="float:left;  margin-right:5px; ">
                             @if( $v->usersdetail['status']==1)
                            <form action="/admin/users/lahei/{{$v->id}}" method="post">
                               {{ csrf_field() }}

                               <input type="submit" id="lahei" class="btn btn-danger" value="拉黑" onclick="return confirm('确认要拉黑该用户吗?');" >
                            </form>
                            @else
                             <form action="/admin/users/huifu/{{$v->id}}" method="post">
                               {{ csrf_field() }}

                               <input type="submit" id="huifu" class="btn btn-success" value="恢复" onclick="return confirm('确认恢复该用户吗?');" >
                            </form>
                            @endif

                            </div>

                            <div style="float:left">
                            <form  action="/admin/users/{{$v->id}}/edit" method="get">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-warning"  value="修改">
                            </form>
                            </div>

                            <a style="float:right" href="/admin/users/{{$v->id}}" class="btn btn-info">查看用户详细信息</a>

                            </td>
                        </tr>
                          @endforeach

                        </tbody>
                      </table>
                        <div class="page dataTables_paginate paging_full_numbers">
                            {!! $data->render() !!}
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- 内容结束-->
   @endsection



@section('title')
    绝地求升
@endsection