<!DOCTYPE html>
<html>
<head>
	<title>Peminjaman</title>
	<link rel="stylesheet" type="text/css" href="/css/index_style.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <script type="text/javascript" src="{{ asset('/js/game.js') }}"></script>

</head>
<body>
	<div class="container">
        <div class="card">
            <div class="card-header">

                <header>
                    <h3>Selamat Datang Di Peminjaman Barang</h3>
                    <nav>
                        <a class="btn btn-info btn-sm" href="/index/barang">Daftar Barang</a>
                        |
                         <a class="btn btn-info btn-sm" href="/index/kelas">Data Siswa</a>
                        |
                        <a class="btn btn-info btn-sm" href="/index/transaksi">Transaksi</a>
                        |    
                        <a class="btn btn-danger btn-sm" href="/Logout">Logout</a>

                    </nav>
                </header>
            </div>  

                <hr/>
               
            <div class="card-body">

                <canvas id="game" width="400" height="400"></canvas>

            </div>    

   
                <hr/>

            <div class="card-footer">    
                <footer>
                    <p>&copy; <a href="https://www.instagram.com/satyaaypr/">instaram.com/satyaaypr</a>.2021</p>     
                <footer>   
            </div>    	
        </div>
    </div>    

		
</body>
</html>