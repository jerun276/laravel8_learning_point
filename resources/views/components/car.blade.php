<div style="background-color: yellow;border:solid 5px blue;">
    <h2>My variable is : {{ $myVar }}</h2>
    <ul>
        @foreach ($cars as $car)
            <li>{{ $car }}</li>
        @endforeach
    </ul>
</div>
