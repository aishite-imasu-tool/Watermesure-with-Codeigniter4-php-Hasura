<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
h1 {
    font-size: 30px;
    color: #DC143C;
}

table {
    width: 100%;
    table-layout: fixed;
    /* background: #ffff; */
    /* border: 1px solid #000000; */
}

.tbl-header {
    background-color: #48D1CC;
}

.tbl-content {
    height: 700px;
    overflow-x: auto;
    margin-top: 0px;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

th {
    padding: 20px 15px;
    text-align: left;
    font-weight: 500;
    font-size: 15px;
    color: #F5FFFA;
    text-transform: uppercase;
}

td {
    padding: 15px;
    text-align: left;
    vertical-align: middle;
    font-weight: 300;
    font-size: 12px;
    color: #000;
    border-bottom: solid 1px #C0C0C0;
    /* border: 1px solid #FFF8DC; */
}


/* demo styles */

body {
    background: linear-gradient(to right, #f9f9f92b, #f9f9f92b);
    font-family: 'Roboto', sans-serif;
}

section {
    margin: 10px;
}

/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

.upload__input {
    color: white;
    font-size: 1.15rem;
    width: 15%;
    padding: .5rem 1rem;
    border: 2px solid transparent;
    outline: none;
    border-radius: 0.4rem;
    background-color: #1E90FF;
    letter-spacing: 1px;
}

.btn_right {
    text-align: right;
    margin-right: 30px
}

.download__input {
    color: white;
    width: 100%;
    padding: .5rem 1rem;
    border: 2px solid transparent;
    outline: none;
    border-radius: 0.4rem;
    background-color: #32CD32;
    letter-spacing: 1px;
}

.valueTop {
    text-align: center;
}

.btn_back {
    color: white;
    font-size: 1.15rem;
    width: 100%;
    padding: .5rem 1rem;
    border: 2px solid transparent;
    outline: none;
    border-radius: 0.4rem;
    background-color: #1E90FF;
    letter-spacing: 1px;
}

.tbl-header-value-users {
    background-color: #FFFFFF;
}

.color-value-users {
    color: #000000;
}

.navbar {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    justify-content: space-between;
    padding: .5rem 1rem;
}

.navbar-toggler {
    padding: .25rem .75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent;
    border-radius: .25rem;
    background: #778899;
}

.modal-dialog {
    FONT-VARIANT: JIS78;
    FONT-VARIANT: JIS78;
    max-width: 800px;
    margin: 1.75rem auto;
}

.canvas {
    border: 1px solid #000000;
    height: 500px;
    width: 100%;
}


/* end */
</style>
<?php $session = session();?>
<section>
    <!--for demo wrap-->
    <nav class="navbar navbar-dark bg-light">
        <h1>????????????????????????</h1>
        <a class="btn_right" style="color: black;">?????? </a>
        <a class="btn_right" style="color: black;"><?= $session->get('name');?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation" style="color: black;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

            </ul>

            <div>
                <span class="navbar-text">

                    <a class="nav-link" href="#" style="color: black;">screen1 <span class="sr-only"></span></a>
                </span>
            </div>
            <div>
                <span class="navbar-text">
                <a class="nav-link" href="<?=base_url("/watermeasure/public/login/logout");?>" style="color: #007bff">Logout<span class="sr-only"></span></a>
                </span>
            </div>

        </div>
    </nav>

    <div class="tbl-header-value-users">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th class="color-value-users"><?= isset($building_name) == true ? ($building_name) : '' ?>???????????????</th>
                    <th class="color-value-users">
                        ???????????????<?= isset($measurement_date) == true ? ($measurement_date) : '' ?></th>
                    <th class="color-value-users">????????????<?= isset($totalUnits) == true ? ($totalUnits) : '' ?></th>
                    <th class="color-value-users">????????????<?= isset($unitsCompleted) == true ? ($unitsCompleted) : '' ?>
                    </th>
                    <th class="color-value-users">????????????<?= isset($manager_name) == true ? ($manager_name) : '' ?></th>
                    <th class="color-value-users">????????????????????????<?= isset($manager_email) == true ? ($manager_email) : '' ?>
                    </th>
                    <th><button onclick="btnBack()" class="btn_back">?????????</button></th>
                </tr>
            </thead>

        </table>
    </div>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>???NO</th>
                    <th>??????NO</th>
                    <th>??????????????????</th>
                    <th>?????????ID</th>
                    <th>????????????</th>
                    <th>???????????????</th>
                    <th>???????????????</th>
                    <th>???????????????</th>
                    <th>?????????</th>
                    <th>?????????</th>
                    <th>???</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table id="tbShow" cellpadding="0" cellspacing="0">
            <tbody>

                <?php foreach($data as $key => $value): ?>
                <tr>
                    <td><?= isset($key) == true ? ($key+1) : '' ?></td>
                    <td><?= isset($value['id']) == true ? ($value['id']) : '' ?></td>
                    <td><?= isset($value['dataRoomUnitsCompleted']['measurement_date']) == true ? ($value['dataRoomUnitsCompleted']['measurement_date']) : '' ?>
                    </td>
                    <td><?= isset($value['customer_id']) == true ? ($value['customer_id']) : '' ?></td>
                    <td><?= isset($value['customer_name']) == true ? ($value['customer_name']) : '' ?></td>
                    <td><?= isset($value['dataLast']['measurement_date']) == true ? ($value['dataLast']['measurement_date']) : '' ?>
                    </td>
                    <td><?= isset($value['dataLast']['measure']) == true ? ($value['dataLast']['measure']) : '' ?></td>
                    <td><?= isset($value['dataRoomUnitsCompleted']['measure']) == true ? ($value['dataRoomUnitsCompleted']['measure']) : '' ?>
                    </td>
                    <td><?= isset($value['dataRoomUnitsCompleted']['measure']) && isset($value['dataLast']['measure']) == true ? ($value['dataRoomUnitsCompleted']['measure']) - ($value['dataLast']['measure']) : '' ?>
                    </td>
                    <td><?= isset($value['manager_name']) == true ? ($value['manager_name']) : '' ?></td>
                    <td>
                        <button id="btnImageClock"
                            value="<?= isset($value['dataRoomUnitsCompleted']['image']) == true ? ($value['dataRoomUnitsCompleted']['image']) : 'https://vanhoadoanhnghiepvn.vn/wp-content/uploads/2020/08/112815953-stock-vector-no-image-available-icon-flat-vector.jpg' ?>"
                            type="button" class="download__input" data-toggle="modal" data-target="#register"
                            data-whatever="@getbootstrap">???</button>
                    </td>
                </tr>
                <?php endforeach ?>

                </tr>
            </tbody>
        </table>
    </div>
</section>
<div class="btn_right">
    <!-- <button onclick="upload()" class="upload__input">??????</button> -->
    <button onclick="location.href='/watermeasure/public/top'" class="upload__input">??????</button>
</div>


<!--popup-->
<div class="col-lg-12 col-md-12">

    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span>IMAGE</span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- IMAGE -->
                    <div class="form-group">
                        <img class="canvas" id="srcImage" />
                    </div>
                    <!-- END IMAGE -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><span>CLOSE</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--popup-->

<!--  -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script>
$(document).on("click", "#btnImageClock", function(e) {
    document.getElementById("srcImage").src = $(this).val();
});

function btnBack() {
    window.location = "/watermeasure/public/apartmentDetail/sendMail";
}
</script>