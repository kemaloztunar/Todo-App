@extends('layout.master')
@section('content')
   
    <div class="row my-5">
        <div class="col-xl-6 m-auto">
            <div class="card"> 
                <div class="card-header">
                    <h3 class="card-title">Todo Detay Sayfası</h3>
                </div>
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label">Todo Title</label>
                        <input type="text" class="form-control" name="title" value="{{$todo->title}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Todo Açiklamasi</label>
                        <textarea class="form-control" name="description" readonly>{{$todo->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Todo Yapıldı mı?</label>
                        <select class="form-control" name="completed" disabled>
                            <option value="1" {{$todo->completed==1?'selected':''}}>Evet</option>
                            <option value="0" {{$todo->completed==0?'selected':''}}>Hayır</option>  
                        </select>
                    </div>
                </div>
                <div class="card-footer">
               
                </div>
            </div>
        </div>
    </div>
  
@endsection
