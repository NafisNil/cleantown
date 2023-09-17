

@include('backend.sessionMsg')
<div class="card-body">
    <div class="form-group">
        <label for="exampleInputEmail1">  Name (English) <span style="color:red" >*</span></label>
       
        <input type="text" class="form-control" name="name_en" value="{!!old('name_en',@$edit->name_en)!!}">
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">  Name (Bangla) <span style="color:red" >*</span></label>
       
        <input type="text" class="form-control" name="name_bn" value="{!!old('name_bn',@$edit->name_bn)!!}">
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">  Fathers Name (Bangla) <span style="color:red" >*</span></label>
       
        <input type="text" class="form-control" name="father_name" value="{!!old('father_name',@$edit->father_name)!!}">
       
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">  Husband Name (Bangla) </label>
       
        <input type="text" class="form-control" name="husband_name" value="{!!old('husband_name',@$edit->husband_name)!!}">
       
      </div>


      
<div class="form-group">
  <label for="exampleInputEmail1">Address <span style="color:red" >*</span></label>
 <textarea name="address" id="general" cols="30" rows="10" class="form-control" >{!!old('address',@$edit->address)!!}</textarea>

 
</div>



  <div class="form-group">
    <label for="exampleInputEmail1">  Phone. </label>
   
    <input type="text" class="form-control" name="phone" value="{!!old('phone',@$edit->phone)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">  NID. </label>
   
    <input type="number" class="form-control" name="nid" value="{!!old('nid',@$edit->nid)!!}" min="9">
   
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">  Ward No</label>
   
    <input type="number" class="form-control" name="ward_no" value="{!!old('ward_no',@$edit->ward_no)!!}" max="9" min="0">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">  Holding No.</label>
   
    <input type="text" class="form-control" name="holding_no" value="{!!old('holding_no',@$edit->holding_no)!!}">
   
  </div>

</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>

<script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
<script>
  CKEDITOR.replace( 'address' );
</script>