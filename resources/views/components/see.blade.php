@props(["title"=>null,'message',"color"])

<div {{ $attributes->merge(["style"=>"background-color:red"]) }} {{ $attributes->merge(['class' => 'text-'.$color]) }}>
    {{ $title }}  <br>
    {{ $message }} <br>
   Hello Component <br> {{ $slot }}
</div>