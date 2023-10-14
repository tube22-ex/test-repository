<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
    Hello World.
    </div>
    <div>
    現在の日時は「<strong style="color:red;">{{ $now_date }}</strong>」時です！
    </div>
    <div>
    @if( $index === 1 )
        indexが1です
    @elseif( $index === 2 )
        indexが2です
    @else
        indexが1,2ではありません。
    @endif
    </div>
    <div>
    @foreach($array as $value)
        <li>{{ $value }}</li>
    @endforeach
    </div>
    <div>
    @foreach($arrayB as $key => $value)
        <li>{{ $key }}:{{ $value }}</li>
    @endforeach
    </div>
</body>
</html>