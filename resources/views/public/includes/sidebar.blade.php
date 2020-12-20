<div class="col-md-4 products-left">

			<div class="css-treeview">
				<h4>Categories</h4>

				<ul class="tree-list-pad">

				@if($allCategory)
					@foreach($allCategory as $category)
						<li><a href="{{ url('/viewCategory/'.$category->categorySlug) }}">{{ $category->categoryName }}</a></li>
					@endforeach
				@endif




				</ul>

			</div>

			<br>

			<div class="css-treeview">
				<h4>Brands</h4>

				<ul class="tree-list-pad">

				@if($allManufactures)
					@foreach($allManufactures as $Manufacture)
						<li><a href="{{ url('/viewManufactureProduct/'.$Manufacture->id) }}">{{ $Manufacture->manufactureName }}</a></li>
					@endforeach
				@endif


				</ul>

			</div>


			<div class="clearfix"></div>
		</div>