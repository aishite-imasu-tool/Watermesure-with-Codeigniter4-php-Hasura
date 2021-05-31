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
</style>
<?php $session = session();?>
<section>
    <!--for demo wrap-->
    <nav class="navbar navbar-dark bg-light">
        <h1>水道検診システム</h1>
        <a class="btn_right" style="color: black;">管理 </a>
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

    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>マンション名</th>
                    <th>検針年月</th>
                    <th>総戸数</th>
                    <th>済戸数</th>
                    <th>管理員</th>
                    <th>ダウンロード</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0">
            <tbody>

                <?php foreach($data as $key => $value): ?>
                <tr>
                    <td onclick="location.href='/watermeasure/public/apartmentDetail?id=<?= isset($value['id']) == true ? ($value['id']) : '' ?>&building_name=<?= isset($value['building_name']) == true ? ($value['building_name']) : '' ?>&measurement_date=<?= isset($value['measurement_date']) == true ? ($value['measurement_date']) : '' ?>&totalUnits=<?= isset($value['totalUnits']) == true ? ($value['totalUnits']) : '' ?>&unitsCompleted=<?= isset($value['unitsCompleted']) == true ? ($value['unitsCompleted']) : '' ?>&manager_name=<?= isset($value['manager_name']) == true ? ($value['manager_name']) : '' ?>&manager_email=<?= isset($value['manager_email']) == true ? ($value['manager_email']) : '' ?>'"
                        style="text-decoration: underline; color: blue">
                        <?= isset($value['id']) == true ? ($value['id']) : '' ?></td>
                    <td><?= isset($value['building_name']) == true ? ($value['building_name']) : '' ?></td>
                    <td><?= isset($value['measurement_date']) == true ? ($value['measurement_date']) : '' ?></td>
                    <td><?= isset($value['totalUnits']) == true ? ($value['totalUnits']) : '' ?></td>
                    <td><?= isset($value['unitsCompleted']) == true ? ($value['unitsCompleted']) : '' ?></td>
                    <td><?= isset($value['manager_name']) == true ? ($value['manager_name']) : '' ?></td>
                    <td><button id="btnDownload" value="<?= isset($key) == true ? ($key) : '' ?>"
                            class="download__input">DOWNLOAD</button></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</section>
<div class="btn_right">
    <button onclick="location.href='/watermeasure/public/upload'" class="upload__input">UPLOAD</button>
</div>

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
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>
var data = <?=json_encode($download)?>;
var dataCsv = [];

$(document).on("click", "#btnDownload", function(e) {

    if(data[$(this).val()].data.length > 0) {
        for(var i=0;i<data[$(this).val()].data.length; i++) {

            var room_id     = data[$(this).val()].data[i].id;
            var building_id = data[$(this).val()].data[i].building_id;
            var customer_id = data[$(this).val()].data[i].customer_id;
            var customer_name = data[$(this).val()].data[i].customer_name;
            
            if(data[$(this).val()].data[i].dataLast != undefined) {
                var measurement_date_old = data[$(this).val()].data[i].dataLast.measurement_date;
                var measure_old = data[$(this).val()].data[i].dataLast.measure;
            } else {
                var measurement_date_old = '';
                var measure_old = '';
            }
            if(data[$(this).val()].data[i].dataRoomUnitsCompleted != undefined) {
                var measurement_date_new = data[$(this).val()].data[i].dataRoomUnitsCompleted.measurement_date;
                var measure_new = data[$(this).val()].data[i].dataRoomUnitsCompleted.measure;
            } else {
                var measurement_date_new = '';
                var measure_new = '';
            }

            // console.log(data[$(this).val()].data[i].dataRoomUnitsCompleted);
            var usage_amount = measure_new - measure_old;
            dataCsv.push([ room_id, building_id, customer_id, customer_name, measurement_date_new, measure_new, measurement_date_old, measure_old, usage_amount]);
        }
    }
  
    var csv = 'room id,building id,customer id,customer name,measurement date new,measure new,measurement date old,measure old,Usage amount\n';
    dataCsv.forEach(function(row) {
            csv += row.join(',');
            csv += "\n";
    });

    var today = new Date();
    var time = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear()+'-'+today.getHours()+'-'+today.getMinutes()+'-'+today.getSeconds();

    var hiddenElement = document.createElement('a');
    hiddenElement.href = 'data:text/csv;charset=utf-8,' + encodeURI(csv);
    hiddenElement.target = '_blank';
    hiddenElement.download = 'water-testing-system-'+time+'.csv';
    hiddenElement.click();

    dataCsv = [];
});
</script>