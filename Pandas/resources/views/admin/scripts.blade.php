 <!-- Menu Toggle Script -->
 <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        function displayCRUD(name) {
            $("#results").html("");

            if(name === "dishes"){
                $.get( "{{route('index')}}", function( data ) {
                    $( "#results" ).append( data );                    
                });
            }
            
            if(name === "orders"){
                $.get( "{{route('orders')}}", function( data ) {
                    $( "#results" ).append( data );                    
                });
            }

            if(name === "users"){
                $.get( "{{route('index')}}", function( data ) {
                    $( "#results" ).append( data );                    
                });
            }
        }
       
        function displayAddOrders() {
            $("#results").html("");

            $.get( "{{route('add')}}", function( data ) {
                $( "#results" ).append( data );                
            });
        }

        function displayEdit(id) {
            $("#results").html("");
            $.ajax({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "http://localhost:8000/edit/"+id,
                success: function( data ) {
                    alert( data );
                    $( "#results" ).append( data );
                }
            });
            
           
        }


        function displayAdd() {
            $("#results").html("");
            var name = $('#name').val();
            var dishes = $('#dishes').val();
            var total = $('#total').val();
            $.ajax({
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{route('insertOrders')}}",
                data: {name:name, dishes:dishes, total:total},
                success: function( data ) {
                    alert( data );
                    $( "#results" ).append( data );
                }
            });
            
           
        }

        

        $( "#delete" ).submit( function( e ) {
            e.preventDefault(); 
            alert(e);
            $.ajax({
                type: "delete",
                url: "http://localhost:8000/delete",
                success: function( data ) {
                    alert( data );
                    $( "#results" ).append( data );
                }
            });
        });

        $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
                    $('#img-upload').show();
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
        
    </script>