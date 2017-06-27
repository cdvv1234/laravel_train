@extends('layouts.master')
@section('title','upload')
@section('content')
    <div class="container">

        <div class="row">
            <div class="box">
                <div>
                  @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                      <p>{{$error}}</p>
                    @endforeach
                  @endif
                      <form action="/upload" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                      <input type="file" name="myFile" id="myFile"/>
                      <input type="submit" value="提交"/>
                  </form>
                  </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

@endsection
