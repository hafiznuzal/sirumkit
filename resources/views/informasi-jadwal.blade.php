@extends('maintemplate')

@section('breadcrumb')
	<li>Informasi Koridor</li>
@endsection

@section('page-header')
	Informasi Jadwal Kedatangan dan Keberangkatan
	<small>
		<i class="ace-icon fa fa-angle-double-right"></i>
		overview &amp; stats
	</small>
@endsection

@section('content')
	<div class="row">
		<div class="col-sm-8">
			<div class="tabbable">
				<ul class="nav nav-tabs" id="myTab">
					<li class="active">
						<a data-toggle="tab" href="#koridor1">
							<i class="green ace-icon fa fa-home bigger-120"></i>
							Koridor 1
						</a>

						
					</li>

					<li>
						<a data-toggle="tab" href="#koridor2">
						<i class="green ace-icon fa fa-home bigger-120"></i>
							koridor 2							
						</a>
					</li>

					<li class>
						<a data-toggle="tab" href="#koridor3">
							<i class="green ace-icon fa fa-home bigger-120"></i>
							Koridor 3
						</a>
					</li>

					<li>
						<a data-toggle="tab" href="#koridor4">
						<i class="green ace-icon fa fa-home bigger-120"></i>
							koridor 4							
						</a>
					</li>

					<li class>
						<a data-toggle="tab" href="#koridor5">
							<i class="green ace-icon fa fa-home bigger-120"></i>
							Koridor 5
						</a>
					</li>

					<li>
						<a data-toggle="tab" href="#koridor6">
						<i class="green ace-icon fa fa-home bigger-120"></i>
							koridor 6							
						</a>
					</li>

					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">
							Dropdown &nbsp;
							<i class="ace-icon fa fa-caret-down bigger-110 width-auto"></i>
						</a>

						<ul class="dropdown-menu dropdown-info">
							<li>
								<a data-toggle="tab" href="#dropdown1">@fat</a>
							</li>

							<li>
								<a data-toggle="tab" href="#dropdown2">@mdo</a>
							</li>
						</ul>
					</li>
				</ul>

				<div class="tab-content">
					<div id="koridor1" class="tab-pane fade in active">
						<p>Raw denim you probably haven't heard of them jean shorts Austin.</p>

						<div>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Domain</th>
														<th>Price</th>
														<th class="hidden-480">Clicks</th>

														<th>
															<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
															Update
														</th>
														<th class="hidden-480">Status</th>

														<th></th>
													</tr>
												</thead>

												<tbody>
													

													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#">share.com</a>
														</td>
														<td>$30</td>
														<td class="hidden-480">3,200</td>
														<td>Feb 11</td>

														<td class="hidden-480">
															<span class="label label-sm label-info arrowed arrowed-righ">Sold</span>
														</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#">fair.com</a>
														</td>
														<td>$35</td>
														<td class="hidden-480">3,900</td>
														<td>Mar 26</td>

														<td class="hidden-480">
															<span class="label label-sm label-inverse arrowed-in">Flagged</span>
														</td>

														<td>
															<div class="hidden-sm hidden-xs action-buttons">
																<a class="blue" href="#">
																	<i class="ace-icon fa fa-search-plus bigger-130"></i>
																</a>

																<a class="green" href="#">
																	<i class="ace-icon fa fa-pencil bigger-130"></i>
																</a>

																<a class="red" href="#">
																	<i class="ace-icon fa fa-trash-o bigger-130"></i>
																</a>
															</div>

															<div class="hidden-md hidden-lg">
																<div class="inline pos-rel">
																	<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
																		<i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
																		<li>
																			<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
																				<span class="blue">
																					<i class="ace-icon fa fa-search-plus bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
																				<span class="green">
																					<i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																				<span class="red">
																					<i class="ace-icon fa fa-trash-o bigger-120"></i>
																				</span>
																			</a>
																		</li>
																	</ul>
																</div>
															</div>
														</td>
													</tr>

											
												</tbody>
											</table>
						</div>
					</div>

					<div id="koridor2" class="tab-pane fade">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
					</div>
					<div id="koridor3" class="tab-pane fade">
						<p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
					</div>

					<div id="koridor4" class="tab-pane fade">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
					</div>
					<div id="koridor5" class="tab-pane fade">
						<p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
					</div>

					<div id="koridor6" class="tab-pane fade">
						<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
					</div>

					<div id="dropdown1" class="tab-pane fade">
						<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
					</div>

					<div id="dropdown2" class="tab-pane fade">
						<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.</p>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection