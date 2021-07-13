@if(Route::currentRouteName() == 'sidebar')
<h3>
    Front is a administration panel for Laravel. It allows you to create CRUD easily in minutes. It allows to fully customize any part of the code.
</h3>
<p> This package was inspired on Laravel Nova.
Front is a administration panel for Laravel. It allows you to create CRUD easily in minutes. It allows to fully customize any part of the code.Differences with Laravel Nova:
Front is created just with PHP, so there isn't any dependency with any javascript framework.
It tries to be simpler to modify and adapt to any use.
Menu is not generated automatically</p>
<br>
<p> <b> Languages</b></p>
<ul class="list-group list-group-flush">
    <li class="list-group-item">JavaScript 55.4%</li>
    <li class="list-group-item">PHP 28.7%</li>
    <li class="list-group-item">CSS 2.1%</li>
    <li class="list-group-item">HTML 13.8%</li>
</ul>
@endif
@if(Route::currentRouteName() == 'documentationPage')
    @foreach($pageD as $item)
        <h1>{{$item->title}}</h1>
        <p>{{$item->information}}</p>
    @endforeach
@endif
