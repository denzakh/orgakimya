@php
    $localeFieldArray = ['title'];
@endphp

@foreach ($localeFieldArray as $fieldName)
    <h2 class="pt-2">{{ $fieldName }}</h2>
    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $localeCodeProperties)
        @php
            $inputName = $fieldName . '_' . $localeCode;
            $inputValue = isset($article) ? $article[$inputName] : '';
        @endphp

        <div>
            <label for="">{{ $inputName }}</label>
            <input type="text" class="form-control" name="{{ $inputName }}" placeholder="" value="{{ $inputValue }}">
            <div>
    @endforeach
@endforeach

<h2 class="pt-2">media</h2>

<div>
    <label for="">img</label>
    <input type="text" class="form-control" name="img" placeholder="" value="{{ $article['img'] }}" readonly>
    <div>

        <div class="pt-2">
            <div class="form-group">
                <input type="file" name="file-img" placeholder="">
            </div>
        </div>

        <div>
            <label for="">doc</label>
            <input type="text" class="form-control" name="doc" placeholder="" value="{{ $article['doc'] }}"
                readonly>
            <div>

                <div class="pt-2">
                    <div class="form-group">
                        <input type="file" name="file-doc" placeholder="" id="file-doc">
                    </div>
                </div>


                <div class="pt-4 pb-4">
                    <input class="btn btn-primary" type="submit" value="Сохранить">
                </div>
