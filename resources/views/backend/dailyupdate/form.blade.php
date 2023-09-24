

@include('backend.sessionMsg')
<div class="card-body">
    
  <div class="form-group row">
    <label for="Image" class="col-md-4 col-form-label text-md-right"></label>
    <div class="col-md-6">
    
    <img id="showImage" src="{{(!empty($edit->logo))?URL::to('storage/'.$edit->logo):URL::to('image/no_image.png')}}"  style="widows: inherit; width:120px; height:120px; border:1px solid #042b3d" alt="">
  </div>
</div>
  <div class="form-group">
    <label for="exampleInputFile">Picture <span style="color:red" >*</span></label>
    <div class="input-group">
      <div class="custom-file">
        <input type="file" name="logo" class="custom-file-input"  id="image">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
      </div>
     
    </div>
  </div>
      


  <div class="form-group">
    <label for="exampleInputEmail1">  Holding No.</label>
   
    <input type="text" class="form-control" id="holding_no_input" name="holding_no" value="{!!old('holding_no',@$edit->holding_no)!!}">
    <div id="suggestions"></div>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">  Volunteer Id</label>
   
    <input type="text" class="form-control" name="volunteer_id" value="{{Auth::user()->user_id}}" readonly>
    <div id="suggestions"></div>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Update : <span style="color:red" >*</span></label>
   &nbsp; <br>
    <input type="radio" name="status" value="A  " {{ ( "A
    " == @$edit->status) ? 'selected' : '' }}"> <p style="color: green">পরিষ্কার </p> <br>
<input type="radio" name="status" value="B" " {{ ( "B
" == @$edit->status) ? 'selected' : '' }}"><p style="color: rgb(156, 156, 8)">অপরিষ্কার </p> <br>
   <input type="radio" name="status" value="C" " {{ ( "C
   " == @$edit->status) ? 'selected' : '' }}"> <p style="color: red">খুবই অপরিষ্কার</p>
  </div>
 
</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>


<script>
  $(document).ready(function () {
      $('#holding_no_input').on('keyup', function () {
          var query = $(this).val();
          if (query !== '') {
              $.ajax({
                  url: '/holding_no_search',
                  method: 'GET',
                  data: { query: query },
                  dataType: 'json',
                  success: function (data) {
                      $('#suggestions').empty();
                      $.each(data, function (key, value) {
                          // Create a suggestion element and set a click event handler
                          var suggestionElement = $('<div class="suggestion">' + value + '</div>');
                          suggestionElement.click(function () {
                              // Fill the input field with the clicked suggestion
                              $('#holding_no_input').val(value);
                              $('#suggestions').empty();
                          });
                          $('#suggestions').append(suggestionElement);
                      });
                  }
              });
          } else {
              $('#suggestions').empty();
          }
      });
  });
</script>