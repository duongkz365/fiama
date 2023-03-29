			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
			    <div class="content">
			        <div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
			            <div>
			                <h1>Product</h1>
			                <p class="breadcrumbs"><span><a href="index.html">Home</a></span>
			                    <span><i class="mdi mdi-chevron-right"></i></span>Product
			                </p>
			            </div>
			            <div>
			                <a href="product-list.html" class="btn btn-primary"> Add Porduct</a>
			            </div>
			        </div>
			        <div class="row">
			            <div class="col-12">
			                <div class="card card-default">
			                    <div class="card-body">
			                        <div class="table-responsive">
			                            <table id="responsive-data-table" class="table" style="width:100%">
			                                <thead>
			                                    <tr>
			                                        <th>Product</th>
			                                        <th>Name</th>
			                                        <th>Price</th>
			                                        <th>Sale Price</th>
			                                        <th>Quantity</th>
			                                        <th>Remaining </th>
			                                        <th>Status</th>
			                                        <th>Date</th>
			                                        <th>Action</th>
			                                    </tr>
			                                </thead>

			                                <tbody>
                                                <!-- Render List Product -->
                                                <?php  
                                                    foreach($listProduct as $lpd){
                                                ?>
			                                    <tr>
			                                        <td><img class="tbl-thumb" src="<?php echo _WEB_ROOT.'/'.$lpd['Img'] ?>" alt="Product Image" /></td>
			                                        <td><?php echo $lpd['Title'] ?></td>
			                                        <td><?php echo $lpd['Price'] ?>K</td>
			                                        <td><?php echo $lpd['SalePrice'] ?>K</td>
			                                        <td><?php echo $lpd['Quantity']?></td>
			                                        <td><?php echo $lpd['Quantity']?></td>
			                                        <td>ACTIVE</td>
			                                        <td>2021-10-30</td>
			                                        <td>
			                                            <div class="btn-group mb-1">
			                                                <button type="button" class="btn btn-outline-success">Info</button>
			                                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
			                                                    <span class="sr-only">Info</span>
			                                                </button>

			                                                <div class="dropdown-menu">
			                                                    <a class="dropdown-item" href="<?php  echo _WEB_ROOT.'/admin/product?action=edit&id='.$lpd['Id'] ?>">Edit</a>
			                                                    <a class="dropdown-item" href="#">Delete</a>
			                                                </div>
			                                            </div>
			                                        </td>
			                                    </tr>
                                                <?php
                                                    }
                                                ?>


			                                </tbody>
			                            </table>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->