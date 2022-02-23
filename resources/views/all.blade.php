{{--<h1>This is a Heading..</h1>--}}
{{--<h1>{{$data}}</h1>--}}
{{--<h1>{{$sak}}</h1>--}}
{{--<h1>{{$rafa}}</h1>--}}

<section class="py-5">
    <div class="container">
        <div class="row">
           <div class="col-md-4">
               @foreach($students as $s_student)
               <div class="card">
                   <div class="card-body">
                       <h1>{{$s_student['name']}}</h1>
                       <h1>{{$s_student['id']}}</h1>
                       <h1>{{$s_student['mobile']}}</h1>
                   </div>
               </div>

               @endforeach
           </div>
        </div>
    </div>
</section>
