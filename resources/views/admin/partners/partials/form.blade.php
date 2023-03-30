

<div>
    <label for="">title</label>
	<input type="text" class="form-control" name="title" placeholder="" value="{{ $partner['title'] }}"> 
<div>

<div>
	<label for="">img</label>
	<input type="text" class="form-control" name="img" placeholder="" value="{{ $partner['img'] }}" readonly> 
<div>

<div class="pt-2">
	<div class="form-group">
	    <input type="file" name="file-img" placeholder="">
	</div>
</div>		


<div class="pt-4 pb-4">
	<input class="btn btn-primary" type="submit" value="Сохранить">
</div>

