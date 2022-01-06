<div class="col-12">
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <div class="col-md-12 col-sm-12">
        <div class="form-group">
            <label>{{$labelName}} <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error($inputname) is-invalid @enderror" 
                    {{$attributes}} value="{{$inputname}}">

            @error($inputname)
                <span>{{$message}}</span>
            @enderror
        </div>
    </div>
</div>