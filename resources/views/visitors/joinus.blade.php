@extends("layouts.customlayout")

@section("body")





<div class="main-content">
    
    <!--header section start-->
    <section class="breadcrumb-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <!-- breadcrumb Section Start -->
            <div class="#" >
               <h5 style="color: #024139;">First, Let's Get to know You</h5>
            </div>
            <!-- Breadcrumb section End -->
          </div>
        </div>
      </div>
    </section>

    <!--about us page content start-->
<section id="about" class="about" style="background-image: url('https://images.unsplash.com/photo-1482053450283-3e0b78b09a70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80'); background-size: cover; background-repeat: no-repeat;">        <div class="container">
            <div class="row">
            
            
          
                <div class="col-md-6 mx-auto" style="background-color: #fff; padding:25px; padding-right:50px; border-radius:15px;">
                <div style="padding-right:50px;">
                <h3>
            FIRST, LET'S GET TO KNOW YOU     </h3>
                
                <div>
                
                <div>
                <label for="acc-select">Choose an Account type:</label>
                <form>
                    
                
<br>             <select id="acc-select" required>
                            <option value="">--Please choose an option--</option>
                            <option value="joint">Joint</option>
                            <option value="individual">Individual</option>
                            
                        </select>
                
                </div>
                
                <br>
                <div>
                
                <label for="acc-select">What are your primary investment goals?:</label>
<br>           <select id="acc-select">
                            <option value="">--Please choose an option--</option>
                            <option value="retire">•Capital Preservation
</option>
                            <option value="College">•Regular Income Generation
</option>
                            <option value="wealthaccumulation"> •Long-Term Growth
</option>
                            <option value="income">•Diversification</option>
                            <!--<option value="mortgage">Mortgage Payment</option>-->
                            <!--<option value="others">Others</option>-->
                        </select>
                        
                        </div>
                        <br>
                        
                        <div>
                
                <label for="acc-select">What is your risk tolerance?
</label>
<br>
                        <select id="acc-select">
                            <option value="">--Please choose an option--</option>
                            <option value="confident">•Very Low
</option>
                            <option value="anxious">• Low
</option>

                            <option value="anxious">•Moderate
</option>

                            <option value="anxious">•High
</option>

                            <option value="anxious">•Very High</option>
                            
                        </select>
                        
                        </div>
                        
                        <br>
                        <div>
                        
                
                 <label for="acc-select">Are you currently working with a financial advisor?
</label>
                 <br>

                        <select id="acc-select">
                            <option value="">--Please choose an option--</option>
                            <option value="confident">•Yes</option>
                            <option value="anxious">•No</option>
                            
                        </select>
                
                </div>
                <br>
                <label for="acc-select">How would you rate your overall satisfaction with your current wealth management solutions?

</label>
                 <br>

                        <select id="acc-select">
                            <option value="">--Please choose an option--</option>
                            <option value="confident">                •Very Satisfied
</option>
                            <option value="anxious">• Very Dissatisfied
</option>   <option value="confident">                •Neutral

</option>
                            <option value="anxious">•Dissatisfied

</option>
                            
                        </select>
                
                </div>
                
                 <div>
                        <br>
                
                 <label for="acc-select">Please provide any additional financial information or details about yourself that you would like us to know of:</label>
                 <br>

                        <textarea style="color:rgb(3,66,58)">
                        
                        
                        
                        
                        </textarea>
                
                </div>
                <div class="col-md-8">
                <a href="{{route('register')}}" class="btn btn-primary" style="background-color: #024139;">Next step</a>
                
                            </div>
                
                </div>
                    </form>
                    
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