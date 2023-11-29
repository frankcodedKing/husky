@extends('dashblayout.dashlayout')
<style>
    .flex{
        display: flex;
        justify-content: space-between;
        padding: 10px;
    }
    .flex input,.wid input{
        flex-basis: 60%;
        background: transparent!important;
        border: none!important;
        outline: none!important;
        color: black!important;
        font-weight: bold!important;
        display: block;
        font-size: 20px;
        
    }
.wid input{
    display: inline;
    padding: 10px;
    width: 50%;
   
}
    .flex input:focus{
        border: none;
        background: none;
    }
   .flex label{
    display: block;
   }

   .upload {
    position: absolute;
    font-size: 30px;
    bottom: 20;
    right: 17%;
    cursor: pointer;
}
.updatef{
    display: flex;
}
@media (max-width:480px){
    .updatef{
        display: block;
    }
    .upload {
    position: absolute;
    font-size: 30px;
    bottom: 20;
    right: 45%;
    cursor: pointer;
}
}
   /* .image-file{
    position: absolute;
    color: red!important;
    width: 10px;
    border-radius: 50%;
    color: red;
    background: red!important;

   } */
   
</style>
@section('body')

<form method="POST" action="{{route('dashb_profile_save')}}" enctype="multipart/form-data">
    @csrf
        <div class="wid" style="margin: 30px;" >
            <div class="card shadow border-0 text-center p-0" style="margin-bottom: 10px;">
                <div class="profile-cover rounded-top"  data-background=" {{ Auth::user()->profilepic? asset('storage/'.Auth::user()->profilepic): asset("dashb/assets/img/profile-cover.jpg")}}"></div>
                <div class="card-body pb-5" style="text-align:left;">
                    <div class="updatef" >
                   <div style="position: relative;"><img width="100%" height="auto" src="{{ Auth::user()->profilepic? asset('storage/'.Auth::user()->profilepic): asset("dashb/assets/img/profile-cover.jpg")}}" class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="{{Auth::user()->name}} Portrait" style="border: 1px solid grey;" > <label class="upload" for="upload"><i class="fa fa-camera" aria-hidden="true"></i></label><input class="image-file fa-pencil-square-o" type="file" name="profilepic" id="upload" style="display: none; visiblity:none" ></div> 
                    <input  id="email" name="email" type="email" value="{{Auth::user()->email}}" placeholder="name@company.com" >

                </div>
                    <h4 class="h3">{{Auth::user()->name}}</h4>
                    <h5 class="fw-normal">Investor</h5>
                    <p class="text-gray mb-4">{{Auth::user()->city}}</p>
                    <a class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-2" href="#">
                        <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                        Connect
                    </a>
                   
                </div>
             </div>
        </div>
       

    
        <div class="card card-body border-0 shadow mb-4" style="margin: 30px;">
            <h2 class="h5 mb-4">Personal information</h2>
           
                
                    
                        <div  class="flex">
                            <label for="first_name">Full Name</label>
                            <input class="form-control"  name="name" id="first_name" value="{{Auth::user()->name}}" type="text" placeholder="Enter your first name" required>
                        </div>
                    
                    
                
              
                <div class="flex">
                        <label for="birthday">DOB</label>
                        
                            <input data-datepicker="" name="birthday" value="{{Auth::user()->birthday}}" class="form-control" id="birthday" type="text" placeholder="dd/mm/yyyy" required>                                               
                        
                </div>
                <div class="flex">
                        {{-- <label for="gender">Gender</label> --}}
                        <select class="form-select mb-0" id="gender" name="gender" value="" aria-label="Gender select example">
                           
                            <option selected value="{{Auth::user()->gender}}">{{Auth::user()->gender != ""? Auth::user()->gender: "Gender"}}</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                 </select>
            </div>
               
              
                    
                        <div class="flex">
                            <label for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="email" value="{{Auth::user()->email}}" placeholder="name@company.com" required>
                        </div>
                  
                    
                        <div class="flex">
                            <label for="phone">Phone</label>
                            <input class="form-control" id="phone" type="number" name="phone" value="{{Auth::user()->phone}}" placeholder="+12-345 678 910" required>
                        </div>
                   
             
                {{-- <h2 class="h5 my-4">Location</h2> --}}
               
                    
                        <div class="flex">
                            <label for="address">Address</label>
                            <input class="form-control" id="address" type="text" name="address" value="{{Auth::user()->address}}" placeholder="Enter your home address" required>
                        </div>
                  
                    
                        <div class="flex">
                            <label for="number">Postal Code</label>
                            <input class="form-control" id="number" value="{{Auth::user()->post_code}}" type="text" name="postal_code" placeholder="No." required>
                        </div>
                    
              
               
                    
                        <div class="flex">
                            <label for="city">City</label>
                            <input class="form-control" id="city" value="{{Auth::user()->city}}" type="text" name="city" placeholder="City" required>
                        </div>
                   
                    
               
                <div class="button" style="margin-bottom:40px;">
                    <button class="btn btn-success" type="submit">Save all</button>
                </div>
            </form>
        </div>
        
    















@endsection
