@extends('layouts.app')
@section('css')
    @parent
    <style>
        .typeAtt {margin-right: 10px;}
    </style>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Test</div>

                <div class="card-body">
                   <form action="" method="post">
                       @csrf
                        <div style="margin-bottom: 30px;">
                            <select name="id_class" id="id_class" style="padding: 5 10px; width: 100px">
                                <option value="">Chọn lớp</option>
                                @foreach ($classroom as $class )
                                    <option value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Id</td>
                                    <td>Name</td>
                                    <td>Tình trạng đi học</td>
                                </tr>
                            </thead>
                            <tbody id="table_body">
                                
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="3">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    @parent
    <script>
        $(document).ready(function(){
            $("#id_class").change(function(){
                var id_class = $(this).val();
                var url = "{{ route('user.in.class',":id") }}",
                    url = url.replace(':id', id_class);
                $.ajax({
                    type:'GET',
                    url:url,
                    data: '',
                    dataType: 'json',
                    success: function(data) {
                        var html = '';
                        for(let i=0; i<data.length; i++) {
                                let id = data[i].id;
                                let name = data[i].name;
                                html +='<tr>';
                                html +='<td>'+id+'</td>';
                                html +='<td>'+name+'</td>';
                                html +='<td>';
                                html +='<span class="typeAtt">';
                                html +='<input type="radio" name="type['+id+']" value="1"> Đi học';
                                html +='</span>';
                                html +='<span class="typeAtt">';
                                html +='<input type="radio" name="type['+id+']" value="2"> Nghỉ học';
                                html +='</span>';
                                html +='<span class="typeAtt">';
                                html +='<input type="radio" name="type['+id+']" value="3"> Muộn';
                                html +='</span>';
                                html +='<span class="typeAtt">';
                                html +='<input type="radio" name="type['+id+']" value="4"> Có phép';
                                html +='</span>';
                                html +='</td>';
                                html +='</tr>';
                            }
                        $("#table_body").html('');
                        $("#table_body").append(html);
                    },
                    error: function(data) {}
                });
            });
        });

    </script>
@endsection
