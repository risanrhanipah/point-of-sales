<!DOCTYPE html>
    <html>
        <head>
            {{-- Data Tabel --}}
            <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
            <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
            <script src="js/jquery-3.1.0.js"></script>
            <script src="js/jquery.dataTables.min.js"></script>
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
            <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
            
            <script type="text/javascript" src="assets/DataTables/media/js/jquery.js"></script>
            <script type="text/javascript" src="assets/DataTables/media/js/jquery.dataTables.js"></script>
            <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
            <link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/jquery.dataTables.css">
            <link rel="stylesheet" type="text/css" href="assets/DataTables/media/css/dataTables.bootstrap.css">

            <title>barang</title>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
        </head>
    <body>
        <div class="container">
            @yield('content')
        </div> 
    </body>
    <script>
        $(document).ready(function(){
            $('#table-data').DataTable();
        });
    </script>
    <style>
    html, body {
    position: relative;
    /* text-align: center; */
    /* display: flex; */
    justify-content: center;
    align-items: 100px; 
    /* min-height: 100%; */
    background:url(../assets/css/ak.png) no-repeat;
    background-size: 100%;
}
</style>
</html>
