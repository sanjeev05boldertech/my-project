<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar"> 
    <div class="image" style="text-align:center; padding:5px;">

    </div>
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('/admin/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>admin</p>
                <i class="fa fa-circle text-success"></i> Online
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
<li class="active treeview menu-open">
          <a href="{{ url('/admin') }}">
            <i class="fa fa-home"></i> <span>Home</span>
            
           
          </a>

</li>
            
   

<li class="active treeview">
          <a href="#">
            <i class="fa fa-cogs"></i> <span>Restaurant Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{ url('/admin/managemainsettings') }}"><i class="fa fa-gear"></i>Main Settings</a></li>
            <li><a href="{{ url('/admin/managemainsettings/ressettings/') }}"><i class="fa  fa-life-buoy"></i>Restaurant Details</a></li>
            <li><a href="{{url('admin/managemainsettings/updategallery/1')}}"><i class="fa  fa-life-buoy"></i>Restaurant Gallery</a></li>
            <li><a href="{{ url('/admin/sms/') }}"><i class="glyphicon glyphicon-envelope"></i>SMS Settings</a></li>
            <li><a href="{{ url('/admin/profile/') }}"><i class=" fa fa-github-alt"></i> Admin-settings</a></li>
          </ul>
        </li>
 
 <!--<li class="active treeview ">
          <a href="{{ url('/admin/profile/') }}">
          <i class=" fa fa-github-alt"></i>  <span>Admin-settings</span>
            
           
          </a>

</li>--->    

 <li class="active treeview ">
          <a href="{{ url('/admin/managecategory') }}">
            <i class="icon fa fa-sitemap "></i>  <span>Category</span>
            
           
          </a>

</li> 
  
         <li class="active treeview ">
          <a href="{{ url('/admin/managemenuitems') }}">
          <i class="fa fa-cutlery"></i>  <span> Menu Item </span>
            
           
          </a>

</li>    

<li class="active treeview ">
          <a href="{{ url('/admin/managemenu') }}">
          <i class="fa fa-truck" ></i>  <span>Order list </span>
            
           
          </a>

</li>    


<li class="active treeview ">
          <a href="{{ url('/admin/managemenu') }}">
          <i class="fa fa-users fa-4"></i>  <span>Manage Users </span>
            
           
          </a>

</li>  

<li class="active treeview">
          <a href="#">
            <i class="fa fa-file-text"></i> <span>Pages</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li><a href="{{ url('/admin/faq') }}"><i class="fa fa-info-circle"></i> FAQ</a></li>
            <li><a href="{{ url('/admin/tandc') }}"><i class="fa fa-file"></i> Terms & Conditions</a></li>
          </ul>
        </li>


         
        
<li class="active treeview ">
          <a href="{{ url('/admin/notification') }}">
          <i class="fa fa-bell fa-4"></i>  <span>Push Notification </span>
            
           
          </a>

</li> 
    


<li class="active treeview ">
          <a href="{{ url('/admin/api') }}">
              <i class="glyphicon glyphicon-plane"></i> <span>API End Point</span></a>
              </li>
            </ul>

    </section>
    <!-- /.sidebar -->
</aside>