@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();

@endphp

{{-- @dd($prefix) --}}

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex  align-items-center justify-content-center">					 	
						  
						  <h3 class="pt-4">Admin Dashboard</h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  


        <li class="{{ ($route == 'cd.view')?'active':'' }}" >
          <a href="{{ route('cd.view') }}">
            <i data-feather="pie-chart"></i>
			<span>CDs</span>
          </a>
        </li>  

        <li class="{{ ($route == 'game.view')?'active':'' }}" >
          <a href="{{ route('game.view') }}">
            <i data-feather="hard-drive"></i>
			<span>Games</span>
          </a>
        </li> 

        <li class="{{ ($route == 'book.view')?'active':'' }}" >
          <a href="{{ route('book.view') }}">
            <i class="fa fa-vcard-o" aria-hidden="true"></i>
			<span>Books</span>
          </a>
        </li> 
        		  

 
            
          </ul>
        </li>

        
	
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="#" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>