<?php
mysql_connect("localhost", "root");
mysql_select_db("pusri");

function sql($tgl) {
    $tglsql = substr($tgl, 6, 4) . "-" . substr($tgl, 3, 2) . "-" . substr($tgl, 0, 2);
    return $tglsql;
}

if (isset($_POST['addsubmit'])) { // jika tombol addsubmit ditekan
    $date1 = $_POST['date'];
    $date = sql($date1);
    $time = $_POST['time'];
    $datetime = $date . ' ' . $time;
    $title = $_POST['title'];
    $description = $_POST['deskripsi'];

    $simpan = mysql_query("INSERT INTO agenda(
                        date,                       
                        title, 
                        deskripsi)
                        
		VALUES(
                        '$datetime',                        
                        '$title', 
                        '$deskripsi'                        
                        )");

    echo '<script type="text/javascript">
                    alert("Jadwal berhasil Disimpan");</script>';
    echo "<meta http-equiv='refresh' content='0; url=home.php'>";
}; // if(kondisi) {hasil};
?>

 <div class="container" >
            <div class="row">
                <div class="col-lg-4">

                    <h2 class="h4">Kalender Ruangan Rapat</h2>
                    <p class="demoDesc">Jadwal ruangan rapat di PUSRI</p>
                    <div id="eventCalendarHumanDate"></div>
                    <script>
                        $(document).ready(function() {
                            $("#eventCalendarHumanDate").eventCalendar({
                                eventsjson: 'json/json.php',
                                jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
                            });
                        });
                    </script>
                </div>
            </div>
        </div>

        <hr/>
        <div class="col-lg-6">
            <form class="form-horizontal" enctype="multipart/form-data" role="form" method="post" id="jadwal" name="jadwal" action="agenda.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="textinput">Tgl Acara</label>
                        <div class="col-sm-4">
                            <div class="input-group date form_date col-md-12" >
                                <input name="date" placeholder="tgl acara" type="text" class="form-control"  required/>                                
                                Format : DD/MM/YYYY
                            </div>                         

                        </div>
                        <div class="col-sm-4">
                            <div class="input-group date form_date col-md-12" >
                                <input name="time" placeholder="waktu"  type="text" class="form-control"  required/>                                
                                Format : JJ:MM:SS
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="textinput">Judul <font color="red">*)</font></label>
                        <div class="col-sm-6">
                            <input name="title" type="text" class="form-control" placeholder="Judul" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="textinput">Uraian Acara <font color="red">*)</font></label>
                        <div class="col-sm-8">
                            <textarea id="inggris" name="deskripsi" cols="80" rows="10" class="form-control" required placeholder="Uraian Acara"></textarea>                            
                        </div>
                    </div>

                    <div class="modal-footer clearfix">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Edit</button>
                        <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-times"></i> Hapus</button>
                        <button type="submit" name="addsubmit" class="btn btn-primary pull-left" onClick="return confirm('Jadwal  akan disimpan?');"><i class="fa fa-save"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>   