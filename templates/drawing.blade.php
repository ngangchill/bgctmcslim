@extends('layout')

@push('styles')
    <link rel="stylesheet" href="http://skyfall.herokuapp.com/assets/css/drawing.css">
@endpush

@section('content')
    <div class="section">
        <div class="row">
            <div class="col s12">
                <canvas id="drawing-canvas" width="480" height="420"></canvas>
                <div id="colorholder"></div>
            </div>

            <div class="col s3">
                <div class="card-panel">
                    <h2>Users:</h2>
                    <ul class="collection">
                        <li class="collection-item">user1</li>
                        <li class="collection-item">user2</li>
                        <li class="collection-item">user3</li>
                        <li class="collection-item">user4</li>
                        <li class="collection-item">user5</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="http://skyfall.herokuapp.com/assets/js/drawing.js"></script>
    <script>
            var canvas = document.getElementById('drawing-canvas');
            var ctx = canvas.getContext('2d');

            var img = new Image();
            img.onload = drawImageScaled.bind(null, img, ctx);


            function drawImageScaled(img, ctx) {
                var canvas = ctx.canvas;
                var hRatio = canvas.width / img.width;
                var vRatio = canvas.height / img.height;
                var ratio = Math.min(hRatio, vRatio);
                var centerShift_x = (canvas.width - img.width * ratio) / 2;
                var centerShift_y = (canvas.height - img.height * ratio) / 2;
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                ctx.drawImage(img, 0, 0, img.width, img.height,
                    centerShift_x, centerShift_y, img.width * ratio, img.height * ratio);
            }
            img.src = 'http://skyfall.herokuapp.com/assets/img/a.jpg';
        </script>


@endpush