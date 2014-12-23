<?php include "../../config/koneksi.php"; 
$q=mysql_query("select tbpengajuan.nama_wisata, tbpengajuan.foto, tbpengajuan.Deskripsi from tbpengajuan, tbuser, tbkategori where tbuser.iduser=tbpengajuan.iduser and tbpengajuan.idkategori=tbkategori.idkategori and tbpengajuan.idpengajuan='$_GET[idpengajuan]'");
$data=mysql_fetch_array($q);
?>



<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1><?php echo $data[nama_wisata] ?></h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-sm-6">
	    				<div class="product-image-large">
	    					<img src="img_objekwisata/<?php echo $data[foto] ?>" alt="Item Name">
	    				</div>
	    			</div>
	    			<div class="col-sm-6 product-details">
	    				<h5>Deskripsi Singkat</h5>
	    				<p>
							<?php echo $data[Deskripsi] ?>	    					
	    				</p>
						<table class="shop-item-selections">
							<tr>
								<td><b>Beri Rating :</b></td>
								<td>
									<a href="#" class="btn btn"><i class="icon-shopping-cart icon-white"></i> +1</a>
								</td>
							</tr>
						</table>
	    			</div>
	    			<!-- End Product Summary & Options -->
	    			
	    			<!-- Full Description & Specification -->
	    			<div class="col-sm-12">
	    				<div class="tabbable">
	    					<!-- Tabs -->
							<ul class="nav nav-tabs product-details-nav">
								<li class="active"><a href="#tab1" data-toggle="tab">Informasi</a></li>
								<li><a href="#tab2" data-toggle="tab">Galery</a></li>
							</ul>
							<!-- Tab Content (Full Description) -->
							<div class="tab-content product-detail-info">
								<div class="tab-pane active" id="tab1">
									<h4>Product Description</h4>
									<p>
										Donec hendrerit massa metus, a ultrices elit iaculis eu. Pellentesque ullamcorper augue lacus. Phasellus et est quis diam iaculis fringilla id nec sapien. Sed tempor ornare felis, non vulputate dolor. Etiam ornare diam vitae ligula malesuada tempor. Vestibulum nec odio vel libero ullamcorper euismod et in sapien. Suspendisse potenti.
									</p>
									<h4>Product Highlights</h4>
									<ul>
										<li>Nullam dictum augue nec iaculis rhoncus. Aenean lobortis fringilla orci, vitae varius purus eleifend vitae.</li>
										<li>Nunc ornare, dolor a ultrices ultricies, magna dolor convallis enim, sed volutpat quam sem sed tellus.</li>
										<li>Aliquam malesuada cursus urna a rutrum. Ut ultricies facilisis suscipit.</li>
										<li>Duis a magna iaculis, aliquam metus in, luctus eros.</li>
										<li>Aenean nisi nibh, imperdiet sit amet eleifend et, gravida vitae sem.</li>
										<li>Donec quis nisi congue, ultricies massa ut, bibendum velit.</li>
									</ul>
									<h4>Usage Information</h4>
									<p>
										Donec hendrerit massa metus, a ultrices elit iaculis eu. Pellentesque ullamcorper augue lacus. Phasellus et est quis diam iaculis fringilla id nec sapien. Sed tempor ornare felis, non vulputate dolor. Etiam ornare diam vitae ligula malesuada tempor. Vestibulum nec odio vel libero ullamcorper euismod et in sapien. Suspendisse potenti.
									</p>
								</div>
								<!-- Tab Content (Specification) -->
								<div class="tab-pane" id="tab2">
									<table>
										<tr>
											<td>Total sensor Pixels (megapixels)</td>
											<td>Approx. 16.7</td>
										</tr>
										<tr>
											<td>Effective Pixels (megapixels)</td>
											<td>Approx. 16.1</td>
										</tr>
										<tr>
											<td>Automatic White Balance</td>
											<td>YES</td>
										</tr>
										<tr>
											<td>White balance: preset selection</td>
											<td>Daylight, Shade, Cloudy, Incandescent, Fluorescent, Flash</td>
										</tr>
										<tr>
											<td>White balance: custom setting</td>
											<td>YES</td>
										</tr>
										<tr>
											<td>White balance: types of color temperature</td>
											<td>YES (G7 to M7,15-step) (A7 to B7,15-step)</td>
										</tr>
										<tr>
											<td>White balance bracketing</td>
											<td>NO</td>
										</tr>
										<tr>
											<td>ISO Sensitivity Setting</td>
											<td>ISO100 - 25600 equivalent</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
	    			</div>
	    			<!-- End Full Description & Specification -->
	    		</div>
			</div>
		</div>