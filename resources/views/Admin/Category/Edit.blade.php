@extends('Admin.layout.dashboard')

@section('contentpages')

<div class="box box-warning">
   <div class="row">
    <div class="col-md-12 " dir="rtl">
            
            <div class="box-header">
                <h3 class="box-title"> {{ trans('language.edit categories') }}</h3>
            </div>
                <!-- /.box-header -->

                <form role="form" action="{{ route('category.update', $category->id)}}" method="POST" >
                    <input type="hidden" name="_method" value="PATCH" />
                @include('Admin.category.Form')

                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-success btn-lg">تعديل</button>
                </div>
            </form>
            </div>
          </div>
        </div>

@endsection
