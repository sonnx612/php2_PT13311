<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        label.error{
            color: red;
            display: block;
        }
    </style>
</head>
<body>
    <form action="<?= $baseUrl . 'save-add-product'?>" method="post" 
                    enctype="multipart/form-data">
        <div>
            <label for="">Product name</label>
            <input class="namestyle form-control" type="text" name="name" id="">
            <span id="nameerr" style="color:red"></span>
        </div>
        <div>
            <label for="">Category</label>
            <select name="cate_id" id="">
                <?php foreach($cates as $c): ?>
                    <option value="<?= $c->id ?>"><?= $c->cate_name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div>
            <label for="">Product Image</label>
            <input type="file" name="image" id="">
        </div>
        <div>
            <label for="">Product price</label>
            <input type="text" name="price" id="">
            <span id="priceerr" style="color:red"></span>
        </div>
        <div>
            <label for="">Product star</label>
            <input type="number" name="star" max="5" id="">
        </div>
        <div>
            <label for="">Product views</label>
            <input type="number" name="views" min="0" id="">
        </div>
        <div>
            <label for="">Short description</label>
            <textarea name="short_desc" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">Detail</label>
            <textarea name="detail" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Save</button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script>
        // function validate(){
        //     // thu thap du lieu tu form
        //     var name = document.getElementsByClassName('namestyle')[0].value;
        //     var price = document.querySelector('input[name="price"]').value;
        //     var star = document.querySelector('input[name="star"]').value;
        //     var views = document.querySelector('input[name="views"]').value;
        //     var short_desc = document.querySelector('textarea[name="short_desc"]').value;
            
        //     // kiem tra du lieu
        //     var err = false;
            
        //     if(name.length == 0 ){
        //         document.querySelector('#nameerr').innerText = "Tên sản phẩm không được để trống";
                
        //         err = true;
        //     }else if(name.length > 10){
        //         document.querySelector('#nameerr').innerText = "Tên sản phẩm không nhiều hơn 10 ký tự";
        //         err = true;
        //     }

        //     if(isNaN(price)){
        //         document.querySelector('#priceerr').innerText = "Vui lòng nhập số";
        //         err = true;
        //     }else if(price < 0){
        //         document.querySelector('#priceerr').innerText = "Vui lòng nhập số dương";
        //         err = true;
        //     }else if( price > 10000){
        //         document.querySelector('#priceerr').innerText = "Giá sản phẩm không lớn hơn 10000";
        //         err = true;
        //     }

        //     // neu vi pham => hien thi thong bao vi pham
        //     // return false => ngan chan viec nguoi dung gui data len server
        //     // neu khong vi pham
        //     // return true => cho phep gui data len server

        //     return !err;
        // }

        // $('form').on('submit', function(){
        //     var data = getFormData($(this));
        //     if(data.name.length == 0 ){
        //         $('#nameerr').text('Nhap chu vao day!!!!');
        //     }
        //     return false;
        // });

        // chuyen du lieu tu form sang json object
        function getFormData($form){
            var unindexed_array = $form.serializeArray();
            var indexed_array = {};

            $.map(unindexed_array, function(n, i){
                indexed_array[n['name']] = n['value'];
            });

            return indexed_array;
        }


        $(document).ready(function(){
            $('form').validate({
                rules:{
                    name: {
                        required: true,
                        max: 10
                    },
                    price: {
                        number: true,
                        required: true,
                        min: 0,
                        max: 1000,
                    }
                },
                messages:{
                    name: {
                        required: "Vui lòng điền dữ liệu",
                        max: "Số lượng ký tự tối đa là 10"
                    },
                    price: {
                        number: "Dữ liệu cần là số",
                        required: "Vui lòng điền dữ liệu",
                        min: "Dữ liệu tối thiểu phải bằng 0",
                        max: "Dữ liệu tối đa bằng 1000",
                    }
                }
            });
        })

    </script>
</body>
</html>