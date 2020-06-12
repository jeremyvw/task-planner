<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    {{$slot}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session()->get('message')}}
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger">
            {{session()->get('error')}}
        </div>
    @endif
</div>