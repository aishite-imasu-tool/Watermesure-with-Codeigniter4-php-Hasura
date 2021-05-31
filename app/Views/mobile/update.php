<head>
    <title>EXCEEDマンション</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        //Service Worker Offline when you not have Internet
        // Check Service Work are Supported
        //Authur : Nguyen Tan Dat
        // Date Build : 14-5-2020

        if ('serviceWorker' in navigator) {
            console.log('Service Worker Supported')
        }
    </script>
    <style>
        @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css);
        @import url(https://fonts.googleapis.com/css?family=Source+Code+Pro:400,500);
        @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css);


        .font_logo {
            font-size: 30px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            text-decoration: solid;
            position: relative;
            right: 730px;
            margin-top: 8px;
        }



        /* Use a media query to add a breakpoint at 800px: */
        @media screen and (max-width: 800px) {

            .font_logo {
                font-size: 20px;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                text-decoration: solid;
                right: 120px;
                position: relative;
            }
        }

        .column {
            margin-bottom: 16px;
            padding: 0 8px;
            margin-top: 20px;

        }

        /* thiết lập chiều dài cột khi màn hình nhỏ hơn 650px*/
        @media screen and (max-width: 650px) {
            .column {
                width: 100%;

            }
        }

        /* thêm shadow cho class card*/
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);


        }

        .num {
            background-color: #FEFEF7;
        }

        .num_AC {
            background-color: #F5F77B;
        }

        /* .button {
            margin-top: 20px;
            outline: 0;
            padding: 2px;
            text-align: center;
            cursor: pointer;

        } */

        * {
            box-sizing: border-box;
            font-size: 16px;
        }

        form table {
            width: 100%;
            border-collapse: collapse;
        }

        form table tr,
        form table td {
            border: 2px solid #72725F;
        }




        form table tr td li {
            height: 100%;
            list-style: none;
        }

        form table li {
            width: 100%;
            height: 100%;
            padding: 10px;
            line-height: 40px;
            text-align: center;
            border: 1px solid #B7B7B7;
            border: 0;
            font-size: 16px;
        }

        form table li:focus {
            outline: none;
            background: #B7B7B7;
            color: #fff;
        }

        form table li:hover {
            background: #eee;
            transition: all .2s ease-in-out;
            box-shadow: 1px 1px 2px 3px gray;
            cursor: pointer;

        }

        form table input.operator {
            font-weight: 700;
            color: #fff;
            background: #ffcc00;
        }



        .inp {
            width: 100px;
        }

        .return {
            margin-right: 20px;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            border-radius: 10px;
            width: 80px;
        }

        .update {
            padding: 10px;
            text-align: center;
            cursor: pointer;
            border-radius: 10px;
            width: 80px;
        }

        .storage {
            margin-right: 20px;
        }

        .upload {
            margin-right: 20px;
        }

        file-upload {
            background-color: #ffffff;
            width: 600px;
            margin: 0 auto;
            padding: 20px;
        }


        .file-upload-content {
            display: none;

        }

        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }






        .file-upload-image {
            max-height: 200px;
            max-width: 200px;
            margin: auto;
            padding: 20px;
        }

        .remove-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #cd4535;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #b02818;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }

        /* #tb_number{
       
            
        } */
        #table1 {
            display: none;
        }

        #checked {
            display: none;
        }

        #snackbar {
            visibility: hidden;
            /* Hidden by default. Visible on click */
            min-width: 250px;
            /* Set a default minimum width */
            margin-left: -125px;
            /* Divide value of min-width by 2 */
            background-color: #333;
            /* Black background color */
            color: #fff;
            /* White text color */
            text-align: center;
            /* Centered text */
            border-radius: 2px;
            /* Rounded borders */
            padding: 16px;
            /* Padding */
            position: fixed;
            /* Sit on top of the screen */
            z-index: 1;
            /* Add a z-index if needed */
            left: 50%;
            /* Center the snackbar */
            bottom: 30px;
            /* 30px from the bottom */
        }

        /* Show the snackbar when clicking on a button (class added with JavaScript) */
        #snackbar.show {
            visibility: visible;
            /* Show the snackbar */
            /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        /* Animations to fade the snackbar in and out */
        @-webkit-keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @keyframes fadein {
            from {
                bottom: 0;
                opacity: 0;
            }

            to {
                bottom: 30px;
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        @keyframes fadeout {
            from {
                bottom: 30px;
                opacity: 1;
            }

            to {
                bottom: 0;
                opacity: 0;
            }
        }

        .modal-confirm {
            color: #434e65;
            width: 525px;
        }

        .modal-confirm .modal-content {
            padding: 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
        }

        .modal-confirm .modal-header {
            background: #47c9a2;
            border-bottom: none;
            position: relative;
            text-align: center;
            margin: -20px -20px 0;
            border-radius: 5px 5px 0 0;
            padding: 35px;
        }

        .modal-confirm h4 {
            text-align: center;
            font-size: 36px;
            margin: 10px 0;
        }

        .modal-confirm .form-control,
        .modal-confirm .btn {
            min-height: 40px;
            border-radius: 3px;
        }

        .modal-confirm .close {
            position: absolute;
            top: 15px;
            right: 15px;
            color: #fff;
            text-shadow: none;
            opacity: 0.5;
        }

        .modal-confirm .close:hover {
            opacity: 0.8;
        }

        .modal-confirm .icon-box {
            color: #fff;
            width: 95px;
            height: 95px;
            display: inline-block;
            border-radius: 50%;
            z-index: 9;
            border: 5px solid #fff;
            padding: 15px;
            text-align: center;
        }

        .modal-confirm .icon-box i {
            font-size: 64px;
            margin: -4px 0 0 -4px;
        }

        .modal-confirm.modal-dialog {
            margin-top: 80px;
        }

        .modal-confirm .btn,
        .modal-confirm .btn:active {
            color: #fff;
            border-radius: 4px;
            background: #eeb711 !important;
            text-decoration: none;
            transition: all 0.4s;
            line-height: normal;
            border-radius: 30px;
            margin-top: 10px;
            padding: 6px 20px;
            border: none;
        }

        .modal-confirm .btn:hover,
        .modal-confirm .btn:focus {
            background: #eda645 !important;
            outline: none;
        }

        .modal-confirm .btn span {
            margin: 1px 3px 0;
            float: left;
        }

        .modal-confirm .btn i {
            margin-left: 1px;
            font-size: 20px;
            float: right;
        }

        .trigger-btn {
            display: inline-block;
            margin: 100px auto;
        }

        .material-icons {
            display: none;
        }
    </style>

</head>

<body>

    <div class="column" id="html">
        <div class="card" style="background-color: #f2f3f8 ;">
            <div class="container mt-4">
                <nav class="navbar navbar-dark bg-dark" style="border-radius: 5px;">
                    <a class="navbar-brand" href="#">EXCEEDマンション</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" onclick="history.back();">History</a>
                        </div>
                    </div>
                </nav>
                <div class="mt-3 table-responsive">

                    <table class="table table-striped table-bordered table-vcenter text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th class="wd-lg-20p text-center">
                                    <select class="form-control" id="search" onchange="dat()">
                                        <option disabled selected id="nameValue" style="background-color: #C1B4B4;"> Select Room ID </option>

                                        <?php foreach ($data2 as $key => $value) : ?>
                                            <?php $i++  ?>
                                            echo '<option value="<?php echo $i ?>"><?php echo $value['id'] . ' ' . $value['customer_name'] ?></option>';
                                        <?php endforeach ?>

                                    </select>
                                </th>
                                <th class=" wd-lg-20p text-center"><input type="text" class="form-control" id="workOrderCompletedDate" placeholder="Select Date" autocomplete="off">
                                </th>

                                <th><label id="label_id_rom"></label> <label>/40完了</label></th>

                            </tr>
                        </thead>
                    </table>

                    <?php foreach ($data as $key => $value) : ?>
                        <label class="form-control" id="info" style="text-align: center;margin-top: 10px;"><?php echo $value['room_id'] . ' ' . $value['customer_name'] ?></label>
                    <?php endforeach ?>

                    <form method="post" enctype="multipart/form-data">
                        <div class="row row-sm">
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                                <div class="card custom-card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col">
                                                <?php foreach ($data as $key => $value) : ?>
                                                    <p id="date_old"><?php echo $value['measurement_date'] ?> </p>
                                                <?php endforeach ?>

                                            </div>
                                            <div class="col">
                                                <p>前回検針値</p>
                                            </div>
                                            <div class="col">
                                                <?php foreach ($data as $key => $value) : ?>
                                                    <p id="wm_value"><?php echo $value['measure'] ?></p>
                                                <?php endforeach ?>

                                            </div>
                                        </div>
                                        <hr size="4" width="100%%" align="center" color="gray">
                                        <div class="row">
                                            <div class="col">
                                                <label id="pre_value">Day Previous Value</label>
                                            </div>
                                            <div class="col">
                                                <p>今回検針値</p>
                                            </div>
                                            <div class="col">
                                                <p> <input class="inp" type="textbox" id="result" readonly value="" onclick="showKeyBoard()" /> cm3</p>

                                            </div>
                                        </div>
                                        <hr size="4" width="100%%" align="center" color="gray">
                                        <div class="row">
                                            <div class="col">
                                            </div>
                                            <div class="col">
                                                <p>今回検針値</p>
                                            </div>
                                            <div class="col">
                                                <p id="final_vl">Value of Water Measure final</p>
                                                <span class="material-icons" id="error">
                                                    error
                                                </span>
                                            </div>

                                        </div>
                                        <div class="row" id="checked">
                                            <div class="col">
                                            </div>
                                            <div class="col">
                                                <p style="color: #E92828;font-weight: bold;text-align: center;">This room was updated ✓</p>
                                            </div>
                                            <div class="col">
                                                <p></p>
                                            </div>

                                        </div>
                                        <!-- <form name="calculator"> -->

                                        <table id="table1">
                                            <tbody>
                                                <ul class="clearfix">
                                                    <tr>
                                                        <td>
                                                            <li class="num" value="1">1</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="2">2</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="3">3</li>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <li class="num" value="4">4</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="5">5</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="6">6</li>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <li class="num" value="7">7</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="8">8</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="9">9</li>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <li class="num_AC" value="AC">CLR</li>
                                                        </td>
                                                        <td>
                                                            <li class="num" value="0">0</li>
                                                        </td>
                                                        <td>
                                                            <li class="num_AC" value="CE">DEL</li>
                                                        </td>
                                                    </tr>
                                                </ul>
                                                <?php
                                                // Display Response
                                                if (session()->has('message')) {
                                                ?>
                                                    <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                                                        <?= session()->getFlashdata('message') ?>
                                                    </div>
                                                <?php
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                        <!-- </form> -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Image Manager</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="<?php echo base_url('Home/fileUpload'); ?>" name="ajax_form" id="user_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                                        <div class="modal-body">
                                                            <div class="image-upload-wrap">
                                                                <input class="file-upload-input" name="uploadFile" id="uploadFile" type='file' onchange="readURL(this);" accept="image/*" />
                                                            </div>
                                                            <div class="file-upload-content">
                                                                <!-- <input type="file" class="dropify" src="#" data-default-file="" data-height="200" name="user_image" required="" accept="image/x-png,image/gif,image/jpeg" data-parsley-errors-container="#slErrorContainerImage" data-parsley-required-message="<?= lang('message.COMMON_E013') ?>" /> -->
                                                                <img class="file-upload-image" src="#" alt="your image" style="width: 100%;" />
                                                                <button type="button" onclick="removeUpload()" class="btn btn-primary">Remove <span class="image-title">Uploaded Image</span></button>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" id="send_form" class="btn btn-secondary" onclick="add_user( '<?= $id ?>')">Save</button>
                                                            <!-- <button type="submit" id="send_form" class="btn btn-success">Submit</button> -->
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end config">
                            <p><img src="https://img.icons8.com/metro/52/000000/camera.png" style="margin-top: 5px;" class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )" /></p>
                            <p><img src="https://img.icons8.com/dotty/50/000000/gallery.png" style="margin-top: 8px; margin-right: 50px;" data-toggle="modal" data-target="#exampleModal"" /></p>
                            <p><input  class=" btn btn-primary" onclick="location.href = 'index';" type='button' id="back" value="中止" style="margin-top: 20px; padding: 10px;margin: 10px; padding-left: 20px; padding-right: 20px; border-radius: 10px;"></input></p>
                            <p><input class="btn btn-primary" type='button' name='submit' id="updateData" value="登録" style="margin-top: 20px;padding: 10px;margin: 10px; padding-left: 20px; padding-right: 20px;border-radius: 10px;"></input> </p>
                        </div>
                    </form>
                </div>


            </div>

        </div>
        <div id="snackbar">Upload Successfully
        </div>
    </div>


    </div>
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <div class="icon-box">
                        <span class="material-icons">
                            cancel
                        </span>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <h4>Hold Up!</h4>
                    <p>This room is not 1 month old, do you want to update ?</p>
                    <button class="btn btn-success" data-dismiss="modal"><span>Oke</span> <i class="material-icons">&#xE5C8;</i></button>
                </div>
            </div>
        </div>
    </div>


</body>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>




<script>
    function add_user(id = '') {
        var user_data = $('.user_form').find('input, select, button');
        var form_data = user_data.serialize();
        var form_data = form_data + '&<?php echo csrf_token(); ?>:<?php echo csrf_hash(); ?>&id=' + id;

        console.log(user_data)
        // $.ajax({
        //     type: 'POST',
        //     url: '<?= site_url('home/add'); ?>',
        //     data: form_data,
        //     async: false,
        //     dataType: 'json',
        //     success: function(msg) {}

        // })
    }
    var result = "";
    data = <?= json_encode($data) ?>;
    data2 = <?= json_encode($data2) ?>;

    console.log(data2, data)

    window.onload = function() {
        data2 = <?= json_encode($data) ?>;
        data = <?= json_encode($data) ?>;
        // var a = data2[0].id
        // var b = data2[0].building_id
        // var c = data2[0].customer_id
        // var d = data2[0].customer_name
        // var e = data2[0].room_id
        // var f = data2[0].measure
        // var g = data2[0].measurement_date
        // var h = data2[0].image
        // var i = data2[0].user_id
        // // console.log(data2)
        // // console.log( Object.keys(data2).length )
        // // var count_room = data2.count();

        // if (a === "" || b === "" || c === "" || d === "" || e === "" || f === "" || g === "" || h === "" || i === "") {

        //     var count_room = Object.keys(data2).length
        //     document.getElementById("label_id_rom").innerHTML = count_room;
        // }

        i = 0;
        a = data2[0]['room_id'];
        b = data2[0]['customer_name'];

        document.getElementById("nameValue").innerHTML = a + " " + b;

        if (a == "" || b == "") {
            alert("This Buildling don't have room")
        }

        if (data[0]['CheckDB'] == 1) {
            var x = document.getElementById("checked");
            if (x.style.display === "none") {
                $('#checked ').hide()

            } else {
                $('#checked').show()
                // var btn = document.getElementById('updateData');
                // btn.disabled = true;
            }
        }



        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = today.getFullYear();
        today = mm + '/' + dd + '/' + yyyy;
        document.getElementById("pre_value").innerHTML = today;
    }

    function dat() {
        data2 = <?= json_encode($data2) ?>;
        s = $("#search option:selected").text();
        var numb = s.match(/\d/g);
        id = numb.join("");
        bc = id.slice(0, 1);
        var select = document.getElementById('search');
        var agent_id = select.options[select.selectedIndex].value;
        var numb1 = agent_id.match(/\d/g);
        id1 = numb1.join("");
        c = id1 - 1
        b = data2[c]['building_id']
        e = data2[c]['id']

        window.location.href = "/watermeasure/public/Mobile/add?id=" + e + "&building_id=" + b;
    }


    $(document).ready(function() {


        $("li").click(function() {
            var input = $(this).attr("value");
            if (input != "AC" && input != "CE") {
                result += input
            } else if (input == "AC") {
                result = "";
            } else if (input == "CE") {
                result = result.slice(0, -1);
            }
            $("#result").val(result);
            getVlue(result);
        });


        $("#workOrderCompletedDate").datepicker({
            autoclose: true,
            todayHighlight: true,
            changeYear: true,
            changeMonth: true,
            dateFormat: 'mm/dd/yy',
            minDate: new Date('01/01/1900'),
            maxDate: '+1Y'

        }).on("change", function() {
            var date = $("#workOrderCompletedDate").datepicker({
                dateFormat: 'dd,MM,yyyy'
            }).val();
            if (date !== null) { // if any date selected in datepicker
                document.getElementById("pre_value").innerHTML = date;

                checkForm()
            } else {
                // alert(1)
            }
        });

        function getVlue(result, first_value) {
            var first_value = data[0].measure;
            var result_measure = result - first_value;
            var label = $('#pre_value')
            var text = label.text();
            var str = "Day Previous Value"

            if (result_measure > 5 || result_measure <= -2 || str == text) {
                if (text == str) {
                    document.getElementById("snackbar").innerHTML = "Please Check the Present Date Form";
                    myFunction()
                } else {
                    document.getElementById("final_vl").innerHTML = result_measure;
                }
            } else {
                document.getElementById("final_vl").innerHTML = result_measure;
            }







        }

        function checkForm() {
            a = document.getElementById('date_old').innerHTML;
            let c = new Date(a);
            d = c.toLocaleDateString("en-US")

            b = document.getElementById("pre_value").innerHTML
            var d1 = new Date(d);
            var d2 = new Date(b);
            var diff = new Date(d2.getTime() - d1.getTime());


            resultDay = diff.getUTCMonth()
            console.log(resultDay)
            if (resultDay == 0 || resultDay >= 2) {

            }


        }



    });

    function checkKeyBoard() {
        var x = document.getElementById("table1");
        if (x.style.display === "none") {
            $('#table1').show()
        } else {
            $('#table1').hide()
        }
    }





    var tempImage = [];

    function readURL(input) {
        // console.log(input.files[0]);
        if (input.files && input.files[0]) {
            tempImage = input.files[0];
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.image-upload-wrap').hide();
                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();
                $('.image-title').html(input.files[0].name);
                console.log(input.files[0].name);
            };
            reader.readAsDataURL(input.files[0]);
            myFunction()
            checkKeyBoard();
        } else {
            removeUpload();
        }
    }


    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
        checkKeyBoard()

    }

    $('#updateData').click(function() {

        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        today = mm + '/' + dd + '/' + yyyy;


        var dataSearch = $('#info').text();
        var new_value = $('#result').val();
        var id = data[0].room_id;
        var user_id = data[0].user_id;
        // console.log(today, new_value, id, user_id)

        if (data[0].CheckDB == 1 && new_value != "") {
            var checkdb = 1
            bootbox.confirm({
                size: "small",
                message: "This Rom arealdy updated ! Do you want to update",
                buttons: {
                    cancel: {
                        label: "<i class='fa fa-times'></i> Cancel"
                    },
                    confirm: {
                        label: "<i class='fa fa-check'></i> Confirm"
                    }
                },
                callback: function(result) {

                    if (result == true) {
                        myFunction()
                    }

                }
            })

        } else {
            var checkdb = 0
        }

        alert(checkdb)
        if (new_value != null) {
            $.ajax({
                url: "<?= base_url("watermeasure/public/Mobile/add") ?>",
                type: "POST",
                data: {
                    user_id: data[0].user_id,
                    measurement_date: today,
                    room_id: data[0].room_id,
                    measure: $('#result').val(),
                    image: tempImage['name'],
                    imageType: tempImage['type'],
                    measurement_date_old: data[0]['measurement_date'],
                    checkdb: checkdb,
                },
                success: function(data) {
                    // console.log(asdasd)
                },
            });
            location.reload(true);
        } else {

        }
    })

    function showKeyBoard() {
        var x = document.getElementById("table1");
        if (x.style.display === "none") {
            $('#table1').show()
        } else {
            $('#table1').hide()
        }
    }






    function myFunction() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 3000);
    }
</script>
</body>

</html>