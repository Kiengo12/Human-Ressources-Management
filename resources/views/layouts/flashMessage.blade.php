<
	
		<div>
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header ftco-degree-bg">
		        <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true" class="ion-ios-close"></span>
		        </button>
		      </div>
		      <div class="modal-body pt-md-0 pb-md-5 text-center">
		      	yield('flash')
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<i class="fa fa-eye"></i>
		      	</div>
		      	<!--<h4 class="mb-2">We sent confirmation link to:</h4>-->
		      	<h3>{{Auth::user()->nom}}</h3>

		      </div>
		    </div>
		  </div>
		</div>

