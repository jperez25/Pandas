@extends("layouts.app")


@section('content')
<div class='contanier text-center'>
    <div class="row btn-toolbar">
        <div class="col-sm-1"></div>
        <div class="btn-group">
            <button class="btn" id="chicken" onclick="showDish(this.id)">Chicken</button>
            <button class="btn" id="beef" onclick="showDish(this.id)">Beef</button>
            <button class="btn" id="seafood" onclick="showDish(this.id)">Seafood</button>
            <button class="btn" id="pork" onclick="showDish(this.id)">Pork</button>
        </div>

        <div class="btn-group">
            <button class="btn" id="apps" onclick="showDish(this.id)">Apps</button>
            <button class="btn" id="egg roll" onclick="showDish(this.id)">Egg Roll</button>
            <button class="btn" id="rice" onclick="showDish(this.id)">Rice</button>
        </div>

        <div class="btn-group">
            <button class="btn" id="vegetarian" onclick="showDish(this.id)">Vegeterian</button>
            <button class="btn" id="noodles" onclick="showDish(this.id)">Noodles</button>
            <button class="btn" id="specialities" onclick="showDish(this.id)">Chef's Specialities</button>
        </div>

        <div class="btn-group">
            <button class="btn" id="smoothies" onclick="showDish(this.id)">Smoothies</button>
        </div>
    </div>
    <div class='container'>

        

    </div>

    <div id="displayDishes" class='container'>

        

    </div>
    

</div>


@endsection


@section('scripts')
<script>
    function showDish(str) { 
            $("#displayDishes").html("");
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.open("GET","{{route('getdish')}}",true);

            xmlhttp.onload = function() {
                console.log(JSON.parse(xmlhttp.responseText));

                $.get("{{route('getdish')}}", function(data, status){
                    
                });
                var dishes = JSON.parse(xmlhttp.responseText);
                
                $("#displayDishes").css("margin", "10px");

                $.each( dishes, function( key, value ) {

                    $("#displayDishes").append("<div class='row'>");
                                       
                        $.each(value, function( key, value ) {
                            if(str === value.type){
                                $("#displayDishes").append(
                                "<div class='col-sm-4'>"+
                                    "<div class='panel panel-primary'>"+
                                    "<div class='panel-heading'>"+value.name+"</div>"+
                                    "<div class='panel-body'><img src='"+value.imageUrl+"' class='img-responsive' style='width:100%' alt='Image'></div>"+
                                    "<div class='panel-footer'>"+
                                                "<span>$"+value.price+"</span>\n</br>"+
                                                "<span>"+value.ingredients+"</span>"+                                    
                                                "<div> <button type='button' class='btn btn-success' onclick='createOrder("+value.id+")'>Add to cart</button>"+
                                    "</div>"+

                                "</div>"
                                );
                            }
                        });
                            
                    $("#displayDishes").append("</div>");
                });
                
            }
            
            xmlhttp.send();
    }

    function getMessage(dish){
            $.ajax({
               type:'get',
               url:"{{route('getdish')}}",
               data:'_token = <?php echo csrf_token() ?>',
               success:function(data){
                  $("#displayDishes").html(JSON.parse(xmlhttp.responseTex));
               }
            });
         }

    function createOrder(id){
        $.ajax({
            type: "POST",
            url: '/createOrder',
            data: { customer: '{{Auth::user()->name}}', dish: id, _token: '{{csrf_token()}}' },
            success: function (data) {
                alert("Item added to cart");
                console.log(data);
            },
            error: function (data) {
                alert(data);
                console.log(data);

            },
        });
    }
</script>

@endsection