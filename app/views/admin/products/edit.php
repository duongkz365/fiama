
			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Edit Product</h1>
							<p class="breadcrumbs"><span><a href="index.html">Admin</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product</p>
						</div>
						<div>
							<a href="<?php echo _WEB_ROOT.'/admin/product?action=list'?>" class="btn btn-primary"> View All Product
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Edit Product</h2>
								</div>

								<div class="card-body">
									<div class="row ec-vendor-uploads">
										<div class="col-lg-4">
											<div class="ec-vendor-img-upload">
												<div class="ec-vendor-main-img">
													<div class="avatar-upload">
														<div class="avatar-edit">
															<input type='file' id="imageUpload" class="ec-image-upload"
																accept=".png, .jpg, .jpeg" />
															<label for="imageUpload"><img
																	src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/icons/edit.svg"
																	class="svg_img header_svg" alt="edit" /></label>
														</div>
														<div class="avatar-preview ec-preview">
															<div class="imagePreview ec-div-preview">
																<img class="ec-image-preview"
																	src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/products/vender-upload-thumb-preview.jpg"
																	alt="edit" />
															</div>
														</div>
													</div>
													<div class="thumb-upload-set colo-md-12">
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload01"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																		src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																		src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload02"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																		src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																		src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload03"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																		src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																		src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload04"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																		src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																		src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload05"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																		src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																		src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																</div>
															</div>
														</div>
														<div class="thumb-upload">
															<div class="thumb-edit">
																<input type='file' id="thumbUpload06"
																	class="ec-image-upload"
																	accept=".png, .jpg, .jpeg" />
																<label for="imageUpload"><img
																		src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/icons/edit.svg"
																		class="svg_img header_svg" alt="edit" /></label>
															</div>
															<div class="thumb-preview ec-preview">
																<div class="image-thumb-preview">
																	<img class="image-thumb-preview ec-image-preview"
																		src="<?php echo _WEB_ROOT ?>/public/assets/admin/img/products/vender-upload-thumb-preview.jpg"
																		alt="edit" />
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-8">
											<div class="ec-vendor-upload-detail">
												<form class="row g-3">
													<div class="col-md-6">
														<label for="inputEmail4" class="form-label">Product Name</label>
														<input type="text" class="form-control slug-title" id="inputEmail4">
													</div>
													<div class="col-md-6">
														<label class="form-label">Choose Category <span>(Can choose multiple categories)</span></label>
														<select name="categories" id="Categories" class="form-select">
															<optgroup label="Fashion">
																<option value="t-shirt">T-shirt</option>
																<option value="dress">Dress</option>
															</optgroup>
															<optgroup label="Furniture">
																<option value="table">Table</option>
																<option value="sofa">Sofa</option>
															</optgroup>
															<optgroup label="Electronic">
																<option value="phone">I Phone</option>
																<option value="laptop">Laptop</option>
															</optgroup>
														</select>
													</div>
                                                    <div class="col-md-12">
														<label for="slug" class="col-12 col-form-label">Selected Cateogory <span> (Click To Delete)</span></label> 
                                                        <div class="row">
                                                            <div class="col-3 d-flex p-1 align-items-center justify-content-center" style="margin: 0 10px;border: 1px solid black; border-radius: 8px;">
                                                                <h5>Hoa Hồng</h5>
                                                            </div>
                                                            <div class="col-md-3 d-flex p-1 align-items-center justify-content-center" style="margin: 0 10px; border: 1px solid black; border-radius: 8px;">
                                                                <h5>Giỏ Hoa</h5>
                                                            </div>
                                                            <div class="col-md-3 d-flex p-1 align-items-center justify-content-center" style="margin: 0 10px; border: 1px solid black; border-radius: 8px;">
                                                                <h5>Hoa Sinh Nhật</h5>
                                                            </div>
                                                        </div>
													</div>
													<div class="col-md-12">
														<label for="slug" class="col-12 col-form-label">SKU Code</label> 
														<div class="col-12">
															<input id="slug" name="slug" class="form-control here set-slug" type="text">
														</div>
													</div>
													<div class="col-md-12">
														<label class="form-label">Short Description</label>
														<textarea class="form-control" rows="2"></textarea>
													</div>
                                                    <div class="col-md-12">
														<label class="form-label">Quantity</label>
														<input type="number" class="form-control" id="quantity1">
													</div>
													<div class="col-md-6">
														<label class="form-label">SalePrice <span>( In USD
																)</span></label>
														<input type="number" class="form-control" id="price1">
													</div>
                                                    <div class="col-md-6">
														<label class="form-label">Price <span>( In USD
																)</span></label>
														<input type="number" class="form-control" id="price1">
													</div>

													<div class="col-md-12">
														<label class="form-label">Product Details</label>
														<textarea class="form-control" rows="4"></textarea>
													</div>
													<div class="col-md-12">
                                                        <form action="" method="post">
                                                            <button type="submit" class="btn btn-primary">Save Change</button>
                                                        </form>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->