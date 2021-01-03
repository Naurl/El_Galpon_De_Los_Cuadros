function OnSearchByNameBtnClick()
{

    jQuery(document).ready(function($){

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
            //$.post("searchToDB.php", {table: "cuadros", filterValue: textValue, filterField: "name"}, queryCallback);
            //jQuery.post( url [, data ] [, success ] [, dataType ] )
            $.post("getProductList.php", {table: "cuadros", filterValue: textValue, filterField: "name"}, queryCallback, "html");
        }
    });
}

const searchByName_btn = document.querySelector("#searchByName_btn");
searchByName_btn.addEventListener('click', OnSearchByNameBtnClick);