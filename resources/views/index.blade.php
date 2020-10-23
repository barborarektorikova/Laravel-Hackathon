
@foreach ($owners as $owner)
Name: {{$owner->name}}<br>

@foreach ($owner->animal as $a)
    Pet Name:{{($a->name)}}<br>
@endforeach
<br>
@endforeach


{{-- 
@foreach ($animals as $animal)
    Name: {{$animal->name}}<br>
    Breed: {{$animal->breed}}<br>
    {{var_dump($animal->owner)}}
@endforeach --}}