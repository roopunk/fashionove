<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{URL::asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
                <a href="{{action('AdminDashboardController@index')}}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class=" pull-right"></i>
                </a>
            </li>
            <li class="header">Manage</li>
            <li><a href="{{action('BrandsController@index')}}"><i class="fa fa-list"></i> <span>Brands</span></a></li>
            <li><a href="{{action('StoresController@index')}}"><i class="fa fa-university"></i> <span>Stores</span></a></li>
            <li><a href="{{action('ProductsController@index')}}"><i class="fa fa-barcode"></i> <span>Products</span></a></li>
            <li class="header">Others</li>
            <li><a href="{{action('CategoriesController@index')}}"><i class="fa fa-list-ul"></i> <span>Categories</span></a></li>
            <li><a href="{{action('CitiesController@index')}}"><i class="fa fa-book"></i> <span>Cities</span></a></li>


            {{--<li class="header">LABELS</li>--}}
            {{--<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>--}}
            {{--<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>--}}
            {{--<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>--}}
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>