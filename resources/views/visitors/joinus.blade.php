@extends("layouts.spacedcustomlayout")

@section("body")





<div class="main-content">
    
    <!--header section start-->
    <section class="breadcrumb-section" style="background-image: url('assets/images/teann1.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- breadcrumb Section Start -->
            <div class="breadcrumb-content">
               <h5>First, Let's Get to know You</h5>
            </div>
            <!-- Breadcrumb section End -->
          </div>
        </div>
      </div>
    </section>

    <!--about us page content start-->
    <section class="section-padding about-us-page">
        <div class="container">
            <div class="row">
            
            
            <div class="col-md-2">
                    
                    
                </div>
            
                <div class="col-md-8" style="background-color:rgba(3,66,58,0.1);padding:25px; padding-right:50px; border-radius:15px;">
                <div style="padding-right:50px;">
                <h3>
            
            Basic Financial Assessment     </h3>
                
                <div>
                
                <div>
                <label for="acc-select">Choose an Account type:</label>
<br>             <select id="acc-select">
                            <option value="">--Please choose an option--</option>
                            <option value="joint">Joint</option>
                            <option value="individual">Individual</option>
                            
                        </select>
                
                </div>
                
                <br>
                <div>
                
                <label for="acc-select">What are your Financial Goals:</label>
<br>           <select id="acc-select">
                            <option value="">--Please choose an option--</option>
                            <option value="retire">Retirement</option>
                            <option value="College">College Savings</option>
                            <option value="wealthaccumulation">Wealth accumulation</option>
                            <option value="income">Income</option>
                            <option value="mortgage">Mortgage Payment</option>
                            <option value="others">Others</option>
                        </select>
                        
                        </div>
                        <br>
                        
                        <div>
                
                <label for="acc-select">How do you feel about your Financial status:</label>
<br>
                        <select id="acc-select">
                            <option value="">--Please choose an option--</option>
                            <option value="confident">Confident</option>
                            <option value="anxious">Anxious</option>
                            
                        </select>
                        
                        </div>
                        
                        <br>
                        <div>
                        
                
                 <label for="acc-select">How do you feel about the markets:</label>
                 <br>

                        <select id="acc-select">
                            <option value="">--Please choose an option--</option>
                            <option value="confident">Positive</option>
                            <option value="anxious">Negative</option>
                            
                        </select>
                
                </div>
                <br>
                
                 <div>
                        
                
                 <label for="acc-select">Lets talk about your Financial status(optional):</label>
                 <br>

                        <textarea style="color:rgb(3,66,58)">
                        
                        
                        
                        
                        </textarea>
                
                </div>
                <div class="col-md-8">
                <a href="{{route('register')}}" class="btn btn-primary">Next step</a>
                
                            </div>
                
                </div>
                    
                    
                </div>
                </div>
                
                <div class="col-md-2">
                    
                    
                </div>
               
            </div>
            
            
        </div>
    </section>
</div>

<!-- Online Section End -->

<div class="clearfix"></div>





@endsection