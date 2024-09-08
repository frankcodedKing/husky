@extends('dashblayout.dashlayout')

@section('body')



<div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="components-preview wide-md mx-auto">
                                <div class="nk-block-head nk-block-head-lg wide-sm">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><a class="back-to" href="javascript: history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>(go back)</span></a></div>
                                        <h2 class="nk-block-title fw-normal">Loans and Credit</h2>
                                        <div class="nk-block-des">
                                            <p class="lead">Access loans up to $30M from Aspen loan systems.</p>
                                        </div>
                                     
                                    </div>
                                </div><!-- nk-block-head -->
                               
                               <div class="nk-block nk-block-lg">
                                                                                                                                                                  
                                  
                                  
                               <div class="nk-block-head">
                                   
                                   <div class="alert alert-fill alert-danger alert-dismissible alert-icon">You cannot apply for a loan if your account has not been verified or if you do not possess minimum account balance to engage your loan. <em class="icon ni ni-caution"></em><button class="close" data-dismiss="alert" fdprocessedid="xp1w0n"></button></div>
                                   
                                   
									<div class="nk-block-head-content">
										<h4 class="title nk-block-title">
											Borrow with Aspen Lend
										</h4>
										<div class="nk-block-des">
											<p>
												Fill  <code class="code-class">in</code> the <code class="code-class">require</code> details to check your loan availability.
											</p>
											
										</div>
									</div>
								</div>
								<div class="card card-bordered" data-select2-id="14">
								    <span id="error-amount"></span>
									<div class="card-inner" data-select2-id="13">
										<form action="{{ route('loansubmit') }}" method="POST" class="form-validate" name="loanForm" id="loanForm" data-select2-id="loanForm">
                @csrf
										    
											<div class="row g-gs" data-select2-id="12">
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label" for="fva-full-name" name="amount">Enter loan amount ($): </label>
														
														<div class="form-control-wrap"><div class="form-text-hint"><span class="overline-title">Usd</span></div><input type="number" min="500" required="" class="form-control invalid" name="amount" id="loanAmount" placeholder="enter amount" fdprocessedid="ftjy5n" aria-describedby="loanAmount-error" aria-invalid="true"><span id="loanAmount-error" class="invalid">Please enter a value greater than or equal to 500.</span></div>
													</div>
												</div>
												<div class="col-md-6" data-select2-id="11">
													<div class="form-group" data-select2-id="10">
													    <label class="form-label">Select stable coin (to receive payment)</label>
													    <div class="form-control-wrap" data-select2-id="9">
													        <select class="form-select select2-hidden-accessible" name="stableCoin" data-select2-id="1" tabindex="-1" aria-hidden="true">
													            <option value="" data-select2-id="3">select</option>
													            <option value="usdt" data-select2-id="23">Tether (USDT)</option>
													            <option value="wire"> Wire transfer</option>
													            <!--<option value="usdc" disabled="" data-select2-id="24">USDC</option>-->
													            </select>
													       </div>
													   </div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="form-label">Loan Term</label>
														<ul class="custom-control-group g-3 align-center">
															<li>
															<div class="custom-control custom-checkbox">
																<input type="radio" class="#" name="duration" value="3months" id="#" required="">
																<label class="#" for="fva-com-email">(3) months</label>
															</div>
															</li>
															<li>
															<div class="custom-control custom-checkbox">
																<input type="radio" class="#" id="fva-com-sms" name="duration" value="6months" required="">
																<label class="#" for="fva-com-sms">(6) months</label>
															</div>
															</li>
															<li>
															<div class="custom-control custom-checkbox checked">
																<input type="radio" class="#" id="fva-com-phone" required="" name="duration" value="1year">
																<label class="#" for="fva-com-phone">(1) year</label>
															</div>
															</li>
														</ul>
													</div>
												</div>
												
										<div class="form-group">
											<button type="submit" class="btn btn-lg btn-success btn-block">Apply</button>														
													</div>
												
												<div id="amountError"></div>
												<div id="payError"></div>
												<div id="loanTerm"></div>
												<div id="collCrypto"></div>
		
											</div>
										</form>
									</div>
								</div>
								
								<div class="card card-bordered card-preview">
                                      
                                        
                     @if ($loans->isEmpty())
                        <p>No loans found.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr style="background-color: ash;">
                                    <th>ID</th>
                                    <th>Amount</th>
                                    <th>Duration</th>
                                    <th>Date applied</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($loans as $loan)
                                    <tr>
                                        <td>{{ $loan->id }}</td>
                                        <td>{{ $loan->amount }}</td>
                                        <td>{{ $loan->duration }}</td>
                                        <td>{{ $loan->loanDate }}</td>
                                        <td>{{ $loan->status == 0 ? 'Pending' : 'Approved' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    
                    
                                    </div>
								
                                    
                                </div>
                               
                               <!-- nk-block -->
                            </div>
                        </div>
                    </div>
                </div>

                @endsection