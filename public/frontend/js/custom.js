
$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    loadcart();
    function loadcart()
    {


        $.ajax({
            method: "GET",
            url: "/load-cart-data" ,
            success: function (response){
                $('.cart-count').html('');
                $('.cart-count').html(response.count);

            }
        });
    }
    loadwishlist();
    function loadwishlist()
    {


        $.ajax({
            method: "GET",
            url: "/load-wishlist-data" ,
            success: function (response){
                $('.wishlist-count').html('');
                $('.wishlist-count').html(response.count);

            }
        });
    }
    $('.delete-cart-item').click(function (e) {
        e.preventDefault();


        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method: "POST",
            url: "delete-cart-item",
            data: {
                'prod_id': prod_id,
            },
            success: function (response) {
                $('.cartitems').load(location.href + ".cartitems");
                swal("", response.status, "success");
                window.location.reload();
            }
        });
    });






   /* $('.addtocartbtn').click(function (e) {
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty-input').val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "add-to-cart",
            data: {
                '_token': '{{ csrf_token() }}',
                'product_id': product_id,
                'product_qty': product_qty,
            },
            success: function (response){
                swal("",response.status, "success");

            },
            error: function (response) {
                // Affiche un message d'erreur
                swal("",response.status, "error");
            }


        });
    });*/

    $('.remove-wishlist-item').click(function (e){
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method: "POST",
            url: "delete-wishlist-item",
            data: {
                'prod_id': prod_id,
            },

            success: function (response) {
                window.location.reload();
                swal("", response.status, "success");

            }
        })
    });

    $('.cart-count').click(function (e){
        e.preventDefault();

    });

    $('.wishlist-count').click(function (e){
        e.preventDefault();

    });



});

// Récupération du formulaire

