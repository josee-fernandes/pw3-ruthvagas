<div class="alert alert-{{$type ?? ''}} alert-dismissible fade show" role="alert">
   <div class="alert-heading">{{$title ?? 'Default'}}</div>
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
   </button>
   <hr>
   {{$text ?? ''}}
</div>