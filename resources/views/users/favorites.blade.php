@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            
           
        </aside>
        <div class="col-sm-8">
        
        <?php    
        print $favorites
        ?>
           
        </div>
    </div>
@endsection