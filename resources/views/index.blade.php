<form action="{{route('search')}}" method="get">
    @csrf
    Client Name Search: <input name='name' type="text"><br>
    Client Surname Search: <input name='surname' type="text"><br>
    <input type="submit" value="Search"><br>
</form>

@foreach ($owners as $owner)
Name: {{$owner->name}} {{$owner->surname}}<br>
Pets: <br>
@foreach ($owner->animal as $a)
    Name:{{($a->name)}}<br>
    Breed:{{($a->breed)}}<br>
    Weight:{{($a->weight)}}<br>
    Age:{{($a->age)}}<br>
    <br>
@endforeach
<br>
@endforeach


{{-- 
@foreach ($animals as $animal)
    Name: {{$animal->name}}<br>
    Breed: {{$animal->breed}}<br>
    {{var_dump($animal->owner)}}
@endforeach --}}