let rowCount = 0;
$(document).on('click','.addNew',function ()
{
    $(this).attr("disabled","disabled");
    let index = $("table tbody tr:last-child").index();
    let actions = $("table td:last-child").html();
    let newRow = $('<tr></tr>');
    let col = '';
    col += '<td><input type="text" class="listOrder" id="lisrOrd' + rowCount + '"></td>';
    col += '<td><input type="text" class="productCode" id="productCode' + rowCount + '"></td>';
    col += '<td><input type="text" class="productName" id="productName' + rowCount + '"></td>';
    col += '<td><input type="text" class="productType" id="productType' + rowCount + '"></td>';
    col += '<td><input type="text"  class="userFlag" id="useflag' + rowCount + '"></td>';
    col += `<td> ${actions} </td>`  ;
    newRow.append(col);
    $('#productList').append(newRow);
    $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
    rowCount++;
})
$(document).on('click','.add',function ()
{
    let lastRow = $("table tbody tr:last-child");
    let listOrder = lastRow.find(".listOrder").val();
    let productCode = lastRow.find(".productCode").val();;
    let productName = lastRow.find(".productName").val();;
    let productType = lastRow.find(".productType").val();;
    let useFlag = lastRow.find(".userFlag").val();;
    let _token   = $('meta[name="csrf-token"]').attr('content');
    let current = $(this).parents('td').find(".add, .edit");
    console.log(current);
    $.ajax({
        url:"/ProductView",
        type:"POST",
        data:{
            listOrder:listOrder,
            productCode:productCode,
            productName:productName,
            productType:productType,
            useFlag: useFlag,
            _token: _token
        },
        success:function(response){
            if(response) {
                current.toggle();
                $('#btnAddNew').removeAttr("disabled","disabled");
            }
        },
    });
});
$(document).on('click','.delete',function ()
{
    let productCode = $(this).parents("tr").find(".productCode").text();
    let _token   = $('meta[name="csrf-token"]').attr('content');
    let current = $(this).parents('tr');
    console.log(current);
    $.ajax({
        url:`/ProductView/${productCode}`,
        type:"DELETE",
        data:{
            productCode:productCode,
            _token: _token
        },
        success:function(response){
            if(response) {
                current.remove();
            }
        },
    });
});
$.ajax({
    url:"GetData",
    type:"GET",
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    success:function(response){
        rendTable(response.data);
        if(response) {
            $('.success').text(response.success);
        }
    },
});
let cl = $(".clone").clone();
function rendTable(data)
{
    // console.log(cl.html());
    $.each(data, function (key, value ){
        let str;
        let clone = cl.clone().show();
        str += '<tr>';
        str += '<td class="listOrder">'+value.listorder+'</td>';
        str += '<td class="productCode">'+value.productcode+'</td>';
        str += '<td class="productName">'+value.productname+'</td>';
        str += '<td class="productType">'+value.producttype+'</td>';
        str += '<td class="userFlag"><input type="text" aria-label="Text input with radio button" id="useflag"\n' +
            '                                        value="'+value.useflag+'"></td>\n' +
            '        <td>';
        str += clone.html();
        str += '</tr>';
        $("tbody").append(str);

    });
}

