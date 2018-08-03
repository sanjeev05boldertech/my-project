 @php 
 
 $categorycounter = DB::table('categories')->count();
 
 //$levelcounter = DB::table('subcats')->count();
 
 
 //$studentcounter = DB::table('quizzes')->count();
 
 //$questionscounter = DB::table('questions')->count();
 
 
 @endphp
<div class="panel panel-default thumbnail box box-solid box-primary">
<div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>{{$categorycounter}}</h3>

              <p>Categories</p>
            </div>
            <div class="icon">
              <i class="ion ion-filing"></i>
            </div>
            <a href="{{ url('/admin/managecategory') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>N/A</h3>

              <p>Sub-Categories</p>
            </div>
            <div class="icon">
              <i class="ion ion ion-ios-paper-outline"></i>
            </div>
            <a href="{{ url('/admin/managelevel') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>N/A</h3>

              <p>Quizzes</p>
            </div>
            <div class="icon">
              <i class="ion ion ion-university"></i>
            </div>
            <a href="{{ url('/admin/managequiz') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>N/A</h3>

              <p>Questions</p>
            </div>
            <div class="icon">
              <i class="ion ion-help"></i>
            </div>
            <a href="{{ url('/admin/managequestions') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      </div>