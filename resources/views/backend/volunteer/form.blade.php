

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
        <label for="exampleInputEmail1">  Date of Birth </label>
       
        <input type="date" class="form-control" name="dob" value="{!!old('dob',@$edit->dob)!!}">
       
      </div>

      
<div class="form-group">
  <label for="exampleInputEmail1">Address <span style="color:red" >*</span></label>
 <textarea name="address" id="general" cols="30" rows="10" class="form-control" >{!!old('address',@$edit->address)!!}</textarea>

 
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Education <span style="color:red" >*</span></label>
 <textarea name="education" id="general" cols="30" rows="10" class="form-control" >{!!old('education',@$edit->education)!!}</textarea>

 
</div>

<div class="form-group">
    <label for="exampleInputEmail1">  Flat No. </label>
   
    <input type="text" class="form-control" name="flat_no" value="{!!old('flat_no',@$edit->flat_no)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">  Ownership. </label>
   
    <select name="ownership" class="form-control" id="">
      <option value="L">বাড়ীর মালিক (Land Owner)</option>
      <option value="O"> দখলদার (Occupant)</option>
  </select>
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">  Email. </label>
   
    <input type="text" class="form-control" name="email" value="{!!old('email',@$edit->email)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">  Phone. </label>
   
    <input type="text" class="form-control" name="mobile_no" value="{!!old('mobile_no',@$edit->mobile_no)!!}">
   
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">  NID. </label>
   
    <input type="number" class="form-control" name="nid" value="{!!old('nid',@$edit->nid)!!}" min="9">
   
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">  Birth Certificate. </label>
   
    <input type="number" class="form-control" name="birth_cer" value="{!!old('birth_cer',@$edit->birth_cer)!!}" min="9">
   
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">  Holding Type </label>
   
    <select name="holding_type" class="form-control" id="">
      <option value="বাসা">বাসা</option>
      <option value="দোকান">দোকান</option>
      <option value="অফিস">অফিস</option>
      <option value="হাসপাতাল">হাসপাতাল</option>
      <option value="ধর্মীয় প্রতিষ্ঠান">ধর্মীয় প্রতিষ্ঠান</option>
      <option value="শিক্ষা প্রতিষ্ঠান">শিক্ষা প্রতিষ্ঠান</option>
      <option value="অন্যান্য">অন্যান্য</option>
  </select>
   
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