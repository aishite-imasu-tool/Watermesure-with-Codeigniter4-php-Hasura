<head>
    <title>EXCEEDマンション</title>
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, initial-scale=1.0, user-scalable=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css" rel="stylesheet" />
    <? header('Content-Type: application/javascript'); ?>

</head>
<?php
    header('Content-Type: text/javascript; charset=UTF-8');
?>

<style>
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

    button #camra {
        background: url(public/assets/img/media/camera.png) no-repeat;
    }
</style>

<body>

    <div class="column">
        <div class="card" style="background-color: #f2f3f8 ; height: 100%;">
            <div class="container mt-4">
                <nav class="navbar navbar-dark bg-dark" style="border-radius: 5px;">
                    <a class="navbar-brand" href="#">EXCEEDマンション</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-item nav-link" type='submit' href="<?php echo base_url("Mobile/add"); ?>">Detail Water Measure</a>
                        </div>
                    </div>
                </nav>
                <div class="mt-3 table-responsive">
                    <table class="table table-striped table-bordered table-vcenter text-nowrap mb-0">
                        <thead>
                            <tr>
                                <th class="wd-lg-20p text-center">
                                    <select class="form-control" id="search" onchange="dat2()">
                                        <option disabled selected id="nameValue" style="background-color: #C1B4B4;">Select Room ID</option>
                                        <?php foreach ($data2 as $key => $value) : ?>
                                            echo '<option><?php echo $value['id'] . ' ' . $value['building_name'] ?></option>';
                                        <?php endforeach ?>

                                    </select>
                                </th>
                                <th class="wd-lg-20p text-center"><input type="text" class=" custom-select" id="workOrderDate" placeholder="Select Date" autocomplete="off"></th>

                                <th class="wd-lg-20p text-center"> <label id="label_id_rom">4</label><label>/40完了</label></th>
                            </tr>
                        </thead>
                    </table>

                    <div class="row row-sm">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="table-responsive userlist-table">
                                        <table id="checking_list" class="table table-striped table-bordered table-vcenter btn-table text-nowrap mb-0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="wd-lg-8p text-center"><span><?= lang('component.id_building') ?></span></th>
                                                    <th class="wd-lg-20p text-center"><span><?= lang('component.previous_value') ?></span></th>
                                                    <th class="wd-lg-20p text-center"><span><?= lang('component.worth_this_time') ?></span></th>
                                                    <th class="wd-lg-20p text-center"><span><?= lang('component.money_used') ?></span></th>
                                                    <th class="wd-lg-10p text-center"><span><?= lang('component.camera') ?></span></th>

                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <p><input class="btn btn-primary" type='submit' name='submit' id="updateData" value="再送信" style="margin-top: 20px; " onclick="myFunction()"></input> </p>
                    <div id="snackbar">This function is being tested</div>
                </div>
            </div>
        </div>
    </div>

</body>






<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

<script  type="text/javascript" src="/watermeasure/public/assets/sw/function.js"></script>





<script>
    data = <?= json_encode($data) ?>;
    data2 = <?= json_encode($data2) ?>;
    // console.log(data2, data);


    window.onload = function() {
        a = data[0]['building_id'];
        b = data2[0]['building_name'];
        document.getElementById("nameValue").innerHTML = a + " " + b;

        if (a == "" || b == "") {
            alert("This Buildling don't have room")
        }


        if ($("workOrderDate").text() == "") {
            var today = new Date();
            var date = (today.getMonth() + 1) + '/' + today.getDate() + '/' + today.getFullYear();
            document.getElementById("workOrderDate").placeholder = date;
            // console.log(date)
        }

    }

    function dat2() {
        var date = $("#workOrderDate").datepicker({
            dateFormat: 'dd,MM,yyyy'
        }).val();

        var dataSearch = $(this).find('option:selected').val();
        var label = $('#workOrderDate')
        var text = label.val();
        var str = ""

        var label = $('#workOrderDate')
        var text = label.val();
        var select = document.getElementById('search');
        var agent_id = select.options[select.selectedIndex].value;
        var numb = agent_id.match(/\d/g);
        id = numb.join("");

        alert(id)
        window.location.href = "/watermeasure/public/Mobile/index?id=" + id + "&measurement_date=" + text;

    }



    $(document).ready(function() {
        $.fn.dataTable.ext.errMode = 'none';
        var dataTable = $('#checking_list').DataTable({
            responsive: true,
            searching: false,
            filter: false,
            ordering: false,
            select: true,
            paging: false,
            processing: true,
            data,
            columnDefs: [{
                orderable: false,
                targets: -1,
            }],
            columns: [{
                    data: 'id',
                    "className": "text-center",
                },
                {
                    data: 'measure_old',
                    "className": "text-center",
                },
                {
                    data: 'measure_new',
                    "className": "text-center",
                },
                {

                    data: 'usage_amount',
                    "className": "text-center",
                    "createdCell": function(td, cellData, rowData, row, col) {
                        if (cellData <= -2 || cellData >= 2) {
                            $(td).css('color', 'red')
                        }
                    }
                },
                {
                    data: 'image',
                    "className": "text-center",
                    render: function(data, type, row, meta) {
                        var html = '<img src="https://img.icons8.com/metro/52/000000/camera.png" id="camera" class="file-upload-btn" type="button" />';
                        return row.innerHTML = html;
                    }

                },
            ]
        })



        var filteredData = dataTable
            .column(2)
            .data()
            .filter(function(value, index) {
                return value != null ? true : false;
            });
        a = filteredData.count();

        document.getElementById("label_id_rom").innerHTML = a;
        $('img').click(false);
        $('img').on('click', function() {
            var a = dataTable.row($(this)).data();
            alert(a)
            data = <?= json_encode($data) ?>;
            const arr = data;
            console.log(arr)

            function userExists(image) {
                return arr.some(function(el) {
                    return data.image === image;
                });
            }
            console.log(userExists(data.image)); // true
        })


        $('#checking_list tbody').on('click', 'tr', function() {
            var a = dataTable.row($(this)).data();
            console.log(a)
            window.location.href = "/watermeasure/public/Mobile/add?id=" + a.id + "&building_id=" + a.building_id;

        });


        $("#workOrderDate").datepicker({
            autoclose: true,
            inline: true,
            sideBySide: true,
            stepping: 5,
            format: 'mm/dd/yyyy',
            todayHighlight: true,
            pickTime: false,
            orientation: "bottom auto"
        }).on("change", function() {

        });




        $("#updateData").click(function() {

        })
        $('#checking_list').on('length.dt', function() {
            dataTable.draw(false);
        });

        $('#search_id').on("submit", function() {
            dataTable.state.clear();
        });





    });



    function myFunction() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function() {
            x.className = x.className.replace("show", "");
        }, 3000);
    }

    function showModal() {
        $('#exampleModal').modal('show');
    }
</script>
</body>

</html>