
@php
	$localeFieldArray = [
		'title',
		'img',
	];

	$localeAreaArray = [
		'text',
	]
@endphp

@foreach($localeFieldArray as $fieldName)
	<h2 class="pt-2">{{$fieldName}}</h2>
	@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $localeCodeProperties)
	    @php   
	    	$inputName = $fieldName.'_'.$localeCode;
	    	$inputValue = isset($post) ? $post[$inputName] : '';
	    @endphp 

	    <div>
		    <label for="">{{ $inputName }}</label>
			<input type="text" class="form-control" name="{{ $inputName }}" placeholder="" value="{{ $inputValue }}"> 
		<div>

	@endforeach
@endforeach


@foreach($localeAreaArray as $fieldName)
	<h2 class="pt-2">{{$fieldName}}</h2>
	@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $localeCodeProperties)
	    @php   
	    	$inputName = $fieldName.'_'.$localeCode;
	    	$inputValue = isset($post) ? $post[$inputName] : '';
	    @endphp 
	    <div>
		    <label for="">{{ $inputName }}</label>
			<textarea type="text" class="form-control" name="{{ $inputName }}" placeholder="" required>{{ $inputValue }}</textarea>
		<div>

	@endforeach
@endforeach

<div class="pt-4">
	<input class="btn btn-primary" type="submit" value="Сохранить">
</div>

