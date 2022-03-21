$(document).ready(function(){
    $("#submit").click(function(){
        console.log("button clicked!");

        var productId = $('#productId').val();
        var productName = $('#productName').val();
        var productPrice = $('#productPrice').val();
        

        $.ajax({
            url: "ajax.php",
            method: "post",
            data: {id : productId, name: productName, price: productPrice, action: 'add'},
            dataType: "JSON"
        }).done(function(response){
            console.log(response);
            // console.log(response[0].name);
            console.log(response.length);

            var html = '';
            html += '<table><tr><th>ID</th><th>NAME</th><th>PRICE</th><th>ACTION</th></tr>';
            for(let i=0; i<response.length; i++){
                html += '<tr>\
                            <td>'+response[i].id+'</td>\
                            <td>'+response[i].name+'</td>\
                            <td>'+response[i].price+'</td>\
                            <td>EDIT / DELETE</td>\
                        </tr>';
            }
            
            html += '</table>';

            $('#cart').html(html);
        });
    });
});