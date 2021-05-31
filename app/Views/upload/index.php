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
    width: 35%;
    padding: .5rem 1rem;
    border: 2px solid transparent;
    outline: none;
    border-radius: 0.4rem;
    background-color: #32CD32;
    letter-spacing: 1px;
}

canvas {
    border: 1px solid #000000;
    height: 300px;
    width: 350px;
}

.center-canvas {
    text-align: center;
}

/* start */

.file-upload-input {
    position: absolute;
    margin: 0;
    padding: 0;
    height: 300px;
    width: 350px;
    outline: none;
    opacity: 0;
    cursor: pointer;
}

.file-upload-input-btn {
    position: absolute;
    margin: 0;
    padding: 0;
    outline: none;
    opacity: 0;
    cursor: pointer;
    padding: 10px 0px;
}


.login__input {
    color: #000000;
    font-size: 1.15rem;
    width: 70%;
    padding: .5rem 1rem;
    border: 1px solid transparent;
    border-color: #000000;
    outline: none;
    background-color: rgb(255 255 255);
    letter-spacing: 1px;
}

.text-right {
    text-align: right;
    color: #000000;
}

.text-left {
    text-align: right;
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

/* end */
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

    <div>
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th class="center-canvas">
                        <script src="https://www.dukelearntoprogram.com//course1/common/js/image/SimpleImage.js">
                        </script>
                        <input class="file-upload-input" type='file' accept=".csv" id="finput"
                            onchange="getfile(this)" />
                        <canvas id="can">
                        </canvas>
                    </th>
                </tr>
            </thead>
        </table>
    </div>

    <div>
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th class="text-right">ｃｓｖファイル：</th>
                    <th class="center-canvas"><input id="csv_file" class="login__input" type="text" style="background-color: rgb(202 199 199);"/></th>
                    <th><input class="file-upload-input-btn" type='file' accept=".csv" id="finput"
                            onchange="getfile(this)" /><button class="download__input">選択</button>
                    </th>
                </tr>
                <tr>
                    <th class="text-right">管理員名：</th>
                    <th class="center-canvas"><input id="Administrator_name" class="login__input" type="text" /></th>
                    <th></th>
                </tr>
                <tr>
                    <th class="text-right">メールアドレス：</th>
                    <th class="center-canvas"><input id="mail_address" class="login__input" type="text" /></th>
                    <th></th>
                </tr>
                <tr>
                    <th></th>
                    <th class="center-canvas">
                        <button onclick="location.href='/watermeasure/public/top'" class="download__input">中 止</button>
                        <!-- <button onclick="location.href='/watermeasure/public/uploadCompleted'" class="download__input">登 録</button> -->

                        <button onclick="upload()" class="download__input">登 録</button>

                    </th>
                </tr>
            </thead>
        </table>
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
    var image = null;
    var imgcanvas = document.getElementById("can");
    var fileInput = null;

    $(document).ready(function() {
        $('#csv_file').prop('disabled',true);
    });

    function getfile(input) {
        if (input.files[0]) {
            const file = input.files[0];
            const fileType = file['type'];
            const validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
            fileInput = input.files;
            if (!validImageTypes.includes(fileType)) {
                // file no image

                const context = imgcanvas.getContext('2d');
                context.clearRect(0, 0, imgcanvas.width, imgcanvas.height);

                context.font = "15px Arial";
                context.fillText(input.files[0].name, 15, 80);

                $("#csv_file").val(input.files[0].name);

            } else {
                // file image

                // var fileinput = document.getElementById("finput");
                // image = new SimpleImage(fileinput);
                // image.drawTo(imgcanvas);

                alert('import file .CSV');
            }

        }
    }


    var ctx = imgcanvas.getContext("2d");
    ctx.font = "15px Arial";
    ctx.fillText("ここにファイルをドロップしてください", 15, 80);

    function download() {
        alert('Download_button');
    }

    function upload() {

        // const reader = new FileReader();
        // reader.onload = function () {
        //     console.log(reader.result);
        //     const lines = reader.result.split('\n').map(function (line) {
        //         return line.split(',');
        //     });
        //     console.log(lines);
        // }
        // reader.readAsText(fileInput);

        if ($('#csv_file').val() != '') {
            getFile(fileInput, 'UTF-8');
        } else {
            alert("import file .csv");
        }
    }

    // star upload file csv
    (function() {
        var errorDetectingSeparator = "Could not detect the separator.",
            errorEmpty = "Please upload a file or type in something.",
            errorEmptyHeader =
            "Could not detect header. Ensure first row cotains your column headers.",
            separators = [",", ";", "\t"];

        function CSVtoArray(strData, strDelimiter) {
            strDelimiter = strDelimiter || ",";
            var objPattern = new RegExp(
                // Delimiters
                "(\\" +
                strDelimiter +
                "|\\r?\\n|\\r|^)" +
                // 有引號 ("") 的字串
                '(?:"([^"]*(?:""[^"]*)*)"|' +
                // Standard fields
                "([^\\" +
                strDelimiter +
                "\\r\\n]*))",
                "gi"
            );

            var aryData = [
                    []
                ],
                aryMatches = null;
            while ((aryMatches = objPattern.exec(strData))) {
                var strMatchedDelimiter = aryMatches[1]; // 取得分隔符
                // 檢查分隔符是否有長度 (每列開頭) + 是否不是該分隔符 + 最後一列不是空的 (只有換行)
                // 如果為 ture 代表是某列之開頭，所以需為陣列新增一列
                if (
                    strMatchedDelimiter.length &&
                    strMatchedDelimiter !== strDelimiter &&
                    aryMatches[0] !== "\r\n"
                )
                    aryData.push([]);

                // 如果有引號的字串就使用引號，如沒有使用引號的字串則檢查是否為空欄位
                var strMatchedValue = aryMatches[2] ?
                    aryMatches[2].trim().replace(/\"\"/g, '"') :
                    aryMatches[2] == "" ?
                    aryMatches[2] :
                    aryMatches[3];

                if (aryMatches[0] !== "\r\n")
                    aryData[aryData.length - 1].push(strMatchedValue);
            }
            return aryData;
        }

        /**
         * options:
         *  - transpose (轉置):  optional / true
         *  - hash:             optional / true
         *  - parseNumbers:     optional / true
         *  - separator (分隔):  optional / "," / ";" / "  " (Tab)
         */
        function convert(csv, options) {
            options || (options = {});
            if (csv.length == 0) throw errorEmpty;

            var separator = options.separator || detectSeparator(csv);
            if (!separator) throw errorDetectingSeparator;

            var ary = CSVtoArray(csv, separator);
            if (!ary) throw errorEmpty;

            var keys = ary.shift();
            if (keys.length == 0) throw errorEmptyHeader;
            keys = keys.map(function(key) {
                return key.trim().trim('"');
            });

            var json = options.hash ? {} : [];
            for (var i = 0; i < ary.length; i++) {
                var row = {},
                    hashKey;
                for (var k = 0; k < keys.length; k++) {
                    var value = ary[i][k].trim().trim('"');
                    if (options.hash && k == 0) hashKey = value;
                    else {
                        var number = value === "" ? NaN : value - 0;
                        row[keys[k]] = isNaN(number) || !options.parseNumbers ? value : number;
                    }
                }
                if (options.hash) json[hashKey] = row;
                else json.push(row);
            }
            return json;
        }

        this.csv2json = convert;
    }.call(this));


    function escapeRegExp(str) {
        return str.replace(/([.*+?^=!:${}()|[\]\/\\])/g, "\\$1");
    }

    var fileText, csvObjects, jsonText;

    function getFile(files, charset = 'UTF-8') {
        var reader = new FileReader();
        if (charset) {
            reader.readAsText(files[0], charset);
        } else {
            reader.readAsText(files[0]);
        }
        reader.onload = function(event) {
            fileText = event.target.result;
            processData(fileText);
        };
        reader.onerror = function(err) {
            reject(err);
        };
    }

    function processData(csvText) {
        csvObjects = csv2json(csvText, {
            separator: ','
        });
        jsonText = JSON.stringify(csvObjects, null, 2);

        //console.log(csvText);
        //console.log(jsonText);

        $.ajax({
            type: "POST",
            url: "<?php echo base_url("/watermeasure/public/upload/addUsersInFile");?>",
            data: {
                data: jsonText,
            },
            success: function(data) {
                window.location = '/watermeasure/public/uploadCompleted';
            }
        });


    }

    function uploadFile(files) {
        getFile(files, 'UTF-8');
    }
    // end upload file csv
    </script>