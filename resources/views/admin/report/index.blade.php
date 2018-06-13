@extends('admin.layout.index')

@section('content')
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
        <span><i class="icon-table"></i> 举报列表</span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
        <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
            <thead>
                    <tr>
                        <th>ID</th>
                        <th style="width: 400px;">举报评论内容</th>
                        <th>所属文章</th>
                        <th>举报人</th>
                        <th>举报时间</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $v)
                    <tr>
                        <td>{{ $v -> id }}</td>
                        <td>{!! strip_tags( $v -> comment -> content ) !!}</td>
                        <td>{{ $v -> articles -> title }}</td>
                        <td>{{ $v -> users -> username }}</td>
                        <td>{{ $v -> ctime }}</td>
                        <td>
                            <form action="/admin/report/{{$v -> cid}}" method="post" style="display: inline;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" value="删除" onclick="return confirm('确定删除吗?')" class="btn btn-danger">
                            </form>
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
@endsection
@section('title')
    英雄联盟
@endsection