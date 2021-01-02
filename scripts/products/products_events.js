function OnSearchByNameBtnClick()
{
    function queryCallback(result)
    {
        console.log("result: " + JSON.stringify(result));

        $("#productList").html(result);
    }

    var textValue = document.getElementById("searchByName_text").value;
    //var textValue = $("searchByName_text").val();
    console.log("textValue: " + textValue);

    if(textValue && textValue != "")
    {
        //$.post("scripts/php/sys_helpers_database/query.php", {table: "cuadros", filterValue: textValue, filterField: "name"}, queryCallback);
        //jQuery.post( url [, data ] [, success ] [, dataType ] )
        $.post("get_products_list.php", {table: "cuadros", filterValue: textValue, filterField: "name"}, queryCallback, "html");
    }
}

const searchByName_btn = document.querySelector("#searchByName_btn");
searchByName_btn.addEventListener('click', OnSearchByNameBtnClick);