@extends('Admin.layout.dashboard')


@section('contentpages')



<div class="box box-warning">
<div class="row">
    <div class="col-md-12" dir="rtl">
         
                    <div class="box-header">
                            <h3 class="box-title">{{ trans('language.add plans') }}</h3>
                          </div>
                <form role="form" action="{{ route('plan.store')}}" method="POST" >
                   
                    @include('Admin.Plan.Form')
                   
                    <div class="box-footer text-center">
                        <button type="submit" class="btn btn-info btn-lg">{{ trans('language.add') }}</button>
                    </div>


            </form>
            </div>
          </div>
        </div>

@endsection