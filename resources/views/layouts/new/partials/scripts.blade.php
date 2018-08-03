 @if ($message = Session::get('success'))
<script type="text/javascript">


$.toast({
    heading: 'Success',
    text: '{{$message}}',
    showHideTransition: 'slide',
    position: 'bottom-right',
    icon: 'success'
})
</script>

@endif

 @if (count($errors))

            @foreach($errors->all() as $error)
<script type="text/javascript">


$.toast({
    heading: 'Error',
    text: '{{$error}}',
    showHideTransition: 'slide',
    position: 'bottom-right',
    icon: 'error'
})
</script>
          
            @endforeach

            @endif
            
         @if (session('error'))    
            
        <script type="text/javascript">


$.toast({
    heading: 'Error',
    text: '{{session("error")}}',
    showHideTransition: 'slide',
    position: 'bottom-right',
    icon: 'error'
})
</script>   
@endif

 @if (session('status'))
 
 <script type="text/javascript">


$.toast({
    heading: 'Error',
    text: '{{ session("status") }}',
    showHideTransition: 'slide',
    position: 'bottom-right',
    icon: 'error'
});
</script>


@endif