@extends ('layouts.app')

@section('title', 'TimeBrary')

@section('content')
    <p><input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none;"></p>
    <p><label for="file" style="cursor: pointer;">Upload Image</label></p>
    <p><img id="output" width="200" src="http://via.placeholder.com/280x380" /></p>

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection
