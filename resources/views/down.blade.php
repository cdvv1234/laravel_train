@extends('layouts.master')
@section('title','相關連結')
@section('content')
    <div class="container">
      <div class="row">
          <div class="box">
              <div class="col-lg-12">
                  <hr>
                  <h2 class="intro-text text-center">
                      <strong>相關連結</strong>
                  </h2>
                  <hr>
                  <p>Use as many boxes as you like, and put anything you want in them! They are great for just about anything, the sky's the limit!</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="box">
              <div class="col-lg-12">
                  <hr>
                  <h2 class="intro-text text-center">
                      <strong>檔案下載</strong>
                  </h2>
                  <hr>
                  <table id="uploads-table" class="table table-striped table-bordered">
                  <thead>
                      <tr>
                          <th>Name</th>
                          <th>Date</th>
                          <th data-sortable="false">Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                @foreach($downloads as $down)
               <tr>
                   <td>{{$down->title}}</td>
                   <td>{{$down->created_at}}</td>
                   <td>
                     <a href="download/{{$down->filename}}" download="{{$down->filename}}">
                              <button type="button" class="btn btn-primary">
                                  <i class="glyphicon glyphicon-download">
                                   Download
                               </i>
                      </button>
                      </a>
                     </td>
                 </tr>
             @endforeach

                  </tbody>
              </table>
              </div>
          </div>
      </div>

    </div>
    <!-- /.container -->
@endsection
