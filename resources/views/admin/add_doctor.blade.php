
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
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

        <div class="container" align="center" style="padding-top: 100px;">

          <from>
            <div style="padding:15px;">

              <lebel>Doctor Name</lebel>
              <input type="text" style="color:black;" name="name" placeholder="Write The Name">


              <div>

                <div style="padding:15px;">

              <lebel>Phone</lebel>
              <input type="number" style="color:black;" name="number" placeholder="Write The Number">



              <div>


                <div style="padding:15px;">

              <lebel>Speciality</lebel>

             <select style="color: black;">


              <option>--Select--</option>  
               <opinion value="Skin">Skin</opinion></option>
              <opinion value="Eye">Eye</opinion></option>
              <opinion value="Heart">Heart</opinion></option>
               <opinion value="Dental">Dental</opinion></option>

             </select>



              <div>






            <from>

        
        </div>
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>