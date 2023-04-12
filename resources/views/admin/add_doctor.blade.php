
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
      
      label
      {
        display: inline-block;
        width: 200px;
      }
    </style>
    
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
      
      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">


        
          

   
   <div class="container" align="center" style="padding-top: 100px">

     @if(session()->has('message'))

         <div class="alert alert-success">

          <button type="button"class="close"data-dismiss="alert">

            x

          </button>


          {{session()->get('message')}}
           

         </div>

         @endif

    <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
      @csrf

      <div style="padding:15px;">
        
        <lebel>Doctor Name</lebel>

        <input type="text" style="color:black;" name="name" placeholder="Write The Name" required="">

      </div>

      <div style="padding:15px;">
        
        <lebel>Phone</lebel>

        <input type="number" style="color:black;" name="number" placeholder="Write The Number" required="">

      </div>

      <div style="padding:15px;">
        
        <lebel>Speciality</lebel>

        <select name="speciality" style="color:black; width: 200px;" required="">

          <option>--Select--</option>
          <option value="Skin">Skin</option>
          <option value="Heart">Heart</option>
          <option value="Eye">Eye</option>
          <option value="Dental">Dental</option>




        </select>
      </div>

      <div style="padding:15px;">
        
        <lebel>Room No</lebel>

        <input type="text" style="color:black;" name="room" placeholder="Write The room number" required="">

      </div>

      <div style="padding:15px;">
        
        <lebel>Doctor Image</lebel>

        <input type="file" style="color:black;" name="file" required="">

      </div>
      <div style="padding:15px;">
        
        

        <input type="submit" class="btn btn-success">

      </div>
      


    </form>
     

   </div>
   </div>

     


        
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>