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
    height: 510px;
    overflow-x: auto;
    margin-top: 0px;
    border: 1px solid rgba(255, 255, 255, 0.3);
}

th {
    padding: 20px 15px;
    text-align: left;
    font-weight: 500;
    font-size: 30px;
    text-transform: uppercase;
    color: #000000;
    text-align: center;
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

.back_center {
    text-align: center;
    color: blue;
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

    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th style="font-weight: 600;">下記マンションの検針データをUPLOADしました。</th>
                </tr>
                <table cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="text-align: right;">マンション名　:</th>
                            <th style="text-align: left;">XXXXXXXXXXXXXXX</th>
                        </tr>
                        <tr>
                            <th style="text-align: right;">検針年月　　　:</th>
                            <th style="text-align: left;">2021年04月</th>
                        </tr>
                        <tr>
                            <th style="text-align: right;">検針データ数　:</th>
                            <th style="text-align: left;">1200戸</th>
                        </tr>
                        <tr>
                            <th style="text-align: right;">管理員名　　　:</th>
                            <th style="text-align: left;">鈴木　一郎</th>
                        </tr>
                        <tr>
                            <th style="text-align: right;">メールアドレス:</th>
                            <th style="text-align: left;">aaaa@bbb.com</th>
                        </tr>
                    </thead>
                </table>
            </thead>
        </table>
    </div>

</section>
<div class="back_center">
    <a href='/watermeasure/public/top'>top画面に戻る</a>
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

<script>
function upload() {
    alert('Upload_button');
}

</script>