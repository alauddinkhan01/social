@if ($errors->any())
<div class="alert alert-danger alert-dismissible mb-4" role="alert" style="background-color: #f8d7da; border-color:#f5c6cb; color:#721c24; margin-bottom: 0px;">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@if (session(''))
<div class="alert alert-danger alert-dismissible mb-4" role="alert" style="background-color: #f8d7da; border-color:#f5c6cb; color:#721c24; margin-bottom: 0px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
    {{session()->get('')}}
</div> 
@endif
@if (session('addtocart'))
<div class="alert alert-success" role="alert" style="background-color: #d4edda; border-color:#c3e6cb; color:#155724; margin-bottom: 0px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
    {{session()->get('addtocart')}}
</div> 
@endif
@if (session('created'))
<div class="alert alert-success" role="alert" style="background-color: #d4edda; border-color:#c3e6cb; color:#155724; margin-bottom: 0px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
    {{session()->get('created')}}
</div> 
@endif
@if (session('buy'))
<div class="alert alert-success" role="alert" style="background-color: #d4edda; border-color:#c3e6cb; color:#155724; margin-bottom: 0px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
    {{session()->get('buy')}}
</div> 
@endif
@if (session('addbrand'))
<div class="alert alert-success" role="alert" style="background-color: #d4edda; border-color:#c3e6cb; color:#155724; margin-bottom: 0px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
    {{session()->get('addbrand')}}
</div> 
@endif
@if (session('updatebrand'))
<div class="alert alert-success" role="alert" style="background-color: #d4edda; border-color:#c3e6cb; color:#155724; margin-bottom: 0px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
    {{session()->get('updatebrand')}}
</div> 
@endif
@if (session('deletebrand'))
<div class="alert alert-danger" role="alert" style="background-color: #da61713f; border-color:#f01c00; color:#ff5100; margin-bottom: 0px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
    {{session()->get('deletebrand')}}
</div> 
@endif
@if (session('addcategory'))
<div class="alert alert-success " role="alert" style="background-color: #d4edda; border-color:#c3e6cb; color:#155724; margin-bottom: 0px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
    {{session()->get('addcategory')}}
</div> 
@endif
@if (session('addcategory'))
<div class="alert alert-success " role="alert" style="background-color: #d4edda; border-color:#c3e6cb; color:#155724; margin-bottom: 0px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
    {{session()->get('addcategory')}}
</div> 
@endif
@if (session('update'))
<div class="alert alert-success " role="alert" style="background-color: #d4edda; border-color:#c3e6cb; color:#155724; margin-bottom: 0px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
    {{session()->get('update')}}
</div> 
@endif
@if (session('delete'))
<div class="alert alert-danger mb-4" role="alert" style="background-color: #f8d7da; border-color:#f5c6cb; color:#721c24; margin-bottom: 0px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
    {{session()->get('delete')}}
</div> 
@endif
@if (session('add'))
<div class="alert alert-success" role="alert" style="background-color: #d4edda; border-color:#c3e6cb; color:#155724; margin-bottom: 0px;">
    <a href="#" class="close" data-dismiss="alert" aria-label="close" style="text-decoration: none;">&times;</a>
    {{session()->get('add')}}
</div> 
@endif
@if (session('revoked'))
<div class="alert alert-warning">
    {{ session('revoked') }}
</div>
@endif