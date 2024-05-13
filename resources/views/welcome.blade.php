<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Pemrog. Integrative A1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }

        .menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .menu li {
            display: inline-block;
            margin-right: 20px;
        }

        .menu li a {
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .menu li a:hover {
            color: #ffd700; /* Warna saat hover */
        }

        .content {
            padding: 20px;
            background-color: #f8f8f8;
            margin-top: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            color: #333;
        }

        .content p {
            color: #666;
            line-height: 1.6;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<nav class="navbar">
    <ul class="menu">
        <li><a href="#" id="menu-home"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="#" id="menu-mahasiswa"><i class="fas fa-user-graduate"></i> Mahasiswa</a></li>
        <li><a href="#" id="menu-about"><i class="fas fa-info-circle"></i> About</a></li>
    </ul>
</nav>

<div id="content" class="content">
    <!-- Area konten yang akan diubah -->
</div>

<script>
    $(document).ready(function() {
        $('#menu-home').click(function(e) {
            e.preventDefault();
            loadContent('/home');
        });

        $('#menu-mahasiswa').click(function(e) {
            e.preventDefault();
            loadContent('/mahasiswa');
        });

        $('#menu-about').click(function(e) {
            e.preventDefault();
            loadContent('/about');
        });

        function loadContent(url) {
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('#content').html(response);
                },
                error: function(xhr) {
                    $('#content').html('Terjadi kesalahan. Silakan coba lagi.');
                }
            });
        }
    });
</script>

</body>
</html>
